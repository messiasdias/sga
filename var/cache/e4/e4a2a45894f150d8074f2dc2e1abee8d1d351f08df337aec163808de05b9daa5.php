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

/* blocks.html.twig */
class __TwigTemplate_1a8105a9102202c9a63d34635722de802b5c945aecbab9930c4da70e84f95fff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'module_page_header' => [$this, 'block_module_page_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('module_page_header', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
    }

    // line 5
    public function block_module_page_header($context, array $blocks = [])
    {
        // line 6
        echo "    <div class=\"header\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "images/icon.png", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\" />
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "nome", []), "html", null, true);
        echo "</h2>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "descricao", []), "html", null, true);
        echo "</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  59 => 8,  55 => 7,  52 => 6,  49 => 5,  44 => 2,  40 => 5,  37 => 4,  35 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "blocks.html.twig", "/home/messias/www/sga/templates/blocks.html.twig");
    }
}
