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

/* nav.html */
class __TwigTemplate_6017afce45bd8ed9b26c10bc9c93c18fa8547872447629c1f3857f53deb315e2 extends \Twig\Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"home.html\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/?a=about\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/?m=post&a=list\">Post</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/?a=contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "nav.html", "D:\\xampp\\htdocs\\blog\\app\\frontend\\views\\nav.html");
    }
}
