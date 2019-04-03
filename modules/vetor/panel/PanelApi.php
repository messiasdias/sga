<?php

namespace modules\vetor\panel;

/**
 * Vetor Panel api.
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
class PanelApi
{
    public function api()
    {
        $db = \Novosga\Config\DatabaseConfig::getInstance();
        $em = $db->createEntityManager();
        $config = \Novosga\Model\Configuracao::get($em, PanelController::CONFIG_KEY);
        if ($config) {
            echo $config->getValor();
        } else {
            echo '[]';
        }
    }
}
