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
class __TwigTemplate_f6349105e1e89820ff8a45872ef62f216fff7aeddbe9f361dcee0cc2cb6b96d9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "mode/listeMode.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "
\t<div class=\"content\">
\t\t<H1>Liste des modes de chauffage/climatisation</H1>


\t\t<div class=\"globalListe\">
\t\t\t";
        // line 10
        if ( !(null === ($context["modes"] ?? null))) {
            // line 11
            echo "
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
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
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
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
        return array (  133 => 49,  123 => 42,  118 => 39,  115 => 38,  103 => 32,  95 => 27,  92 => 26,  87 => 24,  83 => 22,  81 => 21,  78 => 20,  73 => 18,  69 => 16,  67 => 15,  63 => 14,  60 => 13,  56 => 12,  53 => 11,  51 => 10,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mode/listeMode.html.twig", "/var/www/domoHome/app/Resources/views/mode/listeMode.html.twig");
    }
}
