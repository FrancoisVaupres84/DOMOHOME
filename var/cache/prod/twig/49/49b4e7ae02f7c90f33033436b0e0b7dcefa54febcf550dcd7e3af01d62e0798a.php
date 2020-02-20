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

/* acceuil/acceuil.html.twig */
class __TwigTemplate_40bdfc34b970271e80068b7af83f57141a454f8d29028118f6693896bbf57c70 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html.twig", "acceuil/acceuil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "  <html>
    <body>
      <div class=\"entrer\">
        <div class=\"img\">
          <img id=\"domo\"
            src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/domo.png"), "html", null, true);
        echo "\"
            alt=\"ampoule\"
            width=\"500\"
            height=\"500\" />
        </div> <H1 class=\"titre\">
          BIENVENUE SUR VOTRE APPLICATION DOMOHOME
        </H1>
        <a id=\"entrer\" class=\"btn btn-success\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("controleur");
        echo "\">
          Entrer
        </a>
      </div>
    </body>
  </html>
";
    }

    public function getTemplateName()
    {
        return "acceuil/acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acceuil/acceuil.html.twig", "/var/www/domoHome/app/Resources/views/acceuil/acceuil.html.twig");
    }
}
