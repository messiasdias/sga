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
class __TwigTemplate_1bc964c7a7860508f27fa4483144f4271e1b40fe75d87d98fbd594631ce127b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
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

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "css/bootstrap-switch.min.css", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/bootstrap-switch.min.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_moduleContent($context, array $blocks = [])
    {
        // line 10
        echo "<div>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-servicos\" data-toggle=\"tab\">";
        // line 12
        echo gettext("Serviços");
        echo "</a></li>
        <li><a href=\"#tab-triagem\" data-toggle=\"tab\">";
        // line 13
        echo gettext("Triagem");
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-servicos\" class=\"tab-pane active\">
            <div class=\"well well-sm\">
                ";
        // line 18
        echo gettext("As modificações na sigla do serviço são salvas automaticamente ao sair do campo.");
        // line 19
        echo "            </div>
            <table class=\"table\" id=\"servicos\">
                <thead>
                    <tr>
                        <th>";
        // line 23
        echo gettext("Sigla");
        echo "</th>
                        <th>";
        // line 24
        echo gettext("Serviço");
        echo "</th>
                        <th class=\"col-md-2\">";
        // line 25
        echo gettext("Local");
        echo "</th>
                        <th class=\"col-md-1\">";
        // line 26
        echo gettext("Peso");
        echo "</th>
                        <th class=\"col-md-1\">";
        // line 27
        echo gettext("Status");
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 32
            echo "                    <tr>
                        <td class=\"sigla\">
                            <input id=\"sigla-";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo "\"
                                   type=\"text\"
                                   class=\"servico-";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo " center form-control\"
                                   value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["su"], "sigla", []), "html", null, true);
            echo "\"
                                   data-id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo "\"
                                   onclick=\"this.select()\"
                                   onkeyup=\"this.value = this.value.toUpperCase()\"
                                   onblur=\"SGA.Unidade.Servicos.change(";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo ")\"
                                   size=\"1\"
                                   maxlength=\"1\"
                                   ";
            // line 44
            if (($this->getAttribute($context["su"], "status", []) != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo " />
                        </td>
                        <td class=\"nome\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "nome", []), "html", null, true);
            echo "
                        </td>
                        <td class=\"local\">
                            <select id=\"local-";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo "\"
                                    class=\"servico-";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo " form-control\"
                                    onchange=\"SGA.Unidade.Servicos.change(";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo ")\"
                                    ";
            // line 53
            if (($this->getAttribute($context["su"], "status", []) != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locais"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 55
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", []), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($context["su"], "local", []), "id", []) == $this->getAttribute($context["local"], "id", []))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "nome", []), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </select>
                        </td>
                        <td>
                            <input
                                type=\"number\"
                                id=\"peso-";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo "\"
                                class=\"servico-";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo " form-control\"
                                value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["su"], "peso", []), "html", null, true);
            echo "\"
                                onblur=\"SGA.Unidade.Servicos.change(";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo ")\"
                                ";
            // line 66
            if (($this->getAttribute($context["su"], "status", []) != 1)) {
                echo "disabled=\"disabled\"";
            }
            // line 67
            echo "                                >
                        </td>
                        <td>
                            <input
                                id=\"btn-enable-";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo "\"
                                type=\"checkbox\"
                                data-on-color=\"success\"
                                data-off-color=\"default\"
                                data-on-text=\"On\"
                                data-off-text=\"Off\"
                                data-id=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", []), "id", []), "html", null, true);
            echo "\"
                                ";
            // line 78
            if (($this->getAttribute($context["su"], "status", []) == 1)) {
                echo "checked";
            }
            echo ">
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </tbody>
            </table>
        </div>
        <div id=\"tab-triagem\" class=\"tab-pane\">
            <form id=\"form-triagem\" role=\"form\" onsubmit=\"return false\">
                <fieldset>
                    <legend>";
        // line 88
        echo gettext("Impressão");
        echo "</legend>
                    <div class=\"checkbox\">
                        <label for=\"impressao\">
                            <input id=\"impressao\" name=\"impressao\" type=\"checkbox\" value=\"1\" ";
        // line 91
        if ($this->getAttribute(($context["unidade"] ?? null), "statusImpressao", [])) {
            echo "checked=\"checked\"";
        }
        // line 92
        echo "                                   onclick=\"setTimeout(SGA.Unidade.Triagem.salvar, 100)\" />
                            ";
        // line 93
        echo gettext("Ativar impressão de senha");
        // line 94
        echo "                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"mensagem\" class=\"form-label\">";
        // line 97
        echo gettext("Mensagem");
        echo "</label>
                        <input type=\"text\" id=\"mensagem\" name=\"mensagem\" class=\"form-control\" maxlength=\"100\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unidade"] ?? null), "mensagemImpressao", []), "html", null, true);
        echo "\"
                               onchange=\"SGA.Unidade.Triagem.salvar()\" />
                    </div>
                    <div class=\"form-group\">
                        <label>";
        // line 102
        echo gettext("Reiniciar senhas");
        echo "</label>
                        <button class=\"btn btn-danger\" onclick=\"return SGA.Unidade.Triagem.reiniciarSenhas('";
        // line 103
        echo gettext("Deseja realmente reiniciar as senhas?");
        echo "')\">
                            ";
        // line 104
        echo gettext("Reiniciar");
        // line 105
        echo "                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
        // line 114
        echo "<div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 119
        echo gettext("Configuração");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 122
        echo gettext("Senhas reiniciadas com sucesso");
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 125
        echo gettext("Fechar");
        echo "</button>
            </div>
        </div>
    </div>
</div>

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
        return array (  328 => 125,  322 => 122,  316 => 119,  309 => 114,  299 => 105,  297 => 104,  293 => 103,  289 => 102,  282 => 98,  278 => 97,  273 => 94,  271 => 93,  268 => 92,  264 => 91,  258 => 88,  250 => 82,  238 => 78,  234 => 77,  225 => 71,  219 => 67,  215 => 66,  211 => 65,  207 => 64,  203 => 63,  199 => 62,  192 => 57,  177 => 55,  173 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  149 => 47,  141 => 44,  135 => 41,  129 => 38,  125 => 37,  121 => 36,  116 => 34,  112 => 32,  108 => 31,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  79 => 19,  77 => 18,  69 => 13,  65 => 12,  61 => 10,  58 => 9,  52 => 6,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/home/messias/www/sga/modules/sga/unidade/views/index.html.twig");
    }
}
