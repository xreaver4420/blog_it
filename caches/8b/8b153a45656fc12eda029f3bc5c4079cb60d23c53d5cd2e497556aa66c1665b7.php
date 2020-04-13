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

/* about.html */
class __TwigTemplate_ffe450da6ec401444ac6d2cacd4359e10a9e1ecc88137e3b71c44f2891e78eb7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html", "about.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "  <!-- Main Content -->
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-10 mx-auto\">
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "content", []), "html", null, true);
        echo "
        ";
        // line 10
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  48 => 9,  42 => 5,  39 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "about.html", "D:\\xampp\\htdocs\\blog\\app\\frontend\\views\\about.html");
    }
}
