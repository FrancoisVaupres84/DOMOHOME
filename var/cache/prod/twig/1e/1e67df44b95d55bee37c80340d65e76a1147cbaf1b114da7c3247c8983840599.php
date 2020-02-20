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

/* scenario/editScenario.html.twig */
class __TwigTemplate_948d22e0342c03218dc21e7da53ed434241c14cd707c215a89fc71ef49906144 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html.twig", "scenario/editScenario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "
\t<div class=\"content\">
\t\t<H1>Modifier le Scenario
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scenario"] ?? null), "nom", []), "html", null, true);
        echo "</H1>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"form\">
\t\t\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", []), 'row', ["label" => "Nom du mode (en majuscule et sans caractères speciaux)", "attr" => ["placeholder" => " ex: ETE"]]);
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "saison", []), 'row', ["label" => "Saison du scenario", "attr" => ["placeholder" => " ex: été"]]);
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lumiere", []), 'row', ["label" => "Saisissez l'intensité de la lumiere", "attr" => ["placeholder" => " ex: 60"]]);
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "volet", []), 'row', ["label" => "Saisissez le pourcentage de fermeture du volet", "attr" => ["placeholder" => "ex: 50"]]);
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mode", []), 'row', ["label" => "Selectionnez un mode de chauffage/climatisation"]);
        echo "
\t\t\t\t<br>
\t\t\t\t<input type=\"submit\" value=\"Modifier\" class=\"btn btn-success\"/>
\t\t\t\t<a class=\"global btn btn-success\" id=\"b\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scenario.liste");
        echo "\">Annuler</a>
\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>


";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "scenario/editScenario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  48 => 7,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "scenario/editScenario.html.twig", "/var/www/domoHome/app/Resources/views/scenario/editScenario.html.twig");
    }
}
