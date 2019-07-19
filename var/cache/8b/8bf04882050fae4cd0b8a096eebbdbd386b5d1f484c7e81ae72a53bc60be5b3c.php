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

/* login.html.twig */
class __TwigTemplate_446e3879bf4033aa9a1962b813d9dd316e4e8203d3ccb3fde6f5fde672c13a6b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\" />
        <title>Login | SGA</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/images/setev32.ico\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/login.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <!--[if lt IE 9]>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/js/html5shiv.js\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"container\">
            <form id=\"login-form\" action=\"login\" method=\"post\" class=\"form-signin\">
                <h2 id=\"logo\" class=\"form-signin-heading\">Novo SGA</h2>
                ";
        // line 18
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", [], "array")) {
            // line 19
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", [], "array"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 23
        echo "                <div id=\"login\">
                    <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"";
        // line 24
        echo gettext("Nome Usuário");
        echo "\" autofocus>
                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
        // line 25
        echo gettext("Senha");
        echo "\">
                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 26
        echo gettext("Entrar");
        echo "</button>
                </div>
            </form>
        </div>
        <div id=\"footer\">
            <p>Suporte / Contato: <br />
               (0xx 81) 3525-6779 <br />
               suportesga@setev.com.br <br />
               contato@setev.com.br <br /></p>
        </div>
        <script type=\"text/javascript\" src=\"js/jquery.js\"></script>
        <script type=\"text/javascript\" src=\"js/script.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#login').focus();
            });
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  89 => 25,  85 => 24,  82 => 23,  76 => 20,  73 => 19,  71 => 18,  61 => 11,  57 => 10,  50 => 8,  44 => 7,  40 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "/var/www/html/novosga/templates/login.html.twig");
    }
}
