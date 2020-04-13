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

/* footer.html */
class __TwigTemplate_348d8ae37cd950b52b7ba512fae7c6f8a9e0c6aa5830e47b9bfa6aaac301ec2d extends \Twig\Template
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
        echo "<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Your Website 2019</p>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "footer.html";
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
        return new Source("", "footer.html", "D:\\xampp\\htdocs\\blog\\app\\frontend\\views\\footer.html");
    }
}
