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

/* crud/edit.html.twig */
class __TwigTemplate_511cd3494b9d43c9d7267e3354a73ce4fa73dd1896d94d82750916997439cc33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'moduleContent' => [$this, 'block_moduleContent'],
            'formContent' => [$this, 'block_formContent'],
            'dialogs' => [$this, 'block_dialogs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("module.html.twig", "crud/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_moduleContent($context, array $blocks = [])
    {
        // line 3
        echo "    <form id=\"crud-form\" method=\"post\" action=\"#\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "id", []), "html", null, true);
        echo "\" />
        
        ";
        // line 6
        if ($this->getAttribute(($context["flash"] ?? null), "success", [], "array")) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "success", [], "array"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 11
        echo "        
        ";
        // line 12
        if ($this->getAttribute(($context["flash"] ?? null), "error", [], "array")) {
            // line 13
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "error", [], "array"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 17
        echo "        
        ";
        // line 18
        $this->displayBlock('formContent', $context, $blocks);
        // line 20
        echo "        <div class=\"buttons\">
            <span class=\"btns\">
                <button type=\"submit\"
                        class=\"btn btn-primary\">
                    <span class=\"glyphicon glyphicon-save\"></span>&nbsp;
                    ";
        // line 25
        echo gettext("Salvar");
        // line 26
        echo "                </button>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
        echo "\"
                        class=\"btn btn-default\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>&nbsp;
                    ";
        // line 30
        echo gettext("Voltar");
        // line 31
        echo "                </a>
            </span>
            <p class=\"required-desc\">";
        // line 33
        echo gettext("Campos obrigatórios");
        echo "</p>
            ";
        // line 34
        if (($this->getAttribute(($context["model"] ?? null), "id", []) > 0)) {
            // line 35
            echo "            <button id=\"btn-delete\"
                    class=\"btn btn-danger\"
                    onclick=\"SGA.Form.confirm('";
            // line 37
            echo gettext("Realmente deseja excluir?");
            echo "', function() { \$('#form-delete').submit() }); return false;\">
                <span class=\"glyphicon glyphicon-remove\"></span>&nbsp;
                ";
            // line 39
            echo gettext("Excluir");
            // line 40
            echo "            </button>
            ";
        }
        // line 42
        echo "        </div>
    </form>
    ";
        // line 44
        if (($this->getAttribute(($context["model"] ?? null), "id", []) > 0)) {
            // line 45
            echo "    <form id=\"form-delete\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "id", []), "html", null, true);
            echo "\" method=\"post\">
    </form>
    ";
        }
        // line 48
        echo "    ";
        $this->displayBlock('dialogs', $context, $blocks);
        // line 50
        echo "    <script type=\"text/javascript\">
        SGA.Form.labels.required = '";
        // line 51
        echo gettext("Campo obrigatório");
        echo "';
        SGA.Form.validate('crud-form');
    </script>
    
";
    }

    // line 18
    public function block_formContent($context, array $blocks = [])
    {
        // line 19
        echo "        ";
    }

    // line 48
    public function block_dialogs($context, array $blocks = [])
    {
        // line 49
        echo "    ";
    }

    public function getTemplateName()
    {
        return "crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 49,  168 => 48,  164 => 19,  161 => 18,  152 => 51,  149 => 50,  146 => 48,  135 => 45,  133 => 44,  129 => 42,  125 => 40,  123 => 39,  118 => 37,  114 => 35,  112 => 34,  108 => 33,  104 => 31,  102 => 30,  94 => 27,  91 => 26,  89 => 25,  82 => 20,  80 => 18,  77 => 17,  71 => 14,  68 => 13,  66 => 12,  63 => 11,  57 => 8,  54 => 7,  52 => 6,  47 => 4,  44 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "crud/edit.html.twig", "/home/messias/www/sga/templates/crud/edit.html.twig");
    }
}
