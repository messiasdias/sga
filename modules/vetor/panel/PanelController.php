<?php

namespace modules\vetor\panel;

use Exception;
use Novosga\Context;
use Novosga\Controller\ModuleController;

/**
 * Vetor Panel controller.
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
class PanelController extends ModuleController
{
    const CONFIG_KEY = 'vetor.panel.config';

    public function index(Context $context)
    {
        $config = \Novosga\Model\Configuracao::get($this->em(), self::CONFIG_KEY);
        if ($config) {
            $data = $this->checkMigrations($config->getValor());
        } else {
            $data = json_encode(array(
                'news' => array(
                    'interval' => 30000,
                    'sources' => array(
                        array('url' => 'http://rss.uol.com.br/feed/noticias.xml', 'type' => 'googleapi'),
                    ),
                ),
                'widgets' => array(),
            ));
        }
        $this->app()->view()->set('config', $data);
    }

    public function save(Context $context)
    {
        $response = new \Novosga\Http\JsonResponse();
        try {
            if (!$context->request()->isPost()) {
                throw new Exception(_('Somente via POST'));
            }
            $json = $context->request()->getBody();
            \Novosga\Model\Configuracao::set($this->em(), self::CONFIG_KEY, $json);
            $response->success = true;
        } catch (Exception $e) {
            $response->data = $e->getMessage();
        }

        return $response;
    }

    /**
     * Atualiza o array com valores padrões em caso de atualização, criação
     * de novos índices.
     *
     * @param string $value
     */
    private function checkMigrations($value)
    {
        $data = json_decode($value, true);
        if (!isset($data['news'])) {
            $data['news'] = array();
        }
        if (!isset($data['news']['interval'])) {
            $data['news']['interval'] = 30000;
        }
        if (!isset($data['news']['sources'])) {
            $data['news']['sources'] = array();
        }
        if (sizeof($data['news']['sources'])) {
            $data['news']['sources'] = array_map(function ($feed) {
                if (!isset($feed['type'])) {
                    $feed['type'] = 'googleapi';
                }

                return $feed;
            }, $data['news']['sources']);
        }

        return json_encode($data);
    }
}
