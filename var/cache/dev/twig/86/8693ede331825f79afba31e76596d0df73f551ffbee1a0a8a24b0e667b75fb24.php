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

/* controleur/controleur.html.twig */
class __TwigTemplate_98a9e6f9c8a283ec0f4d14fe61c3a9ddb2ac4ce1d040defd6a558cc101f0f0b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/controleur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controleur/controleur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "controleur/controleur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<body>
\t\t<div class=\"global\">
\t\t\t<H1>Panneau de controle</H1>
\t\t\t<div class=\"controle\">

\t\t\t       ";
        // line 9
        echo "
\t\t\t\t<div class=\"lumiere\">
\t\t\t\t\t<div class=\"lumiereControle\">
\t\t\t\t\t\t<H3>Lumière</H3>
\t\t\t\t\t\t<div class=\"bouton\">
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OffLight\" value=\"Eteinte\"/>
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OnLight\" value=\"Allumée\"/>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t<input  type=\"range\" min=\"0\" max=\"100\" step=\"1\" value=";
        // line 20
        echo twig_escape_filter($this->env, ($context["valueLight"] ?? $this->getContext($context, "valueLight")), "html", null, true);
        echo " id=\"slideLight\" name=\"etatLight\" onchange='document.getElementById(\"valLight\").value = \"Intensité = \" + document.getElementById(\"slideLight\").value + \" % \";'/>
\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"text\" name=\"light\" id=\"valLight\" value=\"Intensité = ";
        // line 21
        echo twig_escape_filter($this->env, ($context["valueLight"] ?? $this->getContext($context, "valueLight")), "html", null, true);
        echo " %\" disabled/>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lumiereAffichage\">
\t\t\t\t\t\t<img id=\"light\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ampoule.png"), "html", null, true);
        echo "\" alt=\"ampoule\" width=\"160\" height=\"200\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t       ";
        // line 31
        echo "
\t\t\t\t<div class=\"volet\">
\t\t\t\t\t<div class=\"voletControle\">
\t\t\t\t\t\t<H3>Volet</H3>
\t\t\t\t\t\t<div class=\"bouton\">
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OffVolet\" value=\"Ouvert\"/>
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OnVolet\" value=\"Fermé\"/>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t<input  type=\"range\" min=\"0\" max=\"100\" step=\"1\" value=";
        // line 42
        echo twig_escape_filter($this->env, ($context["valueVolet"] ?? $this->getContext($context, "valueVolet")), "html", null, true);
        echo " id=\"slideVolet\" name=\"etatVolet\" onchange='document.getElementById(\"valVolet\").value = \"Fermeture = \" + document.getElementById(\"slideVolet\").value + \" % \";'/>
\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"text\" name=\"volet\" id=\"valVolet\" value=\"Fermeture = ";
        // line 43
        echo twig_escape_filter($this->env, ($context["valueVolet"] ?? $this->getContext($context, "valueVolet")), "html", null, true);
        echo " %\" disabled/>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"voletAffichage\">
\t\t\t\t\t\t<div id=\"volet1\"><img name=\"xxx\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fenetre.png"), "html", null, true);
        echo "\" width=\"200\" height=\"200\" alt=\"\"></div>
