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

/* layout.html */
class __TwigTemplate_8ada85ba28dd163c01c19a08439b1cac973def61d09423e3670222605dbeb041 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href='/blog/assets/css/bootstrap.min.css' rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom fonts for this template -->
    <link href=\"/blog/assets/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"/blog/assets/css/clean-blog.min.css\" rel=\"stylesheet\">

</head>

<body>

";
        // line 28
        $this->loadTemplate("nav.html", "layout.html", 28)->display($context);
        // line 29
        $this->loadTemplate("page_header.html", "layout.html", 29)->display($context);
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "<hr>

";
        // line 35
        $this->loadTemplate("footer.html", "layout.html", 35)->display($context);
        // line 36
        echo "
<!-- Bootstrap core JavaScript -->
<script src=\"/assets/jquery/jquery.min.js\"></script>
<script src=\"/assets/js/bootstrap.bundle.min.js\"></script>

<!-- Custom scripts for this template -->
<script src=\"/assets/js/clean-blog.min.js\"></script>

</body>

</html>
";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  87 => 30,  72 => 36,  70 => 35,  66 => 33,  64 => 30,  62 => 29,  60 => 28,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html", "D:\\xampp\\htdocs\\blog\\app\\frontend\\views\\layout.html");
    }
}
