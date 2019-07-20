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

/* home.html.twig */
class __TwigTemplate_4936465bd3f1e9af6598b7b067d5054d8226150c47ea156784e928b314c65f37 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("main.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<div id=\"home\">
    <div class=\"welcome\">
        <h1>";
        // line 5
        echo strtr(gettext("Bem-vindo, %usuario%"), array("%usuario%" => ($context["usuario"] ?? null), ));
        echo "</h1>
        <p>";
        // line 6
        echo gettext("O Sistema de Gerenciamento do Atendimento da Setev é baseado no Novo SGA, sistema de gerenciamento de atendimento baseado em web, de código aberto e gratuito.");
        echo "</p>
    </div>
    <div id=\"modules\">
        <div id=\"modules-search\">
            <input id=\"search-input\" type=\"text\" placeholder=\"";
        // line 10
        echo gettext("buscar");
        echo "\" onkeyup=\"SGA.Home.filter()\" class=\"form-control\" />
            <script type=\"text/javascript\"> document.getElementById('search-input').focus() </script>
        </div>
        ";
        // line 13
        if ((($context["unidade"] ?? null) && ($context["modulosUnidade"] ?? null))) {
            // line 14
            echo "        <div class=\"list unidade\">
            <h2>";
            // line 15
            echo gettext("Unidade");
            echo "</h2>
            <p>";
            // line 16
            echo gettext("Visualize abaixo os módulos disponíveis para a sua unidade");
            echo "</p>
            <ul>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modulosUnidade"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 19
                echo "                <li>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", []), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "images/icon.png", $this->getAttribute($context["modulo"], "chave", [])]), "html", null, true);
                echo "\" />
                        <span class=\"name\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", []), "html", null, true);
                echo "</span>
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        </div>
        ";
        }
        // line 29
        echo "        ";
        if (($context["modulosGlobal"] ?? null)) {
            // line 30
            echo "        <div class=\"list global\">
            <h2>";
            // line 31
            echo gettext("Global");
            echo "</h2>
            <p>";
            // line 32
            echo gettext("Visualize abaixo os módulos globais disponíveis que você possui acesso");
            echo "</p>
            <ul>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modulosGlobal"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 35
                echo "                <li>
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", []), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "images/icon.png", $this->getAttribute($context["modulo"], "chave", [])]), "html", null, true);
                echo "\" />
                        <span class=\"name\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", []), "html", null, true);
                echo "</span>
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </ul>
        </div>
        ";
        }
        // line 45
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  151 => 42,  141 => 38,  137 => 37,  131 => 36,  128 => 35,  124 => 34,  119 => 32,  115 => 31,  112 => 30,  109 => 29,  104 => 26,  94 => 22,  90 => 21,  84 => 20,  81 => 19,  77 => 18,  72 => 16,  68 => 15,  65 => 14,  63 => 13,  57 => 10,  50 => 6,  46 => 5,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/home/messias/www/sga/templates/home.html.twig");
    }
}
