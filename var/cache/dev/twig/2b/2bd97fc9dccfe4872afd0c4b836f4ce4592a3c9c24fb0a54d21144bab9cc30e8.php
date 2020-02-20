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

/* mode/listeMode.html.twig */
class __TwigTemplate_975679029d87025d3c56816fe6235bac28194ebc0f67564669f1c51f5e0e12f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mode/listeMode.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mode/listeMode.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mode/listeMode.html.twig", 1);
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
\t\t<H1>Liste des modes de chauffage/climatisation</H1>


\t\t<div class=\"globalListe\">
\t\t\t";
        // line 10
        if ( !(null === ($context["modes"] ?? $this->getContext($context, "modes")))) {
            // line 11
            echo "
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? $this->getContext($context, "modes")));
            foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                // line 13
                echo "\t\t\t\t\tNom:
\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["mode"], "nom", []), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 15
                if ( !(null === $this->getAttribute($context["mode"], "tempMin", []))) {
                    // line 16
                    echo "
\t\t\t\t\t\t- Température Min:
\t\t\t\t\t\t";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mode"], "tempMin", []), "html", null, true);
                    echo "C°
\t\t\t\t\t";
                }
                // line 20
                echo "
\t\t\t\t\t";
                // line 21
                if ( !(null === $this->getAttribute($context["mode"], "tempMax", []))) {
                    // line 22
                    echo "
\t\t\t\t\t\t- Température Max:
\t\t\t\t\t\t";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mode"], "tempMax", []), "html", null, true);
                    echo "C°
\t\t\t\t\t";
                }
                // line 26
                echo "
\t\t\t\t\t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mode.edit", ["id" => $this->getAttribute($context["mode"], "id", [])]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mode.delete", ["id" => $this->getAttribute($context["mode"], "id", [])]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t";
        }
        // line 39
        echo "
\t\t\t\t\t<br>
\t\t\t\t<div class=\"boutonListe\">
\t\t\t\t<a class=\"btn btn-success\" id=\"\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mode.create");
        echo "\">Créer un mode</a>
\t\t\t</div>
\t\t</div>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
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
        return "mode/listeMode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 49,  141 => 42,  136 => 39,  133 => 38,  121 => 32,  113 => 27,  110 => 26,  105 => 24,  101 => 22,  99 => 21,  96 => 20,  91 => 18,  87 => 16,  85 => 15,  81 => 14,  78 => 13,  74 => 12,  71 => 11,  69 => 10,  61 => 4,  52 => 3,  30 => 1,);
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
\t\t<H1>Liste des modes de chauffage/climatisation</H1>


\t\t<div class=\"globalListe\">
\t\t\t{% if modes is not null %}

\t\t\t\t{% for mode in modes  %}
\t\t\t\t\tNom:
\t\t\t\t\t{{mode.nom}}
\t\t\t\t\t{% if mode.tempMin is not null %}

\t\t\t\t\t\t- Température Min:
\t\t\t\t\t\t{{mode.tempMin}}C°
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if mode.tempMax is not null %}

\t\t\t\t\t\t- Température Max:
\t\t\t\t\t\t{{mode.tempMax}}C°
\t\t\t\t\t{% endif %}

\t\t\t\t\t<a href=\"{{ path('mode.edit',{'id':mode.id}) }}\">
\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t<a href=\"{{ path('mode.delete',{'id':mode.id}) }}\">
\t\t\t\t\t\t\t<i class=\"material-icons\">
\t\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t\t</i><a/>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}

\t\t\t\t\t<br>
\t\t\t\t<div class=\"boutonListe\">
\t\t\t\t<a class=\"btn btn-success\" id=\"\" href=\"{{ path(\"mode.create\") }}\">Créer un mode</a>
\t\t\t</div>
\t\t</div>


\t{% endblock %}

\t{% block javascripts %}{% endblock %}
", "mode/listeMode.html.twig", "/var/www/domoHome/app/Resources/views/mode/listeMode.html.twig");
    }
}
