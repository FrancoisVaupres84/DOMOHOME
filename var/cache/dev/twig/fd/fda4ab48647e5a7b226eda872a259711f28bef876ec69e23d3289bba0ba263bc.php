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

/* scenario/listeScenario.html.twig */
class __TwigTemplate_b919593282fbd7c5f0ecd7166f4f9f230b02417e862ad7c689c933d63eaf6fe8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scenario/listeScenario.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scenario/listeScenario.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scenario/listeScenario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"content\">
\t\t<H1>Liste des scénarios </H1>


\t\t<div class=\"globalListe\">
\t\t\t";
        // line 10
        if ( !(null === ($context["scenarios"] ?? $this->getContext($context, "scenarios")))) {
            // line 11
            echo "
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scenarios"] ?? $this->getContext($context, "scenarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["scenario"]) {
                // line 13
                echo "\t\t\t\t\tNom:
\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["scenario"], "nom", []), "html", null, true);
                echo "
\t\t\t\t\t- Intensité lumineuse:
\t\t\t\t\t";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["scenario"], "lumiere", []), "html", null, true);
                echo "%
\t\t\t\t\t\t\t\t\t\t- Fermeture volet:
\t\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["scenario"], "volet", []), "html", null, true);
                echo "%
\t\t\t\t\t";
                // line 19
                if ( !(null === $this->getAttribute($context["scenario"], "mode", []))) {
                    // line 20
                    echo "
\t\t\t\t\t\t- Mode de chauffage:
\t\t\t\t\t\t";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["scenario"], "mode", []), "nom", []), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 24
                echo "
\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scenario.edit", ["id" => $this->getAttribute($context["scenario"], "id", [])]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scenario.delete", ["id" => $this->getAttribute($context["scenario"], "id", [])]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scenario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t<br>
\t\t\t\t<div class=\"boutonListe\">
\t\t\t\t<a class=\"btn btn-success\" id=\"\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scenario.create");
        echo "\">Créer un scénario</a>

\t\t\t</div>
\t\t</div>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "scenario/listeScenario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  136 => 39,  132 => 37,  129 => 36,  117 => 30,  109 => 25,  106 => 24,  101 => 22,  97 => 20,  95 => 19,  91 => 18,  86 => 16,  81 => 14,  78 => 13,  74 => 12,  71 => 11,  69 => 10,  61 => 4,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"content\">
\t\t<H1>Liste des scénarios </H1>


\t\t<div class=\"globalListe\">
\t\t\t{% if scenarios is not null %}

\t\t\t\t{% for scenario in scenarios  %}
\t\t\t\t\tNom:
\t\t\t\t\t{{scenario.nom}}
\t\t\t\t\t- Intensité lumineuse:
\t\t\t\t\t{{scenario.lumiere}}%
\t\t\t\t\t\t\t\t\t\t- Fermeture volet:
\t\t\t\t\t{{scenario.volet}}%
\t\t\t\t\t{% if scenario.mode is not null %}

\t\t\t\t\t\t- Mode de chauffage:
\t\t\t\t\t\t{{scenario.mode.nom}}
\t\t\t\t\t{% endif %}

\t\t\t\t\t<a href=\"{{ path('scenario.edit',{'id':scenario.id}) }}\">
\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t<a href=\"{{ path('scenario.delete',{'id':scenario.id}) }}\">
\t\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<br>
\t\t\t\t<div class=\"boutonListe\">
\t\t\t\t<a class=\"btn btn-success\" id=\"\" href=\"{{ path(\"scenario.create\") }}\">Créer un scénario</a>

\t\t\t</div>
\t\t</div>


\t{% endblock %}

\t{% block javascripts %}{% endblock %}
", "scenario/listeScenario.html.twig", "/var/www/domoHome/app/Resources/views/scenario/listeScenario.html.twig");
    }
}
