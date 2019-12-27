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

/* sweet/newSweet.html.twig */
class __TwigTemplate_d2d4f03d12a29e2b268b5c05401072d78e24ecef9976c638e5aa35ed566295e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sweet/newSweet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sweet/newSweet.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formSweet"]) || array_key_exists("formSweet", $context) ? $context["formSweet"] : (function () { throw new RuntimeError('Variable "formSweet" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sweet/newSweet.html.twig", 1);
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
            echo "            Nouvelle pâtisserie
        ";
        }
        // line 12
        echo "    </h1>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSweet"]) || array_key_exists("formSweet", $context) ? $context["formSweet"] : (function () { throw new RuntimeError('Variable "formSweet" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSweet"]) || array_key_exists("formSweet", $context) ? $context["formSweet"] : (function () { throw new RuntimeError('Variable "formSweet" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Nom de la pâtisserie"]]);
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSweet"]) || array_key_exists("formSweet", $context) ? $context["formSweet"] : (function () { throw new RuntimeError('Variable "formSweet" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), 'row', ["attr" => ["placeholder" => "URL de l'image"]]);
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
            echo "            Ajouter la nouvelle pâtisserie
        ";
        }
        // line 24
        echo "    </button>
    
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSweet"]) || array_key_exists("formSweet", $context) ? $context["formSweet"] : (function () { throw new RuntimeError('Variable "formSweet" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sweet/newSweet.html.twig";
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

{% form_theme formSweet 'bootstrap_4_layout.html.twig' %}

{% block body %}
    <h1>
        {% if editMode %}
            Modifications
        {% else %}
            Nouvelle pâtisserie
        {% endif %}
    </h1>
    {{ form_start(formSweet) }}

    {{ form_row(formSweet.name, {'attr': {'placeholder' : \"Nom de la pâtisserie\"}}) }}
    {{ form_row(formSweet.image, {'attr': {'placeholder' : \"URL de l'image\"}}) }}
    
    <button type=\"submit\" class=\"btn btn-success\">
        {% if editMode %}
            Modifier
        {% else %}
            Ajouter la nouvelle pâtisserie
        {% endif %}
    </button>
    
    {{ form_end(formSweet) }}
{% endblock %}", "sweet/newSweet.html.twig", "C:\\Users\\zakka\\Documents\\GitHub\\RoseDeDamas2\\templates\\sweet\\newSweet.html.twig");
    }
}
