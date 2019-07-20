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

/* main.html.twig */
class __TwigTemplate_85e0aa04995d004346f82c431061f0dc5b9a561df153e935317dece9ebb1a1c0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks.html.twig", "main.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks.html.twig".'" cannot be used as a trait.', 1, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'content' => [$this, 'block_content'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 7
        if (($context["module"] ?? null)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "nome", []), "html", null, true);
            echo " | ";
        }
        echo "Setev - SGA</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/images/setev32\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/bootstrap-theme.min.css?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" />
        <!--[if lt IE 9]>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/js/html5shiv.js\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/js/respond.min.js\"></script>
        <![endif]-->
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/js/jquery.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/js/bootstrap.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/js/script.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"> 
            SGA.baseUrl = '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "'; 
            SGA.version = '";
        // line 23
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "';
            SGA.dialogs.error.title = '";
        // line 24
        echo gettext("Erro");
        echo "';
            SGA.dateFormat = '";
        // line 25
        echo gettext("d/m/Y");
        echo "';
            SGA.invalidSession = '";
        // line 26
        echo gettext("Sessão Inválida. Possivelmente o seu usuário está sendo utilizado em outra máquina.");
        echo "';
            SGA.inactiveSession = '";
        // line 27
        echo gettext("Sessão expirada. Favor efetuar o login novamente.");
        echo "';
        </script>
        ";
        // line 29
        $this->displayBlock("head", $context, $blocks);
        echo "
    </head>
    <body>
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".novosga-navbar\">
                        <span class=\"sr-only\">Menu</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "\">Novo SGA</a>
                </div>
                <div class=\"collapse navbar-collapse novosga-navbar\">
                    ";
        // line 44
        if (($context["unidade"] ?? null)) {
            // line 45
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 47
            echo twig_escape_filter($this->env, ($context["unidade"] ?? null), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modulosUnidade"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 50
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", []), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                <li>
                                    <a href=\"#dialog-unidade\" data-toggle=\"modal\">
                                        ";
            // line 54
            echo gettext("Trocar unidade");
            // line 55
            echo "                                        &nbsp;<span class=\"glyphicon glyphicon-transfer\"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    ";
        } else {
            // line 62
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#dialog-unidade\" class=\"dropdown-toggle\" data-toggle=\"modal\">";
            // line 64
            echo gettext("Escolher unidade");
            echo "</a>
                        </li>
                    </ul>
                    ";
        }
        // line 68
        echo "                    ";
        if (twig_length_filter($this->env, ($context["modulosGlobal"] ?? null))) {
            // line 69
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 71
            echo gettext("Global");
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modulosGlobal"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 74
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", []), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </ul>
                        </li>
                    </ul>
                    ";
        }
        // line 80
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "nome", []), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/profile\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo gettext("Perfil");
        echo "</a></li>
                                <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/logout\"><span class=\"glyphicon glyphicon-off\"></span> ";
        echo gettext("Sair");
        echo "</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "        </div>
        <div id=\"footer\">
            <p>Suporte / Contato: <br />
               (0xx 81) 3525-6779 <br />
               suportesga@setev.com.br <br />
               contato@setev.com.br <br /></p>
        </div>
        <div id=\"dialog-unidade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
        // line 107
        echo gettext("Unidade");
        echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div>
                            <label>";
        // line 111
        echo gettext("Favor escolher a unidade");
        echo "</label>
                            <select id=\"unidade\" class=\"form-control\">
                                <option value=\"\">";
        // line 113
        echo gettext("Selecione");
        echo "</option>
                                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 115
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["item"], "id", []) == $this->getAttribute(($context["unidade"] ?? null), "id", []))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", []), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Unidades.set()\">";
        // line 121
        echo gettext("Enviar");
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 126
        if (( !($context["unidade"] ?? null) &&  !($context["modulo"] ?? null))) {
            // line 127
            echo "        <script type=\"text/javascript\"> SGA.Unidades.show(); </script>
        ";
        }
        // line 129
        echo "        <span id=\"ajax-loading\" class=\"mini-loading\" style=\"display:none\"></span>
    </body>
</html>";
    }

    // line 93
    public function block_content($context, array $blocks = [])
    {
        // line 94
        echo "            ";
    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 94,  353 => 93,  347 => 129,  343 => 127,  341 => 126,  333 => 121,  327 => 117,  312 => 115,  308 => 114,  304 => 113,  299 => 111,  292 => 107,  278 => 95,  276 => 93,  263 => 85,  257 => 84,  252 => 82,  248 => 80,  242 => 76,  229 => 74,  225 => 73,  220 => 71,  216 => 69,  213 => 68,  206 => 64,  202 => 62,  193 => 55,  191 => 54,  187 => 52,  174 => 50,  170 => 49,  165 => 47,  161 => 45,  159 => 44,  153 => 41,  138 => 29,  133 => 27,  129 => 26,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  106 => 20,  100 => 19,  94 => 18,  89 => 16,  85 => 15,  78 => 13,  72 => 12,  66 => 11,  62 => 10,  53 => 7,  47 => 4,  43 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "main.html.twig", "/home/messias/www/sga/templates/main.html.twig");
    }
}
