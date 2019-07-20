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

/* 500.html.twig */
class __TwigTemplate_757918dc7f0f58b5752498564637d61df7f88c0c8a490c143dd7a9a14979cb4a extends \Twig\Template
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
    <meta charset=\"utf-8\" />
    <title>Error | Novo SGA</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/login.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/css/bootstrap.min.css\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/images/favicon.png\" />
</head>
<body>
    <div class=\"container\">
        <h1>Oops!</h1>
        
        <h2>";
        // line 14
        echo gettext("Mensagem");
        echo "</h2>
        <pre>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", []), "html", null, true);
        echo "</pre>
        
        <h2>Trace</h2>
        <pre>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "traceAsString", []), "html", null, true);
        echo "</pre>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  58 => 15,  54 => 14,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "500.html.twig", "/home/messias/www/sga/templates/error/500.html.twig");
    }
}
