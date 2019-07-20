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
class __TwigTemplate_571cef9ec2d25826425235fee2049b15d76b9984478c3ec69a49243669192d3f extends \Twig\Template
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
        echo "
<div id=\"infobar\" class=\"row\">
    <div class=\"col-md-10 col-xs-9\">
        <form role=\"form\" onsubmit=\"return false\">
            <div class=\"col-xs-6\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                    </span>
                    <label for=\"cli_nome\" class=\"sr-only\">";
        // line 12
        echo gettext("Nome");
        echo "</label>
                    <input type=\"text\" id=\"cli_nome\" class=\"form-control\" maxlength=\"100\" placeholder=\"";
        // line 13
        echo gettext("Nome");
        echo "\" />
                </div>
            </div>
            <div class=\"col-xs-6\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                    </span>
                    <label for=\"cli_doc\" class=\"sr-only\">";
        // line 21
        echo gettext("Documento");
        echo "</label>
                    <input type=\"text\" id=\"cli_doc\" class=\"form-control\" maxlength=\"11\" placeholder=\"";
        // line 22
        echo gettext("Documento");
        echo "\" />
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-2 col-xs-3\">
        <div class=\"ultima-senha\" title=\"";
        // line 28
        echo gettext("Última senha");
        echo "\">
            <span class=\"label label-default\"></span>
        </div>
    </div>
</div>

<div id=\"triagem-servicos\" class=\"row\">
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["servicoUnidade"]) {
            // line 36
            echo "    <div id=\"triagem-servico-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo "\" class=\"triagem-servico col-md-6\">
        <div>
            <span class=\"text\">
                <a href=\"javascript:void(0)\"
                   title=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicoUnidade"], "sigla", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "nome", []), "html", null, true);
            echo "\"
                   onclick=\"SGA.Triagem.servicoInfo(";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "nome", []), "html", null, true);
            echo "')\">
                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicoUnidade"], "sigla", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "nome", []), "html", null, true);
            echo "
                </a>
                <span class=\"servico\">
                    <span class=\"fila\">
                        <span class=\"badge\">
                            <abbr id=\"total-aguardando-";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo "\" class=\"total\" title=\"";
            echo gettext("Aguardando atendimento");
            echo "\">-</abbr>
                            &nbsp;/&nbsp;
                            <abbr id=\"total-senhas-";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo "\" class=\"total\" title=\"";
            echo gettext("Total de senhas do serviço");
            echo "\">-</abbr>
                        </span>
                    </span>
                </span>
            </span>
            <span class=\"buttons\">
                <button class=\"btn btn-primary\"
                        data-id=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo "\"
                        title=\"";
            // line 57
            echo gettext("Distribuir senha normal");
            echo "\"
                        onclick=\"SGA.Triagem.senhaNormal(this)\">
                    ";
            // line 59
            echo gettext("Normal");
            // line 60
            echo "                </button>
                ";
            // line 61
            if (twig_length_filter($this->env, ($context["prioridades"] ?? null))) {
                // line 62
                echo "                    <button class=\"btn btn-danger\"
                            data-id=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
                echo "\"
                            title=\"";
                // line 64
                echo gettext("Distribuir senha com prioridade");
                echo "\"
                            onclick=\"SGA.Triagem.prioridade(this)\">
                        ";
                // line 66
                echo gettext("Prioridade");
                // line 67
                echo "                    </button>
                ";
            }
            // line 69
            echo "            </span>
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "        <p>";
            echo gettext("Nenhum serviço habilitado para a unidade atual");
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicoUnidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
<p class=\"links\">
    <a href=\"#dialog-busca\" class=\"btn btn-default\" data-toggle=\"modal\">
        <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
        ";
        // line 79
        echo gettext("Consultar senha");
        // line 80
        echo "    </a>
    <a href=\"#dialog-triagem-config\" class=\"btn btn-default\" data-toggle=\"modal\">
        <span class=\"glyphicon glyphicon-cog\"></span>&nbsp;
        ";
        // line 83
        echo gettext("Configuração");
        // line 84
        echo "    </a>
</p>

";
        // line 88
        echo "<iframe id=\"frame-impressao\" width=\"300\" height=\"150\" style=\"display:none\"></iframe>

