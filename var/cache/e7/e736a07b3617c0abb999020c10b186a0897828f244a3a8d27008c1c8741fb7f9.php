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
class __TwigTemplate_1bf5e7e4d3c4d8cc09efdd60e2cd9f38500c14fd9a2d184c2b63132d37640342 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("module.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <script>
        var config = ";
        // line 6
        echo ($context["config"] ?? null);
        echo ";
    </script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "css/switchery.min.css", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/angular.min.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/jquery-ui-1.10.4.custom.min.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/angular-ui.sortable.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/switchery.min.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/ng-switchery.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/colpick.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "js/app.js", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\"></script>
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        // line 19
        echo "    <div ng-app=\"vetor\">
        <div class=\"module-content\" ng-controller=\"panelCtrl\">
            <div class=\"header\">
                <div class=\"pull-right\">
                    <button id=\"btn-save\" type=\"button\" ng-click=\"save()\" class=\"btn btn-primary\">
                        <span class=\"glyphicon glyphicon-save\"></span>
                        ";
        // line 25
        echo gettext("Salvar");
        // line 26
        echo "                    </button>
                </div>
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), [$this->env, "images/icon.png", $this->getAttribute(($context["module"] ?? null), "chave", [])]), "html", null, true);
        echo "\" />
                <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "nome", []), "html", null, true);
        echo "</h2>
                <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "descricao", []), "html", null, true);
        echo "</p>
            </div>
            <div role=\"tabpanel\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\">
                        <a href=\"#tab-widgets\" role=\"tab\" data-toggle=\"tab\">
                            ";
        // line 36
        echo gettext("Mídias");
        // line 37
        echo "                        </a>
                    </li>
                    <li role=\"presentation\">
                        <a href=\"#tab-news\" role=\"tab\" data-toggle=\"tab\">
                            ";
        // line 41
        echo gettext("Notícias");
        // line 42
        echo "                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab-widgets\">
                    <div class=\"col-md-2\">
                        <button type=\"button\" ng-click=\"addWidget('youtube')\" class=\"btn btn-default btn-block btn-lg\" title=\"";
        // line 49
        echo gettext("Adicionar widget");
        echo "\">
                            <span class=\"glyphicon glyphicon-film\"></span>
                            ";
        // line 51
        echo gettext("Youtube");
        // line 52
        echo "                        </button>
                        <button type=\"button\" ng-click=\"addWidget('video')\" class=\"btn btn-default btn-block btn-lg\" title=\"";
        // line 53
        echo gettext("Adicionar widget");
        echo "\">
                            <span class=\"glyphicon glyphicon-film\"></span>
                            ";
        // line 55
        echo gettext("Vídeo");
        // line 56
        echo "                        </button>
                        <button type=\"button\" ng-click=\"addWidget('image')\" class=\"btn btn-default btn-block btn-lg\" title=\"";
        // line 57
        echo gettext("Adicionar widget");
        echo "\">
                            <span class=\"glyphicon glyphicon-picture\"></span>
                            ";
        // line 59
        echo gettext("Imagem");
        // line 60
        echo "                        </button>
                        <button type=\"button\" ng-click=\"addWidget('audio')\" class=\"btn btn-default btn-block btn-lg\" title=\"";
        // line 61
        echo gettext("Adicionar widget");
        echo "\">
                            <span class=\"glyphicon glyphicon-music\"></span>
                            ";
        // line 63
        echo gettext("Áudio");
        // line 64
        echo "                        </button>
                        <button type=\"button\" ng-click=\"addWidget('html')\" class=\"btn btn-default btn-block btn-lg\" title=\"";
        // line 65
        echo gettext("Adicionar widget");
        echo "\">
                            <span class=\"glyphicon glyphicon-file\"></span>
                            ";
        // line 67
        echo gettext("HTML");
        // line 68
        echo "                        </button>
                    </div>
                    <div class=\"col-md-10\">
                        <div class=\"well\" ng-show=\"config.widgets.length==0\">
                            <p><span class=\"glyphicon glyphicon-info-sign\"></span> Nenhum widget cadastrado. Clique em adicionar widget para começar.</p>
                        </div>
                        <div id=\"widgets\" class=\"panel-group\" ui-sortable=\"sortableOptions\" ng-model=\"config.widgets\">
                            <div class=\"widget panel panel-default widget-[[ widget.active ? 'active' : 'inactive' ]]\" ng-repeat=\"widget in config.widgets\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title [[ widget.type ]]\">
                                        <span class=\"handle glyphicon glyphicon-move\"></span>
                                        <a href=\"#\" class=\"toggle\">
                                            <span class=\"glyphicon glyphicon-[[ styleClass(widget) ]]\"></span>
                                            [[ widget.title ]]
                                        </a>

                                        <span class=\"pull-right\">
                                            <input type=\"checkbox\" class=\"js-switch\" ui-switch ng-model=\"widget.active\">
                                            <a href=\"#\" title=\"";
        // line 86
        echo gettext("Excluir");
        echo "\" ng-click=\"deleteWidget(widget)\">
                                                <span class=\"glyphicon glyphicon-remove\"></span>
                                            </a>
                                        </span>
                                    </h4>
                                </div>
                                <div class=\"panel-body\" style=\"display: none;\">
                                    <div class=\"form-group\">
                                        <label for=\"titulo\">";
        // line 94
        echo gettext("Título");
        echo "</label>
                                        <input id=\"titulo\" type=\"text\" class=\"form-control\" ng-model=\"widget.title\">
                                    </div>
                                    <div class=\"form-group\" ng-hide=\"widget.type == 'youtube' || widget.type == 'video' || widget.type == 'audio'\">
                                        <label for=\"duracao\">";
        // line 98
        echo gettext("Duração");
        echo " (ms)</label>
                                        <input id=\"duracao\" type=\"text\" class=\"form-control\" ng-model=\"widget.duration\">
                                    </div>
                                    <div class=\"form-group\" ng-show=\"widget.type == 'video' || widget.type == 'audio' || widget.type == 'youtube'\">
                                        <label for=\"volume\">";
        // line 102
        echo gettext("Volume");
        echo "</label>
                                        <input id=\"volume\" type=\"number\" class=\"form-control\" ng-model=\"widget.volume\">
                                    </div>
                                    <div class=\"form-group\" ng-show=\"widget.type == 'youtube'\">
                                        <label for=\"youtube-content\">";
        // line 106
        echo gettext("ID do vídeo");
        echo "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\" id=\"basic-addon2\">http://www.youtube.com/watch?v=</span>
                                            <input id=\"youtube-content\" class=\"form-control\" ng-model=\"widget.content\" maxlength=\"20\" placeholder=\"P9-FCC6I7u0\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\" ng-show=\"widget.type == 'html'\">
                                        <label for=\"html-content\">";
        // line 113
        echo gettext("Código HTML");
        echo "</label>
                                        <textarea id=\"html-content\" class=\"form-control\" ng-model=\"widget.content\" rows=\"5\"></textarea>
                                    </div>
                                    <div class=\"form-group\" ng-show=\"widget.type == 'image'\">
                                        <label for=\"image-content\">";
        // line 117
        echo gettext("Url da imagem");
        echo "</label>
                                        <input id=\"image-content\" type=\"text\" class=\"form-control\" ng-model=\"widget.content\">
                                    </div>
                                    <div class=\"form-group\" ng-show=\"widget.type == 'video'\">
                                        <label for=\"video-content\">";
        // line 121
        echo gettext("Url do vídeo");
        echo " (mp4)</label>
                                        <input for=\"video-content\" type=\"text\" class=\"form-control\" ng-model=\"widget.content\">
                                    </div>
                                    <div class=\"form-group\" ng-show=\"widget.type == 'audio'\">
                                        <label for=\"audio-content\">";
        // line 125
        echo gettext("Url do áudio");
        echo " (mp3)</label>
                                        <input for=\"audio-content\" type=\"text\" class=\"form-control\" ng-model=\"widget.content\">
                                    </div>
                                    <div class=\"form-group\" ng-hide=\"widget.type == 'youtube'\">
                                        <label for=\"background\">";
        // line 129
        echo gettext("Cor de fundo");
        echo "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\" style=\"background-color: [[ widget.background ]]\">&nbsp;</span>
                                            <input id=\"background\" type=\"text\" class=\"form-control color-picker\" ng-model=\"widget.background\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <button type=\"button\" class=\"btn btn-default\" ng-click=\"preview(widget)\">
                                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                                            Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-news\">
                    <div class=\"form-group\">
                        <label for=\"news-interval\">";
        // line 148
        echo gettext("Intervalo entre as notícias (ms)");
        echo "</label>
                        <input id=\"news-interval\" type=\"number\" class=\"form-control\" ng-model=\"config.news.interval\">
                    </div>
                    <div>
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>";
        // line 155
        echo gettext("Feeds");
        echo "</th>
                                    <th class=\"col-sm-3\">";
        // line 156
        echo gettext("Tipo");
        echo "</th>
                                    <th class=\"col-sm-1\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat=\"feed in config.news.sources\">
                                    <td>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"URL\" ng-model=\"feed.url\">
                                    </td>
                                    <td>
                                        <select class=\"form-control\" ng-model=\"feed.type\">
                                            <option value=\"rss\">RSS</option>
                                            <option value=\"atom\">Atom</option>
                                            <option value=\"googleapi\">Google APIs (requer Internet)</option>
                                        </select>
                                    </td>
                                    <td class=\"col-sm-1\">
                                        <button type=\"button\" class=\"btn btn-default\" title=\"";
        // line 173
        echo gettext("Remover");
        echo "\" ng-click=\"deleteFeed(feed)\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <button type=\"button\" class=\"btn btn-default\" ng-click=\"addFeed()\">
                                <span class=\"glyphicon glyphicon-plus-sign\"></span>
                                ";
        // line 183
        echo gettext("Adicionar novo Feed");
        // line 184
        echo "                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"dialog-preview\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\">";
        // line 195
        echo gettext("Preview");
        echo "</h4>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"preview preview-youtube\">
                                <iframe id=\"youtube-iframe\" frameborder=\"0\" height=\"300\">
                            </div>
                            <div class=\"preview preview-video\">
                                <video id=\"video-player\" controls>
                                </video>
                            </div>
                            <div class=\"preview preview-audio\">
                                <audio id=\"audio-player\" controls>
                                </audio>
                            </div>
                            <div class=\"preview preview-image\">
                                <img id=\"image-preview\" />
                            </div>
                            <div class=\"preview preview-html\">
                                <div ng-bind-html=\"htmlPreview\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return array (  362 => 195,  349 => 184,  347 => 183,  334 => 173,  314 => 156,  310 => 155,  300 => 148,  278 => 129,  271 => 125,  264 => 121,  257 => 117,  250 => 113,  240 => 106,  233 => 102,  226 => 98,  219 => 94,  208 => 86,  188 => 68,  186 => 67,  181 => 65,  178 => 64,  176 => 63,  171 => 61,  168 => 60,  166 => 59,  161 => 57,  158 => 56,  156 => 55,  151 => 53,  148 => 52,  146 => 51,  141 => 49,  132 => 42,  130 => 41,  124 => 37,  122 => 36,  113 => 30,  109 => 29,  105 => 28,  101 => 26,  99 => 25,  91 => 19,  88 => 18,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  49 => 6,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/home/messias/www/sga/modules/vetor/panel/views/index.html.twig");
    }
}
