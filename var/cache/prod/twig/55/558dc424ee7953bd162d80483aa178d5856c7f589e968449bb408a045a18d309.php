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

/* mode/createMode.html.twig */
class __TwigTemplate_b924a9fccdb89a2d7c546fcbb7ebedafc2c11764921f312776c12de22e5a0b80 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "mode/createMode.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "
<div class=\"content\">
\t<H1>Créer un mode de chauffage/climatisation</H1>
\t<div class=\"panel-body\">
\t\t<div class=\"form\">
\t\t\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", []), 'row', ["label" => "Nom du mode (en majuscule et sans caractères speciaux)", "attr" => ["placeholder" => " ex: ETE"]]);
        echo "
\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "temp_min", []), 'row', ["label" => "Saisissez la température minimum de ce mode", "attr" => ["placeholder" => " ex: 18.5"]]);
        echo "
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "temp_max", []), 'row', ["label" => "Saisissez la température maximum de ce mode", "attr" => ["placeholder" => "ex: 30.5"]]);
        echo "
\t\t\t<br>
\t\t\t<input type=\"submit\" value=\"Créer\" class=\"btn btn-success\"/>
\t\t\t<a class=\"btn btn-success\" id=\"b\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mode.liste");
        echo "\">Annuler</a>
\t\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>


\t";
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "mode/createMode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  72 => 16,  68 => 15,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mode/createMode.html.twig", "/var/www/domoHome/app/Resources/views/mode/createMode.html.twig");
    }
}