";
        // line 91
        echo "<div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 96
        echo gettext("Senha|Bilhete");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"field\">
                    <h4>";
        // line 100
        echo gettext("Número");
        echo "</h4>
                    <p class=\"numero\"></p>
                </div>
                <div class=\"field\">
                    <h4>";
        // line 104
        echo gettext("Serviço");
        echo "</h4>
                    <p class=\"servico\"></p>
                </div>
                <div class=\"field\">
                    <h4>";
        // line 108
        echo gettext("Prioridade");
        echo "</h4>
                    <p class=\"nome-prioridade\"></p>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 117
        echo "<div id=\"dialog-triagem-config\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 122
        echo gettext("Configuração");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <h4>";
        // line 125
        echo gettext("Exibir serviços");
        echo "</h4>
                <div class=\"row exibir-servicos\">
                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["servicoUnidade"]) {
            // line 128
            echo "                        <div class=\"col-sm-6\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" class=\"servico-";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "id", []), "html", null, true);
            echo "\" checked> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicoUnidade"], "sigla", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", []), "nome", []), "html", null, true);
            echo "
                                </label>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicoUnidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 143
        echo "<div id=\"dialog-servico\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 148
        echo gettext("Serviço");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div>
                    <h4>";
        // line 152
        echo gettext("Última senha");
        echo "</h4>
                    <p class=\"ultima-senha\">
                        <span></span>
                        <a href=\"#\" class=\"glyphicon glyphicon-print\" title=\"";
        // line 155
        echo gettext("Reimprimir");
        echo "\"></a>
                    </p>
                </div>
                <div>
                    <h4>";
        // line 159
        echo gettext("Nome original do serviço");
        echo "</h4>
                    <p class=\"nome\"></p>
                </div>
                <div>
                    <h4>";
        // line 163
        echo gettext("Descrição");
        echo "</h4>
                    <p class=\"descricao\"></p>
                </div>
                <div>
                    <h4>";
        // line 167
        echo gettext("Subserviços");
        echo "</h4>
                    <ul class=\"subservicos notempty\"></ul>
                    <ul class=\"subservicos empty\"><li>";
        // line 169
        echo gettext("Não há subserviços");
        echo "</li></ul>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 177
        echo "<div id=\"dialog-prioridade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 182
        echo gettext("Prioridade");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <ul>
                    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prioridades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prioridade"]) {
            // line 187
            echo "                    <li>
                        <input id=\"prioridade-";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", []), "html", null, true);
            echo "\" type=\"radio\" name=\"prioridade\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", []), "html", null, true);
            echo "\" />
                        <label for=\"prioridade-";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "nome", []), "html", null, true);
            echo "</label>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prioridade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                </ul>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\"
                        onclick=\"SGA.Triagem.senhaPrioridade(this, function() { \$('#dialog-prioridade').modal('hide'); });\">
                    ";
        // line 197
        echo gettext("Gerar prioridade");
        // line 198
        echo "                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 205
        echo "<div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 210
        echo gettext("Busca");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <form class=\"form-inline\" role=\"form\" onsubmit=\"return false\">
                    <div class=\"form-group\">
                        <input id=\"numero_busca\" type=\"text\" maxlength=\"5\" class=\"form-search form-control\" placeholder=\"";
        // line 215
        echo gettext("Número");
        echo "\" />
                    </div>
                    <button id=\"btn-consultar\" class=\"btn btn-primary\" onclick=\"SGA.Triagem.consultar()\">";
        // line 217
        echo gettext("Consultar");
        echo "</button>
                </form>
                <div class=\"result\">
                    <table id=\"result_table\" class=\"table\">
                        <thead>
                            <tr>
                                <th>";
        // line 223
        echo gettext("Número");
        echo "</th>
                                <th>";
        // line 224
        echo gettext("Serviço");
        echo "</th>
                                <th>";
        // line 225
        echo gettext("Data chegada");
        echo "</th>
                                <th>";
        // line 226
        echo gettext("Data início");
        echo "</th>
                                <th>";
        // line 227
        echo gettext("Data fim");
        echo "</th>
                                <th>";
        // line 228
        echo gettext("Triagem");
        echo "</th>
                                <th>";
        // line 229
        echo gettext("Atendente");
        echo "</th>
                                <th>";
        // line 230
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

<script type=\"text/javascript\">
    \$('.triagem-servico').each(function(i,v) {
        var servico = \$(v);
        SGA.Triagem.ids.push(servico.data('id'));
    });
    SGA.Triagem.ajaxUpdate();
    SGA.Triagem.prioridades = [";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prioridades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
    SGA.Triagem.imprimir = ";
        // line 249
        if ($this->getAttribute(($context["unidade"] ?? null), "statusImpressao", [])) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
    SGA.Triagem.init();
</script>
";
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
        return array (  514 => 249,  502 => 248,  481 => 230,  477 => 229,  473 => 228,  469 => 227,  465 => 226,  461 => 225,  457 => 224,  453 => 223,  444 => 217,  439 => 215,  431 => 210,  424 => 205,  416 => 198,  414 => 197,  407 => 192,  396 => 189,  390 => 188,  387 => 187,  383 => 186,  376 => 182,  369 => 177,  359 => 169,  354 => 167,  347 => 163,  340 => 159,  333 => 155,  327 => 152,  320 => 148,  313 => 143,  305 => 136,  288 => 131,  283 => 128,  279 => 127,  274 => 125,  268 => 122,  261 => 117,  250 => 108,  243 => 104,  236 => 100,  229 => 96,  222 => 91,  218 => 88,  213 => 84,  211 => 83,  206 => 80,  204 => 79,  198 => 75,  189 => 73,  181 => 69,  177 => 67,  175 => 66,  170 => 64,  166 => 63,  163 => 62,  161 => 61,  158 => 60,  156 => 59,  151 => 57,  147 => 56,  135 => 49,  128 => 47,  118 => 42,  112 => 41,  106 => 40,  96 => 36,  91 => 35,  81 => 28,  72 => 22,  68 => 21,  57 => 13,  53 => 12,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/home/messias/www/sga/modules/sga/triagem/views/index.html.twig");
    }
}
