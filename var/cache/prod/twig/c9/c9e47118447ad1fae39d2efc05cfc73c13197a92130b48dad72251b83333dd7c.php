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

/* scenario/deleteScenario.html.twig */
class __TwigTemplate_29b1655672a4bedf4c3c62436e8f7f43cfc08bba02959c0cdc35b108c017815e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "scenario/deleteScenario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "
\t<div class=\"content\">
\t\t<div class=\"panel-body\">
\t\t\t<H2>Voulez vous vraiment supprimer le Scenario \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scenario"] ?? null), "nom", []), "html", null, true);
        echo "\"?
\t\t\t</H2>
\t\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-success\"/>
\t\t\t<a class=\"btn btn-success\" id=\"\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mode.liste");
        echo "\">Annuler</a>
\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</div>
\t</div>


";
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "scenario/deleteScenario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  58 => 12,  53 => 10,  48 => 8,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "scenario/deleteScenario.html.twig", "/var/www/domoHome/app/Resources/views/scenario/deleteScenario.html.twig");
    }
}
