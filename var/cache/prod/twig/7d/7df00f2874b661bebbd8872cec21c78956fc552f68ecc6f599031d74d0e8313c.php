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

/* base.html.twig */
class __TwigTemplate_ff3ef90c0791170427540ecec18c58067aea8b752399c5d0f63f77b840546a87 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>
      ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "  </head>
  <body>
    ";
        // line 24
        $context["currentPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 26
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"));
        // line 30
        echo "
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
          ";
        // line 34
        if ((($context["currentPath"] ?? null) != "/app_dev.php/")) {
            // line 35
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" id=\"b\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("controleur");
            echo "\">
                Controleur
              </a>
            </li>

            <li class=\"nav-item\">
              <a class=\"nav-link\" id=\"b\" href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mode.liste");
            echo "\">
                Liste des Modes
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" id=\"b\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scenario.liste");
            echo "\">
                Liste des Scénarios
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" id=\"b\" href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
                Quitter
              </a>
            </li>
          ";
        }
        // line 57
        echo "          <br /><br />
        </ul>
      </div>
    </nav>

  </body>

</html>
";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 68
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        // line 8
        echo "        -DOMOHOME-
      ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 12
        echo "
    <link rel=\"stylesheet\"
      href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleDomoHome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
      rel=\"stylesheet\" />
    ";
    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        // line 66
        echo "
";
    }

    // line 68
    public function block_footer($context, array $blocks = [])
    {
        // line 69
        echo " <footer>
<div class =\"footer\" >
<H5>\"Gérer l'énergie pour économiser la nature...\"</H5>
</div>
";
    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        // line 76
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 76,  169 => 75,  161 => 69,  158 => 68,  153 => 66,  150 => 65,  139 => 15,  134 => 12,  131 => 11,  126 => 8,  123 => 7,  119 => 75,  116 => 74,  114 => 68,  112 => 65,  102 => 57,  94 => 52,  86 => 47,  78 => 42,  69 => 36,  66 => 35,  64 => 34,  58 => 30,  56 => 27,  55 => 26,  54 => 24,  50 => 22,  48 => 11,  45 => 10,  43 => 7,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/domoHome/app/Resources/views/base.html.twig");
    }
}
