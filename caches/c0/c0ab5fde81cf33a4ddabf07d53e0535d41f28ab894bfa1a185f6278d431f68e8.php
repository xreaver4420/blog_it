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

/* home.html */
class __TwigTemplate_002f9579f24bad49129ec0a013506cd12ebab353c376a95473ec3067be84ce39 extends \Twig\Template
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
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout.html", "home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <!-- Main Content -->

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "                <div class=\"post-preview\">
                    <a href=\"/?m=post&a=view&id=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "post_id", []), "html", null, true);
            echo "\">
                        <h2 class=\"post-title\">
                           ";
            // line 13
            echo red_filter($this->getAttribute($context["i"], "title", []));
            echo "
                        </h2>
                        <h3 class=\"post-subtitle\">

                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted on ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "created_at", [])), "html", null, true);
            echo "</p>
                </div>
                <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <!-- Pager -->
                <div class=\"clearfix\">
                    <a class=\"btn btn-primary float-right\" href=\"/?m=post&a=list\">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  70 => 19,  61 => 13,  56 => 11,  53 => 10,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "home.html", "D:\\xampp\\htdocs\\blog\\app\\frontend\\views\\home.html");
    }
}