\t\t\t\t\t\t<div id=\"volet2\"><img name=\"yyy\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/volet.jpeg"), "html", null, true);
        echo "\" width=\"200\" height=\"";
        echo twig_escape_filter($this->env, (($context["valueVolet"] ?? $this->getContext($context, "valueVolet")) * 2), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t       ";
        // line 54
        echo "
\t\t\t\t<div class=\"clim\">
\t\t\t\t\t<div class=\"climControle\">
\t\t\t\t\t\t<H3>Clim/Chauffage</H3>
\t\t\t\t\t\t<div class=\"bouton\">
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? $this->getContext($context, "modes")));
        foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"mode\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mode"], "nom", []), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 65
        if ( !(null === ($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")))) {
            // line 66
            echo "\t\t\t\t\t\t\t- Mode:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "nom", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 68
            if ( !(null === $this->getAttribute(($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "tempMax", []))) {
                // line 69
                echo "
\t\t\t\t\t\t\t\t- Température Max:";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute(($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "tempMax", []), "html", null, true);
                echo "C°
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            }
            // line 73
            echo "
\t\t\t\t\t\t\t";
            // line 74
            if ( !(null === $this->getAttribute(($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "tempMin", []))) {
                // line 75
                echo "
\t\t\t\t\t\t\t\t- Température Min:";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute(($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "tempMin", []), "html", null, true);
                echo "C°
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            }
            // line 79
            echo "
\t\t\t\t\t\t\t";
            // line 80
            if (($this->getAttribute(($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "nom", []) == "ETE")) {
                // line 81
                echo "\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/soleil.png"), "html", null, true);
                echo "\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 82
($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "nom", []) == "HIVER")) {
                // line 83
                echo "\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/flocon.png"), "html", null, true);
                echo "\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 84
($context["modeSelectionne"] ?? $this->getContext($context, "modeSelectionne")), "nom", []) == "ABSENT")) {
                // line 85
                echo "\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/interdit.png"), "html", null, true);
                echo "\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\tVeuillez selectionner un mode de fonctionnement.
\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"climAffichage\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<img id=\"hot\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/clim.png"), "html", null, true);
        echo "\" alt=\"ampoule\" width=\"200\" height=\"200\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t       ";
        // line 100
        echo "
\t\t\t<div class=\"scenario\">
\t\t\t\t<H1>Scénarios</H1>
\t\t\t\t<br>
\t\t\t\t<div class=\"bouton_scenario\">
\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scenarios"] ?? $this->getContext($context, "scenarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["scenario"]) {
            // line 106
            echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t";
            // line 108
            if ( !(null === $this->getAttribute($context["scenario"], "nom", []))) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t<input id =\"mode\" class=\"btn btn-success\" type=\"submit\" name=\"scenario\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["scenario"], "nom", []), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["scenario"], "saison", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 114
            $context["imageName"] = $this->getAttribute($context["scenario"], "nom", []);
            // line 115
            echo "\t\t\t\t\t\t\t";
            $context["imageNameFinal"] = (($context["imageName"] ?? $this->getContext($context, "imageName")) . ".png");
            // line 116
            echo "\t\t\t\t\t\t\t";
            if (twig_in_filter(($context["imageNameFinal"] ?? $this->getContext($context, "imageNameFinal")), ($context["images"] ?? $this->getContext($context, "images")))) {
                // line 117
                echo "\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["scenario"], "nom", []), "html", null, true);
                echo ".png\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t";
            }
            // line 119
            echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scenario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t       ";
        // line 128
        echo "

\t\t<script>
\t\t\t\$('#slideLight').on(\"change\", function () {
\t\t\t\tvar valLight = \$('#slideLight').val(); // on sécurise les données
\t\t\t\tvar path = \"controleur\";
\t\t\t\tconsole.log(valLight);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: path, // on donne l'URL du fichier de traitement
\t\t\t\t\ttype: \"POST\", // la requête est de type POST
\t\t\t\t\tdata: \"etatLight=\" + valLight // et on envoie nos données
\t\t\t\t});
\t\t\t\tsetTimeout(function () {
\t\t\t\t\twindow.location.reload(true);
\t\t\t\t}, 1);
\t\t\t});
\t\t</script>

\t\t\t       ";
        // line 147
        echo "
\t\t<script>
\t\t\t\$('#slideVolet').on(\"change\", function () {
\t\t\t\tvar valVolet = \$('#slideVolet').val(); // on sécurise les données
\t\t\t\tvar path = \"controleur\";
\t\t\t\tconsole.log(valVolet);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: path, // on donne l'URL du fichier de traitement
\t\t\t\t\ttype: \"POST\", // la requête est de type POST
\t\t\t\t\tdata: \"etatVolet=\" + valVolet // et on envoie nos données
\t\t\t\t});
\t\t\t\tsetTimeout(function () {
\t\t\t\twindow.location.reload(true);
\t\t\t\t}, 1);
\t\t\t});
\t\t</script>

\t\t\t       ";
        // line 165
        echo "
