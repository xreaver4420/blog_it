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

/* contact.html */
class __TwigTemplate_d5a73fa71281f6c783d7f06b8c49ee15be8023cfdfd46cacd27ef144c89ab7fe extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html", "contact.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "  <!-- Main Content -->
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-10 mx-auto\">
        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name=\"sentMessage\" id=\"contactForm\" novalidate>
          <div class=\"control-group\">
            <div class=\"form-group floating-label-form-group controls\">
              <label>Name</label>
              <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
              <p class=\"help-block text-danger\"></p>
            </div>
          </div>
          <div class=\"control-group\">
            <div class=\"form-group floating-label-form-group controls\">
              <label>Email Address</label>
              <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
              <p class=\"help-block text-danger\"></p>
            </div>
          </div>
          <div class=\"control-group\">
            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
              <label>Phone Number</label>
              <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
              <p class=\"help-block text-danger\"></p>
            </div>
          </div>
          <div class=\"control-group\">
            <div class=\"form-group floating-label-form-group controls\">
              <label>Message</label>
              <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
              <p class=\"help-block text-danger\"></p>
            </div>
          </div>
          <br>
          <div id=\"success\"></div>
          <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary\" id=\"sendMessageButton\">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "contact.html", "D:\\xampp\\htdocs\\blog\\app\\frontend\\views\\contact.html");
    }
}
