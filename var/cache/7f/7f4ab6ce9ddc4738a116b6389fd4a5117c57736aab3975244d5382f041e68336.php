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

/* print.html.twig */
class __TwigTemplate_75e89c8793ea202b72cc38592fef21362ad08e6621aeaaf344caf9394472df9b extends \Twig\Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atendimento"] ?? null), "senha", []), "html", null, true);
        echo "</title>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/print.css?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"images/favicon.png\" />
</head>
<body onload=\"window.print()\">
    <div id=\"senha\">
        <div id=\"senha-header\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "unidade", []), "nome", []), "html", null, true);
        echo "<br />
            <span class=\"data\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "d/m/Y H:i"), "html", null, true);
        echo "</span>
        </div>
        <div id=\"senha-body\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atendimento"] ?? null), "senha", []), "html", null, true);
        echo "
            <span class=\"descricao\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "senha", []), "prioridade", []), "nome", []), "html", null, true);
        echo "
            </span>
        </div>
        <div id=\"senha-footer\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["atendimento"] ?? null), "unidade", []), "mensagemImpressao", []), "html", null, true);
        echo "
        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  78 => 20,  73 => 18,  67 => 15,  63 => 14,  52 => 8,  46 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "print.html.twig", "/home/messias/www/sga/templates/print.html.twig");
    }
}