\t\t<style>
\t\t\t.lumiereAffichage {
\t\t\t\twidth: 200px;
\t\t\t\theight: 200px;
\t\t\t\tbackground-color: rgba(247, 255, 60, ";
        // line 170
        echo twig_escape_filter($this->env, (($context["valueLight"] ?? $this->getContext($context, "valueLight")) / 100), "html", null, true);
        echo ");
\t\t\t\tmargin-left: 20%;

\t\t\t\tborder-radius : 100px;


\t\t\t}
\t\t</style>
\t</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
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
        return "controleur/controleur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 180,  349 => 170,  342 => 165,  323 => 147,  303 => 128,  297 => 123,  288 => 119,  281 => 117,  278 => 116,  275 => 115,  273 => 114,  268 => 112,  265 => 111,  259 => 109,  257 => 108,  253 => 106,  249 => 105,  242 => 100,  233 => 93,  228 => 90,  224 => 88,  221 => 87,  215 => 85,  213 => 84,  208 => 83,  206 => 82,  201 => 81,  199 => 80,  196 => 79,  190 => 76,  187 => 75,  185 => 74,  182 => 73,  176 => 70,  173 => 69,  171 => 68,  165 => 66,  163 => 65,  159 => 63,  150 => 61,  146 => 60,  138 => 54,  129 => 49,  125 => 48,  117 => 43,  113 => 42,  100 => 31,  93 => 26,  85 => 21,  81 => 20,  68 => 9,  61 => 3,  52 => 2,  30 => 1,);
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
\t<body>
\t\t<div class=\"global\">
\t\t\t<H1>Panneau de controle</H1>
\t\t\t<div class=\"controle\">

\t\t\t       {# section lumière #}

\t\t\t\t<div class=\"lumiere\">
\t\t\t\t\t<div class=\"lumiereControle\">
\t\t\t\t\t\t<H3>Lumière</H3>
\t\t\t\t\t\t<div class=\"bouton\">
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OffLight\" value=\"Eteinte\"/>
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OnLight\" value=\"Allumée\"/>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t<input  type=\"range\" min=\"0\" max=\"100\" step=\"1\" value={{valueLight}} id=\"slideLight\" name=\"etatLight\" onchange='document.getElementById(\"valLight\").value = \"Intensité = \" + document.getElementById(\"slideLight\").value + \" % \";'/>
\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"text\" name=\"light\" id=\"valLight\" value=\"Intensité = {{valueLight}} %\" disabled/>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"lumiereAffichage\">
\t\t\t\t\t\t<img id=\"light\" src=\"{{ asset('img/ampoule.png') }}\" alt=\"ampoule\" width=\"160\" height=\"200\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t       {# section volet #}

\t\t\t\t<div class=\"volet\">
\t\t\t\t\t<div class=\"voletControle\">
\t\t\t\t\t\t<H3>Volet</H3>
\t\t\t\t\t\t<div class=\"bouton\">
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OffVolet\" value=\"Ouvert\"/>
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"OnVolet\" value=\"Fermé\"/>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t<input  type=\"range\" min=\"0\" max=\"100\" step=\"1\" value={{valueVolet}} id=\"slideVolet\" name=\"etatVolet\" onchange='document.getElementById(\"valVolet\").value = \"Fermeture = \" + document.getElementById(\"slideVolet\").value + \" % \";'/>
\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"text\" name=\"volet\" id=\"valVolet\" value=\"Fermeture = {{valueVolet}} %\" disabled/>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"voletAffichage\">
\t\t\t\t\t\t<div id=\"volet1\"><img name=\"xxx\" src=\"{{ asset('img/fenetre.png') }}\" width=\"200\" height=\"200\" alt=\"\"></div>
\t\t\t\t\t\t<div id=\"volet2\"><img name=\"yyy\" src=\"{{ asset('img/volet.jpeg') }}\" width=\"200\" height=\"{{valueVolet *2 }}\" alt=\"\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t       {# section clim/chauffage #}

\t\t\t\t<div class=\"clim\">
\t\t\t\t\t<div class=\"climControle\">
\t\t\t\t\t\t<H3>Clim/Chauffage</H3>
\t\t\t\t\t\t<div class=\"bouton\">
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t{% for mode in modes  %}
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"mode\" value=\"{{mode.nom}}\"/>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if modeSelectionne is not null %}
\t\t\t\t\t\t\t- Mode:{{modeSelectionne.nom}}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{% if modeSelectionne.tempMax is not null %}

\t\t\t\t\t\t\t\t- Température Max:{{modeSelectionne.tempMax}}C°
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if modeSelectionne.tempMin is not null %}

\t\t\t\t\t\t\t\t- Température Min:{{modeSelectionne.tempMin}}C°
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if modeSelectionne.nom == \"ETE\" %}
\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"{{ asset('img/soleil.png') }}\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t{% elseif modeSelectionne.nom == \"HIVER\"  %}
\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"{{ asset('img/flocon.png') }}\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t{% elseif modeSelectionne.nom == \"ABSENT\"  %}
\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"{{ asset('img/interdit.png') }}\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tVeuillez selectionner un mode de fonctionnement.
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"climAffichage\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<img id=\"hot\" src=\"{{ asset('img/clim.png') }}\" alt=\"ampoule\" width=\"200\" height=\"200\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t       {# section scénarios #}

\t\t\t<div class=\"scenario\">
\t\t\t\t<H1>Scénarios</H1>
\t\t\t\t<br>
\t\t\t\t<div class=\"bouton_scenario\">
\t\t\t\t\t{% for scenario in scenarios  %}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t{% if scenario.nom is not null  %}
\t\t\t\t\t\t\t\t\t<input id =\"mode\" class=\"btn btn-success\" type=\"submit\" name=\"scenario\" value=\"{{scenario.nom}}\"/>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{{scenario.saison}}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{% set imageName = scenario.nom %}
\t\t\t\t\t\t\t{% set imageNameFinal = imageName ~ '.png' %}
\t\t\t\t\t\t\t{% if imageNameFinal  in images  %}
\t\t\t\t\t\t\t\t<img id=\"hot\" src=\"{{ asset('img/') }}{{scenario.nom}}.png\" alt=\"ampoule\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>

\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t       {# script ajax pour recupérer les données du formulaire lumiere #}


\t\t<script>
\t\t\t\$('#slideLight').on(\"change\", function () {
\t\t\t\tvar valLight = \$('#slideLight').val(); // on sécurise les données
\t\t\t\tvar path = \"controleur\";
\t\t\t\tconsole.log(valLight);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: path, // on donne l'URL du fichier de traitement
\t\t\t\t\ttype: \"POST\", // la requête est de type POST
\t\t\t\t\tdata: \"etatLight=\" + valLight // et on envoie nos données
\t\t\t\t});
\t\t\t\tsetTimeout(function () {
\t\t\t\t\twindow.location.reload(true);
\t\t\t\t}, 1);
\t\t\t});
\t\t</script>

