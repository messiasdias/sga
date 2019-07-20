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

/* module.html.twig */
class __TwigTemplate_a5390e7c50b27992dcdd6892e3a5bc61834fe877b6419b640541783a556df686 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'moduleContent' => [$this, 'block_moduleContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("main.html.twig", "module.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    
    ";
        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "css/style.css", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/script.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"> SGA.module = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
        echo "\";</script>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    
    <div class=\"module-content\">
        ";
        // line 16
        $this->displayBlock("module_page_header", $context, $blocks);
        echo "
        
        ";
        // line 18
        $this->displayBlock('moduleContent', $context, $blocks);
        // line 20
        echo "    </div>
";
    }

    // line 18
    public function block_moduleContent($context, array $blocks = [])
    {
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  87 => 18,  82 => 20,  80 => 18,  75 => 16,  68 => 13,  65 => 12,  59 => 9,  55 => 8,  50 => 7,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "module.html.twig", "/home/messias/www/sga/templates/module.html.twig");
    }
}
