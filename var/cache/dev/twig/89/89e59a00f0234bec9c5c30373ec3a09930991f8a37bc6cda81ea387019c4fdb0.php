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

/* learning/about-me.html.twig */
class __TwigTemplate_2e609f65173c19ceb60a8a71f893f5431e3862dddcfcbc579f290080a908d949 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "learning/about-me.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "learning/about-me.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "learning/about-me.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "About me";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        <h1> About me </h1>

        <h2>Hey I'm ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ,</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec ex vel purus pharetra blandit eget et
            tortor. Aenean non nisl a lectus interdum suscipit. Nullam placerat nulla at sapien tempus sagittis. Aenean
            consectetur tortor vel ligula mollis tincidunt. Mauris blandit felis vel feugiat euismod. Duis dapibus
            commodo fringilla. Vestibulum leo massa, lobortis sed purus vel, maximus feugiat nunc. Nulla ante tellus,
            pulvinar dignissim sagittis sed, elementum at nisi. Morbi eget lectus tempor sem elementum mattis.
            Suspendisse convallis eu massa consequat egestas.

            Cras vitae lacinia tortor. Sed tempor finibus sem, in faucibus purus ullamcorper quis. Aenean elementum mi
            vel lorem tempor mattis. Vivamus odio tortor, iaculis in ligula a, ornare vulputate velit. Ut sit amet erat
            nec elit tincidunt porttitor et ac elit. Ut imperdiet arcu quis nibh dictum, sit amet pulvinar nisl finibus.
            Vivamus vel vehicula mi, id tincidunt eros. Integer suscipit pulvinar tincidunt. Mauris quis nunc quis lorem
            vulputate scelerisque. Duis dictum, massa ullamcorper facilisis tempus, urna risus aliquam lacus, vel
            iaculis lorem lorem a odio. Maecenas vitae tempus augue, a semper nisl. Nunc egestas ante dui. Quisque
            hendrerit turpis ex, at tempor lorem mattis eget. Pellentesque vel nulla tortor.</p><br><br>
        <hr>


        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Homepage</a>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "learning/about-me.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}About me{% endblock %}

{% block body %}
    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        <h1> About me </h1>

        <h2>Hey I'm {{ name }} ,</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec ex vel purus pharetra blandit eget et
            tortor. Aenean non nisl a lectus interdum suscipit. Nullam placerat nulla at sapien tempus sagittis. Aenean
            consectetur tortor vel ligula mollis tincidunt. Mauris blandit felis vel feugiat euismod. Duis dapibus
            commodo fringilla. Vestibulum leo massa, lobortis sed purus vel, maximus feugiat nunc. Nulla ante tellus,
            pulvinar dignissim sagittis sed, elementum at nisi. Morbi eget lectus tempor sem elementum mattis.
            Suspendisse convallis eu massa consequat egestas.

            Cras vitae lacinia tortor. Sed tempor finibus sem, in faucibus purus ullamcorper quis. Aenean elementum mi
            vel lorem tempor mattis. Vivamus odio tortor, iaculis in ligula a, ornare vulputate velit. Ut sit amet erat
            nec elit tincidunt porttitor et ac elit. Ut imperdiet arcu quis nibh dictum, sit amet pulvinar nisl finibus.
            Vivamus vel vehicula mi, id tincidunt eros. Integer suscipit pulvinar tincidunt. Mauris quis nunc quis lorem
            vulputate scelerisque. Duis dictum, massa ullamcorper facilisis tempus, urna risus aliquam lacus, vel
            iaculis lorem lorem a odio. Maecenas vitae tempus augue, a semper nisl. Nunc egestas ante dui. Quisque
            hendrerit turpis ex, at tempor lorem mattis eget. Pellentesque vel nulla tortor.</p><br><br>
        <hr>


        <a href=\"{{ path ('homepage') }}\">Homepage</a>

    </div>


{% endblock %}
", "learning/about-me.html.twig", "/var/www/symfonyMVC/templates/learning/about-me.html.twig");
    }
}