\t\t\t       {# script ajax pour recupérer les données du formulaire volet #}

\t\t<script>
\t\t\t\$('#slideVolet').on(\"change\", function () {
\t\t\t\tvar valVolet = \$('#slideVolet').val(); // on sécurise les données
\t\t\t\tvar path = \"controleur\";
\t\t\t\tconsole.log(valVolet);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: path, // on donne l'URL du fichier de traitement
\t\t\t\t\ttype: \"POST\", // la requête est de type POST
\t\t\t\t\tdata: \"etatVolet=\" + valVolet // et on envoie nos données
\t\t\t\t});
\t\t\t\tsetTimeout(function () {
\t\t\t\twindow.location.reload(true);
\t\t\t\t}, 1);
\t\t\t});
\t\t</script>

\t\t\t       {# css pour animer la lumiere #}

\t\t<style>
\t\t\t.lumiereAffichage {
\t\t\t\twidth: 200px;
\t\t\t\theight: 200px;
\t\t\t\tbackground-color: rgba(247, 255, 60, {{valueLight / 100}});
\t\t\t\tmargin-left: 20%;

\t\t\t\tborder-radius : 100px;


\t\t\t}
\t\t</style>
\t</body>
{% endblock %}
{% block javascripts %}{% endblock %}
", "controleur/controleur.html.twig", "/var/www/domoHome/app/Resources/views/controleur/controleur.html.twig");
    }
}
