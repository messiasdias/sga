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

/* edit.html.twig */
class __TwigTemplate_06b932514a6355ce473dbf00e00f80661a049d5b05a2c476e6a818e45437711c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formContent' => [$this, 'block_formContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "crud/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("crud/edit.html.twig", "edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_formContent($context, array $blocks = [])
    {
        // line 3
        echo "    <div class=\"form-group required\">
        <label for=\"nome\" class=\"control-label\">";
        // line 4
        echo gettext("Nome");
        echo "</label>
        <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "nome", []), "html", null, true);
        echo "\" maxlength=\"50\" />
    </div>
    <div class=\"form-group required\">
        <label for=\"descricao\" class=\"control-label\">";
        // line 8
        echo gettext("Descrição");
        echo "</label>
        <textarea id=\"descricao\" name=\"descricao\" class=\"form-control\" rows=\"5\" maxlength=\"100\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "descricao", []), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"form-group required\">
        <label for=\"status\" class=\"control-label\">";
        // line 12
        echo gettext("Status");
        echo "</label>
        <select id=\"status\" name=\"status\" class=\"form-control\">
            <option value=\"\">";
        // line 14
        echo gettext("Selecione");
        echo "</option>
            <option value=\"1\" ";
        // line 15
        if (($this->getAttribute(($context["model"] ?? null), "status", []) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Ativo");
        echo "</option>
            <option value=\"0\" ";
        // line 16
        if (($this->getAttribute(($context["model"] ?? null), "status", []) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Inativo");
        echo "</option>
        </select>
    </div>
    ";
        // line 19
        if (($this->getAttribute(($context["model"] ?? null), "id", []) && twig_length_filter($this->env, $this->getAttribute(($context["model"] ?? null), "subServicos", [])))) {
            // line 20
            echo "    <fieldset>
        <legend>";
            // line 21
            echo gettext("Subserviços");
            echo "</legend>
        <ul>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["model"] ?? null), "subServicos", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 24
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "nome", []), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </ul>
    </fieldset>
    ";
        } else {
            // line 29
            echo "    <div class=\"form-group\">
        <label for=\"macro\" class=\"control-label\">";
            // line 30
            echo gettext("Macro");
            echo "</label>
        <select id=\"macro\" name=\"id_macro\" class=\"form-control\">
            <option value=\"\">";
            // line 32
            echo gettext("Selecione");
            echo "</option>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["macros"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["item"], "id", []) == $this->getAttribute($this->getAttribute(($context["model"] ?? null), "mestre", []), "id", []))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </select>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 36,  136 => 34,  132 => 33,  128 => 32,  123 => 30,  120 => 29,  115 => 26,  106 => 24,  102 => 23,  97 => 21,  94 => 20,  92 => 19,  82 => 16,  74 => 15,  70 => 14,  65 => 12,  59 => 9,  55 => 8,  49 => 5,  45 => 4,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "edit.html.twig", "/home/messias/www/sga/modules/sga/servicos/views/edit.html.twig");
    }
}
