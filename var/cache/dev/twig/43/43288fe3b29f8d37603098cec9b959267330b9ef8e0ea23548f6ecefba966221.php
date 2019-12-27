<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sweet/newIngredient.html.twig */
class __TwigTemplate_7e9dffc39fadb5ef1fb20b318bb4a2db0c63bb07531b4f146d6da4d7a85f0a41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sweet/newIngredient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sweet/newIngredient.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formIngredient"]) || array_key_exists("formIngredient", $context) ? $context["formIngredient"] : (function () { throw new RuntimeError('Variable "formIngredient" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sweet/newIngredient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>
        ";
        // line 7
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "            Modifications
        ";
        } else {
            // line 10
            echo "            Nouvel ingredient
        ";
        }
        // line 12
        echo "    </h1>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formIngredient"]) || array_key_exists("formIngredient", $context) ? $context["formIngredient"] : (function () { throw new RuntimeError('Variable "formIngredient" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formIngredient"]) || array_key_exists("formIngredient", $context) ? $context["formIngredient"] : (function () { throw new RuntimeError('Variable "formIngredient" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Nom de l'ingrédient"]]);
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formIngredient"]) || array_key_exists("formIngredient", $context) ? $context["formIngredient"] : (function () { throw new RuntimeError('Variable "formIngredient" does not exist.', 16, $this->source); })()), "sweet", [], "any", false, false, false, 16), 'row');
        echo "

    <button type=\"submit\" class=\"btn btn-success\">
        ";
        // line 19
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "            Modifier
        ";
        } else {
            // line 22
            echo "            Ajouter le nouvel ingrédient
        ";
        }
        // line 24
        echo "    </button>
    
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formIngredient"]) || array_key_exists("formIngredient", $context) ? $context["formIngredient"] : (function () { throw new RuntimeError('Variable "formIngredient" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sweet/newIngredient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 26,  112 => 24,  108 => 22,  104 => 20,  102 => 19,  96 => 16,  92 => 15,  87 => 13,  84 => 12,  80 => 10,  76 => 8,  74 => 7,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formIngredient 'bootstrap_4_layout.html.twig' %}

{% block body %}
    <h1>
        {% if editMode %}
            Modifications
        {% else %}
            Nouvel ingredient
        {% endif %}
    </h1>
    {{ form_start(formIngredient) }}

    {{ form_row(formIngredient.name, {'attr': {'placeholder' : \"Nom de l'ingrédient\"}}) }}
    {{  form_row(formIngredient.sweet)}}

    <button type=\"submit\" class=\"btn btn-success\">
        {% if editMode %}
            Modifier
        {% else %}
            Ajouter le nouvel ingrédient
        {% endif %}
    </button>
    
    {{ form_end(formIngredient) }}
{% endblock %}", "sweet/newIngredient.html.twig", "C:\\Users\\zakka\\Documents\\GitHub\\RoseDeDamas2\\templates\\sweet\\newIngredient.html.twig");
    }
}
