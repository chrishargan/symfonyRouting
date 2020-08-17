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

/* learning/index.html.twig */
class __TwigTemplate_64ff3b29048f5a1ff2f4635924bdd5534e62a1f4ca23e9ec2812e6e7aff6de88 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "learning/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "learning/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "learning/index.html.twig", 1);
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

        echo "Hello LearningController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/var/www/symfonyMVC/src/Controller/LearningController.php", 0), "html", null, true);
        echo "\">src/Controller/LearningController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/var/www/symfonyMVC/templates/learning/index.html.twig", 0), "html", null, true);
        echo "\">templates/learning/index.html.twig</a></code></li>
    </ul>

   ";
        // line 34
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "learning/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  107 => 17,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LearningController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/var/www/symfonyMVC/src/Controller/LearningController.php'|file_link(0) }}\">src/Controller/LearningController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/var/www/symfonyMVC/templates/learning/index.html.twig'|file_link(0) }}\">templates/learning/index.html.twig</a></code></li>
    </ul>

   {# <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec ex vel purus pharetra blandit eget et tortor. Aenean non nisl a lectus interdum suscipit. Nullam placerat nulla at sapien tempus sagittis. Aenean consectetur tortor vel ligula mollis tincidunt. Mauris blandit felis vel feugiat euismod. Duis dapibus commodo fringilla. Vestibulum leo massa, lobortis sed purus vel, maximus feugiat nunc. Nulla ante tellus, pulvinar dignissim sagittis sed, elementum at nisi. Morbi eget lectus tempor sem elementum mattis. Suspendisse convallis eu massa consequat egestas.

        Cras vitae lacinia tortor. Sed tempor finibus sem, in faucibus purus ullamcorper quis. Aenean elementum mi vel lorem tempor mattis. Vivamus odio tortor, iaculis in ligula a, ornare vulputate velit. Ut sit amet erat nec elit tincidunt porttitor et ac elit. Ut imperdiet arcu quis nibh dictum, sit amet pulvinar nisl finibus. Vivamus vel vehicula mi, id tincidunt eros. Integer suscipit pulvinar tincidunt. Mauris quis nunc quis lorem vulputate scelerisque. Duis dictum, massa ullamcorper facilisis tempus, urna risus aliquam lacus, vel iaculis lorem lorem a odio. Maecenas vitae tempus augue, a semper nisl. Nunc egestas ante dui. Quisque hendrerit turpis ex, at tempor lorem mattis eget. Pellentesque vel nulla tortor.

        Proin vestibulum pretium pulvinar. Maecenas sodales enim eget libero scelerisque sodales et a dui. Morbi et luctus magna, a cursus eros. Praesent et mollis leo. Sed mollis augue et pulvinar commodo. Nullam elementum, arcu et dignissim suscipit, lacus lectus condimentum libero, vitae ullamcorper est neque a eros. Fusce eleifend vestibulum efficitur. Proin hendrerit nibh ut sem venenatis, vitae vestibulum massa bibendum. Nullam orci sem, efficitur eu egestas quis, lacinia eu est. Praesent eu vestibulum sapien, eget consectetur eros.

        Suspendisse a dictum ligula. Cras pulvinar convallis sagittis. Vestibulum vulputate lorem nec nisl dignissim, sit amet iaculis est fermentum. Aliquam laoreet porta dui, ut suscipit elit convallis ac. Aliquam suscipit dictum purus, at feugiat leo vehicula quis. Nunc consequat dui arcu, et consectetur purus iaculis at. Praesent ut laoreet neque. Duis at fringilla ipsum. Donec eu metus leo. Fusce interdum non sem et mollis. Donec fermentum efficitur ligula, nec aliquet elit rhoncus nec. Nam tristique feugiat lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam convallis vitae eros a porta. Nunc semper facilisis magna, quis dictum orci posuere sit amet. Quisque in vestibulum augue.

        Aenean eu ex non urna porta pharetra vel vitae purus. Morbi ac consectetur ipsum, id luctus erat. Praesent ac fringilla nisi, in interdum sapien. Suspendisse vitae condimentum eros. Nam aliquam, mi id finibus venenatis, tortor lacus pharetra erat, non commodo urna justo ac diam. Curabitur convallis vehicula nisl, et egestas neque sagittis ut. Etiam nisi risus, gravida at feugiat at, tempor in massa. Praesent porta massa aliquam pulvinar faucibus. Praesent dui nisl, volutpat non dignissim vel, imperdiet ut ex. Proin molestie lacinia consectetur. Donec et ipsum euismod, scelerisque mauris ut, sodales mi.

        Morbi facilisis mauris dolor, fermentum rhoncus ante tincidunt sit amet. Vivamus malesuada sem in velit tincidunt, nec tempor enim bibendum. Duis quis odio et dolor rhoncus laoreet. Donec sed leo orci. Aenean tincidunt tincidunt quam sed tempor. Donec vel nibh eu risus sodales feugiat. Cras nec vehicula velit. Curabitur a augue et erat congue ullamcorper et sed ipsum. Curabitur facilisis turpis nibh, sed viverra ante fringilla eget. Curabitur laoreet suscipit ligula, vitae pellentesque magna consequat a. Nam a sollicitudin eros. Fusce accumsan porttitor quam, id luctus massa tincidunt ut. Vivamus eu suscipit ex. Aliquam pharetra laoreet elit, vel mattis nunc tincidunt quis. Etiam nunc felis, volutpat at pulvinar vel, gravida euismod nunc.

        Quisque pellentesque placerat magna nec porta. Donec semper porta pellentesque. Etiam ut condimentum mi. Cras in risus tortor. Donec molestie est vel imperdiet bibendum. Nam odio nulla, viverra vestibulum maximus nec, ultricies vel metus. Aenean et urna faucibus, dignissim mi et, imperdiet erat. Fusce et augue sem. Donec rhoncus sapien eros, euismod elementum tellus placerat a.</p>
    #}
</div>
{% endblock %}
", "learning/index.html.twig", "/var/www/symfonyMVC/templates/learning/index.html.twig");
    }
}
