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

/* crud/list.html.twig */
class __TwigTemplate_e08e868ed97c7c9ffccc7712b2a3f8489239170fe01a9747534993a0427df796 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'moduleContent' => [$this, 'block_moduleContent'],
            'thead' => [$this, 'block_thead'],
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("module.html.twig", "crud/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_moduleContent($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"search\">
    <form method=\"get\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
        echo "\" class=\"form-inline\" role=\"search\">
        <div class=\"form-group\">
            <input id=\"search-box\" 
                   type=\"search\" 
                   name=\"s\" 
                   value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "\" 
                   class=\"form-search form-control\"
                   placeholder=\"";
        // line 11
        echo gettext("buscar");
        echo "\" />
            <script type=\"text/javascript\">SGA.Form.searchBox(\"search-box\")</script>
        </div>
        <button type=\"submit\" class=\"btn btn-default\">
            <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
            ";
        // line 16
        echo gettext("Buscar");
        // line 17
        echo "        </button>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
        echo "/edit\" class=\"btn btn-primary btn-add\">
            <span class=\"glyphicon glyphicon-plus-sign\"></span>&nbsp;
            ";
        // line 20
        echo gettext("Novo");
        // line 21
        echo "        </a>
    </form>
</div>
";
        // line 24
        if ($this->getAttribute(($context["flash"] ?? null), "success", [], "array")) {
            // line 25
            echo "<div class=\"alert alert-success\">
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "success", [], "array"), "html", null, true);
            echo "
</div>
";
        }
        // line 29
        echo "
";
        // line 30
        if ($this->getAttribute(($context["flash"] ?? null), "error", [], "array")) {
            // line 31
            echo "<div class=\"alert alert-danger\">
    ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flash"] ?? null), "error", [], "array"), "html", null, true);
            echo "
</div>
";
        }
        // line 35
        echo "<table class=\"table table-responsive table-hover table-striped table-responsive\">
    <thead>
        <tr>
            <th>#</th>
            ";
        // line 39
        $this->displayBlock('thead', $context, $blocks);
        // line 41
        echo "            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "        <tr>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "</td>
            ";
            // line 48
            $this->displayBlock('tbody', $context, $blocks);
            // line 50
            echo "            <td class=\"buttons\">
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
            echo "/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-default\" title=\"";
            echo gettext("Editar");
            echo "\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                </a>
                <button class=\"btn btn-danger\" title=\"";
            // line 54
            echo gettext("Excluir");
            echo "\"
                        onclick=\"SGA.Form.confirm('";
            // line 55
            echo gettext("Realmente deseja excluir?");
            echo "', function() { \$('#delete-form').prop('action', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "chave", []), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "').submit(); })\">
                    <span class=\"glyphicon glyphicon-remove\"></span>
                </button>
            </td>
        </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </tbody>
</table>
<form id=\"delete-form\" action=\"\" method=\"post\">
</form>
";
        // line 65
        if ((($context["pages"] ?? null) > 1)) {
            // line 66
            echo "<div class=\"crud-pagination\">
    <ul class=\"pagination\">
        <li ";
            // line 68
            if ((($context["page"] ?? null) == 0)) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"?p=0\">&laquo;</a>
        </li>
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                echo "        <li ";
                if ((($context["i"] - 1) == ($context["page"] ?? null))) {
                    echo "class=\"active\"";
                }
                echo ">
            <a href=\"?p=";
                // line 73
                echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        <li ";
            if ((($context["page"] ?? null) == (($context["pages"] ?? null) - 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"?p=";
            // line 77
            echo twig_escape_filter($this->env, (($context["pages"] ?? null) - 1), "html", null, true);
            echo "\">&raquo;</a>
        </li>
    </ul>
</div>
";
        }
    }

    // line 39
    public function block_thead($context, array $blocks = [])
    {
        // line 40
        echo "            ";
    }

    // line 48
    public function block_tbody($context, array $blocks = [])
    {
        // line 49
        echo "            ";
    }

    public function getTemplateName()
    {
        return "crud/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 49,  263 => 48,  259 => 40,  256 => 39,  246 => 77,  239 => 76,  228 => 73,  221 => 72,  217 => 71,  209 => 68,  205 => 66,  203 => 65,  197 => 61,  171 => 55,  167 => 54,  157 => 51,  154 => 50,  152 => 48,  148 => 47,  145 => 46,  128 => 45,  122 => 41,  120 => 39,  114 => 35,  108 => 32,  105 => 31,  103 => 30,  100 => 29,  94 => 26,  91 => 25,  89 => 24,  84 => 21,  82 => 20,  75 => 18,  72 => 17,  70 => 16,  62 => 11,  57 => 9,  47 => 4,  44 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "crud/list.html.twig", "/home/messias/www/sga/templates/crud/list.html.twig");
    }
}
