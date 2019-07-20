<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_b91caec2539d8a95990808d5b46ef99f81271a8e224e3bac5f57f6bfbf6c9f1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'moduleContent' => [$this, 'block_moduleContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("module.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_moduleContent($context, array $blocks = [])
    {
        // line 3
        echo "    <div id=\"dialog-local\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 8
        echo gettext("Guichê");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"local_form\" action=\"#\" method=\"post\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 15
        echo gettext("Número");
        echo "</label>
                                    <input type=\"text\" id=\"numero_local\" name=\"local\" maxlength=\"3\" class=\"form-control config-numero-local\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["local"] ?? null), "html", null, true);
        echo "\" />
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\" title=\"";
        // line 21
        echo gettext("Tipo de Atendimento");
        echo "\">";
        echo gettext("Atendimento");
        echo "</label>
                                    <select id=\"tipo_atendimento\" name=\"tipo\" class=\"form-control config-tipo-atendimento\">
                                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tiposAtendimento"] ?? null));
        foreach ($context['_seq'] as $context["v"] => $context["l"]) {
            // line 24
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\" ";
            if ((($context["tipoAtendimento"] ?? null) == $context["v"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script type=\"text/javascript\">
                        \$('#local_form').on('submit', function() {
                            var numero = parseInt(\$('#numero_local').val());
                            if (isNaN(numero) || numero <= 0) {
                                \$('#numero_local').val('');
                            } else {
                                SGA.ajax({
                                    url: '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
        echo "/set_local',
                                    type: 'post',
                                    data: \$(this).serialize(),
                                    success: function(response) {
                                        window.location.reload();
                                    }
                                });
                            }
                            return false;
                        });
                    </script>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#local_form').submit(); return false\">";
        // line 51
        echo gettext("Salvar");
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 57
        echo "    ";
        if ((($context["local"] ?? null) <= 0)) {
            // line 58
            echo "        <script type=\"text/javascript\">
            SGA.dialogs.modal('#dialog-local');
            \$('#local').focus();
        </script>
    ";
        } else {
            // line 63
            echo "        ";
            // line 64
            echo "        <div id=\"atendimento\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2\">
                    <div id=\"local\">
                        <span class=\"label-local\">";
            // line 68
            echo gettext("Guichê");
            echo "</span>
                        <span class=\"numero config-numero-local\">";
            // line 69
            echo twig_escape_filter($this->env, ($context["local"] ?? null), "html", null, true);
            echo "</span>
                        <a href=\"#dialog-local\" data-toggle=\"modal\">";
            // line 70
            echo gettext("Alterar");
            echo "</a>
                    </div>
                </div>
                <div class=\"col-sm-9 col-md-10\">
                    <div id=\"controls\">
                        <div id=\"chamar\" class=\"control\" style=\"display:none\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-md-4\">
                                    <button class=\"btn btn-default btn-block btn-control chamar\"
                                            onclick=\"SGA.Atendimento.chamar(this)\"
                                            title=\"";
            // line 80
            echo gettext("Chamar próximo");
            echo "\"
                                            disabled=\"disabled\">
                                        <span>";
            // line 82
            echo gettext("Chamar próximo");
            echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id=\"iniciar\" class=\"control\" style=\"display:none\">
                            <div class=\"senha\">
                                <h3 class=\"title\">";
            // line 89
            echo gettext("Atendimento");
            echo "</h3>
                                <ul class=\"info ";
            // line 90
            if ((($context["atendimento"] ?? null) && $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "senha", []), "isPrioridade", []))) {
                echo "prioridade";
            }
            echo "\">
                                    <li class=\"numero\">
                                        <span class=\"atend-label\">";
            // line 92
            echo gettext("Senha|Bilhete");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atendimento"] ?? null), "senha", []), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"servico\">
                                        <span class=\"atend-label\">";
            // line 96
            echo gettext("Serviço");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "servicoUnidade", []), "nome", []), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome-prioridade\">
                                        <span class=\"atend-label\">";
            // line 100
            echo gettext("Prioridade");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "senha", []), "prioridade", []), "nome", []), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome\">
                                        <span class=\"atend-label\">";
            // line 104
            echo gettext("Nome");
            echo "</span>
                                        <span class=\"atend-value\">
                                            ";
            // line 106
            if ($this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "cliente", []), "nome", [])) {
                // line 107
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "cliente", []), "nome", []), "html", null, true);
                echo "
                                            ";
            } else {
                // line 109
                echo "                                                -
                                            ";
            }
            // line 111
            echo "                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control chamar_novamente\"
                                            onclick=\"SGA.Atendimento.chamar_novamente(this)\"
                                            title=\"";
            // line 119
            echo gettext("Chamar novamente");
            echo "\">
                                        <span>";
            // line 120
            echo gettext("Chamar novamente");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control iniciar\"
                                            onclick=\"SGA.Atendimento.iniciar(this)\"
                                            title=\"";
            // line 126
            echo gettext("Iniciar atendimento");
            echo "\">
                                        <span>";
            // line 127
            echo gettext("Iniciar atendimento");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control nao_compareceu\"
                                            onclick=\"SGA.Atendimento.nao_compareceu(this)\"
                                            title=\"";
            // line 133
            echo gettext("Não compareceu");
            echo "\">
                                        <span>";
            // line 134
            echo gettext("Não compareceu");
            echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id=\"encerrar\" class=\"control\" style=\"display:none\">
                            <div class=\"senha\">
                                <h3 class=\"title\">";
            // line 141
            echo gettext("Atendimento");
            echo "</h3>
                                <ul class=\"info ";
            // line 142
            if ((($context["atendimento"] ?? null) && $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "senha", []), "isPrioridade", []))) {
                echo "prioridade";
            }
            echo "\">
                                    <li class=\"numero\">
                                        <span class=\"atend-label\">";
            // line 144
            echo gettext("Senha|Bilhete");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atendimento"] ?? null), "senha", []), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"servico\">
                                        <span class=\"atend-label\">";
            // line 148
            echo gettext("Serviço");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "servicoUnidade", []), "nome", []), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome-prioridade\">
                                        <span class=\"atend-label\">";
            // line 152
            echo gettext("Prioridade");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "senha", []), "prioridade", []), "nome", []), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome\">
                                        <span class=\"atend-label\">";
            // line 156
            echo gettext("Nome");
            echo "</span>
                                        <span class=\"atend-value\">
                                            ";
            // line 158
            if ($this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "cliente", []), "nome", [])) {
                // line 159
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "cliente", []), "nome", []), "html", null, true);
                echo "
                                            ";
            } else {
                // line 161
                echo "                                                -
                                            ";
            }
            // line 163
            echo "                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control chamar_novamente\"
                                            onclick=\"SGA.Atendimento.chamar_novamente(this)\"
                                            title=\"";
            // line 171
            echo gettext("Chamar novamente");
            echo "\">
                                        <span>";
            // line 172
            echo gettext("Chamar novamente");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control encerrar\"
                                            onclick=\"SGA.Atendimento.encerrar(this)\"
                                            title=\"";
            // line 178
            echo gettext("Encerrar atendimento");
            echo "\">
                                        <span>";
            // line 179
            echo gettext("Encerrar atendimento");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control erro_triagem\"
                                            onclick=\"SGA.Atendimento.erro_triagem(this)\"
                                            title=\"";
            // line 185
            echo gettext("Erro de triagem");
            echo "\">
                                        <span>";
            // line 186
            echo gettext("Erro de triagem");
            echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id=\"codificar\" class=\"control\" style=\"display:none\">
                            <div class=\"col-xs-6\">
                                <h3>";
            // line 193
            echo gettext("Serviços disponíveis");
            echo "</h3>
                                <ul id=\"macro-servicos\" class=\"items\">
                                    ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["servicos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 196
                echo "                                        <li id=\"servico-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
                echo "\">
                                            ";
                // line 197
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "subServicos", [])) == 0)) {
                    // line 198
                    echo "                                                <a href=\"javascript:void(0)\"
                                                   onclick=\"SGA.Atendimento.addServico(this)\"
                                                   data-id=\"";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
                    echo "\"
                                                   title=\"";
                    // line 201
                    echo gettext("Adicionar");
                    echo "\">
                                                    ";
                    // line 202
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "nome", []), "html", null, true);
                    echo "
                                                </a>
                                            ";
                } else {
                    // line 205
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "nome", []), "html", null, true);
                    echo "
                                                <ul>
                                                ";
                    // line 207
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["su"], "servico", []), "subServicos", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 208
                        echo "                                                    <li id=\"servico-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", []), "html", null, true);
                        echo "\">
                                                        <a href=\"javascript:void(0)\"
                                                           onclick=\"SGA.Atendimento.addServico(this)\"
                                                           data-id=\"";
                        // line 211
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", []), "html", null, true);
                        echo "\"
                                                           title=\"";
                        // line 212
                        echo gettext("Adicionar");
                        echo "\">
                                                            ";
                        // line 213
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "nome", []), "html", null, true);
                        echo "
                                                        </a>
                                                    </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "                                                </ul>
                                            ";
                }
                // line 219
                echo "                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                                </ul>
                            </div>
                            <div class=\"col-xs-6\">
                                <h3>";
            // line 224
            echo gettext("Serviços realizados");
            echo "</h3>
                                <ul id=\"servicos-realizados\" class=\"items\">
                                </ul>
                                <div class=\"redirecionar\">
                                    <input id=\"encerrar-redirecionar\" type=\"checkbox\" value=\"1\" />
                                    <label for=\"encerrar-redirecionar\"
                                           title=\"";
            // line 230
            echo gettext("Marque para codificar e redirecionar o atendimento atual");
            echo "\">
                                        <span>";
            // line 231
            echo gettext("Redirecionar atendimento ao encerrar");
            echo "</span>
                                    </label>
                                </div>
                                <button class=\"btn btn-default btn-block btn-control codificar\"
                                        onclick=\"SGA.Atendimento.codificar(this)\"
                                        title=\"";
            // line 236
            echo gettext("Encerrar atendimento");
            echo "\">
                                    <span>";
            // line 237
            echo gettext("Encerrar atendimento");
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"fila\">
                <h4>";
            // line 245
            echo gettext("Minha fila");
            echo " (<span class=\"tipo-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "tipoAtendimento", []), "html", null, true);
            echo " config-tipo-atendimento\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tiposAtendimento"] ?? null), ($context["tipoAtendimento"] ?? null), [], "array"), "html", null, true);
            echo "</span>):</h4>
                <ul></ul>
            </div>
        </div>
        <p class=\"links\">
            <a href=\"#dialog-busca\" class=\"btn btn-default\" data-toggle=\"modal\">
                <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
                ";
            // line 252
            echo gettext("Consultar senha");
            // line 253
            echo "            </a>
            <button id=\"notification\" type=\"button\" class=\"btn btn-warning\" onclick=\"SGA.Notification.request(this)\" style=\"display: none\">
                <span class=\"glyphicon glyphicon-exclamation-sign\"></span>&nbsp;
                ";
            // line 256
            echo gettext("Habilitar notificação");
            // line 257
            echo "            </button>
        </p>

        ";
            // line 261
            echo "        <div id=\"dialog-redirecionar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 266
            echo gettext("Redirecionar");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"redirecionar_servico\">";
            // line 270
            echo gettext("Novo Serviço");
            echo "</label>
                            <select id=\"redirecionar_servico\" class=\"form-control\">
                                <option value=\"\">";
            // line 272
            echo gettext("Selecione");
            echo "</option>
                                ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["servicosIndisponiveis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 274
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "nome", []), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary btn-redirecionar\" onclick=\"SGA.Atendimento.redirecionar(this); return false;\">
                            ";
            // line 281
            echo gettext("Redirecionar");
            // line 282
            echo "                        </button>
                        <button type=\"button\" class=\"btn btn-primary btn-codificar\" onclick=\"SGA.Atendimento.codificar(this, true); return false;\">
                            ";
            // line 284
            echo gettext("Codificar e redirecionar");
            // line 285
            echo "                        </button>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 292
            echo "        <div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 297
            echo gettext("Busca");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-inline\" role=\"form\" onsubmit=\"return false\">
                            <div class=\"form-group\">
                                <input id=\"numero_busca\" type=\"text\" maxlength=\"5\" class=\"form-search form-control\" placeholder=\"";
            // line 302
            echo gettext("Número");
            echo "\" />
                            </div>
                            <button id=\"btn-consultar\" class=\"btn btn-primary\" onclick=\"SGA.Atendimento.consultar()\">
                                ";
            // line 305
            echo gettext("Consultar");
            // line 306
            echo "                            </button>
                        </form>
                        <div class=\"result\">
                            <table id=\"result_table\" class=\"table\">
                                <thead>
                                    <tr>
                                        <th>";
            // line 312
            echo gettext("Número");
            echo "</th>
                                        <th>";
            // line 313
            echo gettext("Serviço");
            echo "</th>
                                        <th>";
            // line 314
            echo gettext("Data chegada");
            echo "</th>
                                        <th>";
            // line 315
            echo gettext("Data início");
            echo "</th>
                                        <th>";
            // line 316
            echo gettext("Data fim");
            echo "</th>
                                        <th>";
            // line 317
            echo gettext("Triagem");
            echo "</th>
                                        <th>";
            // line 318
            echo gettext("Atendente");
            echo "</th>
                                        <th>";
            // line 319
            echo gettext("Situação");
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 332
            echo "        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 337
            echo gettext("Senha|Bilhete");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"field\">
                            <h4>";
            // line 341
            echo gettext("Número");
            echo "</h4>
                            <p class=\"numero\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 345
            echo gettext("Serviço");
            echo "</h4>
                            <p class=\"servico\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 349
            echo gettext("Prioridade");
            echo "</h4>
                            <p class=\"nome-prioridade\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 353
            echo gettext("Data de chegada");
            echo "</h4>
                            <p class=\"chegada\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 357
            echo gettext("Tempo de espera");
            echo "</h4>
                            <p class=\"espera\"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"sga-clock\" title=\"";
            // line 365
            echo gettext("Data e hora no servidor");
            echo "\"></div>

        ";
            // line 368
            echo "        <audio id=\"alert\" src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "sounds/alert.wav", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
            echo "\" style=\"display:none\"></audio>

        <script type=\"text/javascript\">
            SGA.Clock.init(\"sga-clock\", ";
            // line 371
            echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
            echo ");
            SGA.Atendimento.filaVazia = '";
            // line 372
            echo gettext("Fila vazia");
            echo "';
            SGA.Atendimento.remover = '";
            // line 373
            echo gettext("Remover");
            echo "';
            SGA.Atendimento.marcarErroTriagem = '";
            // line 374
            echo gettext("Realmente deseja marcar como erro de triagem?");
            echo "';
            SGA.Atendimento.marcarNaoCompareceu = '";
            // line 375
            echo gettext("Realmente deseja marcar como não compareceu?");
            echo "';
            SGA.Atendimento.nenhumServicoSelecionado = '";
            // line 376
            echo gettext("Nenhum serviço selecionado");
            echo "';
            SGA.Atendimento.tiposAtendimento = ";
            // line 377
            echo twig_jsonencode_filter(($context["tiposAtendimento"] ?? null));
            echo ";
            SGA.Atendimento.init(";
            // line 378
            if (($context["atendimento"] ?? null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["atendimento"] ?? null), "status", []), "html", null, true);
            } else {
                echo "1";
            }
            echo ");
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 378,  780 => 377,  776 => 376,  772 => 375,  768 => 374,  764 => 373,  760 => 372,  756 => 371,  749 => 368,  744 => 365,  733 => 357,  726 => 353,  719 => 349,  712 => 345,  705 => 341,  698 => 337,  691 => 332,  676 => 319,  672 => 318,  668 => 317,  664 => 316,  660 => 315,  656 => 314,  652 => 313,  648 => 312,  640 => 306,  638 => 305,  632 => 302,  624 => 297,  617 => 292,  609 => 285,  607 => 284,  603 => 282,  601 => 281,  594 => 276,  583 => 274,  579 => 273,  575 => 272,  570 => 270,  563 => 266,  556 => 261,  551 => 257,  549 => 256,  544 => 253,  542 => 252,  528 => 245,  517 => 237,  513 => 236,  505 => 231,  501 => 230,  492 => 224,  487 => 221,  480 => 219,  476 => 217,  466 => 213,  462 => 212,  458 => 211,  451 => 208,  447 => 207,  441 => 205,  435 => 202,  431 => 201,  427 => 200,  423 => 198,  421 => 197,  416 => 196,  412 => 195,  407 => 193,  397 => 186,  393 => 185,  384 => 179,  380 => 178,  371 => 172,  367 => 171,  357 => 163,  353 => 161,  347 => 159,  345 => 158,  340 => 156,  334 => 153,  330 => 152,  324 => 149,  320 => 148,  314 => 145,  310 => 144,  303 => 142,  299 => 141,  289 => 134,  285 => 133,  276 => 127,  272 => 126,  263 => 120,  259 => 119,  249 => 111,  245 => 109,  239 => 107,  237 => 106,  232 => 104,  226 => 101,  222 => 100,  216 => 97,  212 => 96,  206 => 93,  202 => 92,  195 => 90,  191 => 89,  181 => 82,  176 => 80,  163 => 70,  159 => 69,  155 => 68,  149 => 64,  147 => 63,  140 => 58,  137 => 57,  129 => 51,  111 => 38,  97 => 26,  82 => 24,  78 => 23,  71 => 21,  63 => 16,  59 => 15,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/home/messias/www/sga/modules/sga/atendimento/views/index.html.twig");
    }
}
