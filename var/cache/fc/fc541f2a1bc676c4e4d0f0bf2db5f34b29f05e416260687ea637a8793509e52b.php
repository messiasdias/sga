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
class __TwigTemplate_7cf5abddb610e3001865a66a7c33bac5d6c414920f85511f22cc494a399163ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'thead' => [$this, 'block_thead'],
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "crud/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("crud/list.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_thead($context, array $blocks = [])
    {
        // line 3
        echo "    <th>";
        echo gettext("Nome");
        echo "</th>
    <th>";
        // line 4
        echo gettext("Macro");
        echo "</th>
    <th>";
        // line 5
        echo gettext("Status");
        echo "</th>
";
    }

    // line 7
    public function block_tbody($context, array $blocks = [])
    {
        // line 8
        echo "    <td>
        ";
        // line 9
        if ( !$this->getAttribute(($context["item"] ?? null), "mestre", [])) {
            // line 10
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "nome", []), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "nome", []), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </td>
    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "mestre", []), "nome", []), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 17
        if (($this->getAttribute(($context["item"] ?? null), "status", []) == 1)) {
            // line 18
            echo "        <span class=\"status-active\">";
            echo gettext("Ativo");
            echo "</span>
        ";
        } else {
            // line 20
            echo "        <span class=\"status-inactive\">";
            echo gettext("Inativo");
            echo "</span>
        ";
        }
        // line 22
        echo "    </td>
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
        return array (  100 => 22,  94 => 20,  88 => 18,  86 => 17,  81 => 15,  78 => 14,  72 => 12,  66 => 10,  64 => 9,  61 => 8,  58 => 7,  52 => 5,  48 => 4,  43 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/home/messias/www/sga/modules/sga/servicos/views/index.html.twig");
    }
}
