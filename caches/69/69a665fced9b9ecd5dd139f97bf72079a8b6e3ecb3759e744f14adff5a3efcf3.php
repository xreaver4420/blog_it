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

/* page_header.html */
class __TwigTemplate_9611e7bee4d1a4160296c8a75b80da1a2bbfc268bbfa251a7f9942561da04c57 extends \Twig\Template
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
        echo "<!-- Page Header -->
<header class=\"masthead\" style=\"background-image: url(' ";
        // line 2
        echo twig_escape_filter($this->env, ($context["bg_image"] ?? null), "html", null, true);
        echo "')\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"page-heading\">
                    <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, ($context["site_heading"] ?? null)), "html", null, true);
        echo "</h1>
                    <span class=\"subheading\"> ";
        // line 9
        echo twig_escape_filter($this->env, ($context["sub"] ?? null), "html", null, true);
        echo " </span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "page_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  42 => 8,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "page_header.html", "D:\\xampp\\htdocs\\blog\\app\\frontend\\views\\page_header.html");
    }
}
