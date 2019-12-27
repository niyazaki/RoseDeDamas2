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

/* sweet/sweetDetails.html.twig */
class __TwigTemplate_ce83b36fab59e6eb494ab35b6c484384534c38a4e0f0c6bed5cdebf5adc31ff1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sweet/sweetDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sweet/sweetDetails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sweet/sweetDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    </p>
    <div class=\"card border-secondary mb-3\" style=\"max-width: 20rem;\">
      <div class=\"card-header\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sweet"]) || array_key_exists("sweet", $context) ? $context["sweet"] : (function () { throw new RuntimeError('Variable "sweet" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</div>
      <div class=\"card-body\">
          <img style=\"height: 200px; width: 100%; display: block;\" src=";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sweet"]) || array_key_exists("sweet", $context) ? $context["sweet"] : (function () { throw new RuntimeError('Variable "sweet" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
        echo " alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sweet"]) || array_key_exists("sweet", $context) ? $context["sweet"] : (function () { throw new RuntimeError('Variable "sweet" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
      </div>
    </div>
    <h4 text-align = \"center\"> Liste des ingrédients : </h4>
      <div class = \"ing\">
        <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sweet"]) || array_key_exists("sweet", $context) ? $context["sweet"] : (function () { throw new RuntimeError('Variable "sweet" does not exist.', 14, $this->source); })()), "ingredients", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            echo " 
          <li> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo " </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
      </div>
    <h4 text-align =\"center\"> Options : </h4>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sweet"]) || array_key_exists("sweet", $context) ? $context["sweet"] : (function () { throw new RuntimeError('Variable "sweet" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class =\"btn btn-warning\">Modifier la pâtisserie</a>
    </p>
    </p>
    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listIngredients");
        echo "\" class =\"btn btn-primary\">Liste des ingrédients</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sweet/sweetDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  107 => 20,  102 => 17,  94 => 15,  88 => 14,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    </p>
    <div class=\"card border-secondary mb-3\" style=\"max-width: 20rem;\">
      <div class=\"card-header\">{{sweet.name}}</div>
      <div class=\"card-body\">
          <img style=\"height: 200px; width: 100%; display: block;\" src={{sweet.image}} alt=\"Image de {{sweet.name}}\">
      </div>
    </div>
    <h4 text-align = \"center\"> Liste des ingrédients : </h4>
      <div class = \"ing\">
        <ul>
        {% for ingredient in  sweet.ingredients %} 
          <li> {{ingredient.name}} </li>
        {% endfor %}
        </ul>
      </div>
    <h4 text-align =\"center\"> Options : </h4>
    <a href=\"{{path(\"edit\", {\"id\" : sweet.id})}}\" class =\"btn btn-warning\">Modifier la pâtisserie</a>
    </p>
    </p>
    <a href=\"{{path(\"listIngredients\")}}\" class =\"btn btn-primary\">Liste des ingrédients</a>
{% endblock %}", "sweet/sweetDetails.html.twig", "C:\\Users\\zakka\\Documents\\GitHub\\RoseDeDamas2\\templates\\sweet\\sweetDetails.html.twig");
    }
}
