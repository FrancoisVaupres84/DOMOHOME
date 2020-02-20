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
class __TwigTemplate_6f97bb37841d7d39352b544c2902123254c94c7a61f9af5872ae0bd815b99cb7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "scenario/listeScenario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "
\t<div class=\"content\">
\t\t<H1>Liste des scénarios </H1>


\t\t<div class=\"globalListe\">
\t\t\t";
        // line 10
        if ( !(null === ($context["scenarios"] ?? null))) {
            // line 11
            echo "
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scenarios"] ?? null));
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
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
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
        return array (  129 => 47,  118 => 39,  114 => 37,  111 => 36,  99 => 30,  91 => 25,  88 => 24,  83 => 22,  79 => 20,  77 => 19,  73 => 18,  68 => 16,  63 => 14,  60 => 13,  56 => 12,  53 => 11,  51 => 10,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "scenario/listeScenario.html.twig", "/var/www/domoHome/app/Resources/views/scenario/listeScenario.html.twig");
    }
}
