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

/* @EasyAdmin/welcome.html.twig */
class __TwigTemplate_bbf7eeeb7c10931830c068e67d1b166c9ef615a5b18f42b57ae9aea705179ecb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'content_body' => [$this, 'block_content_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "@EasyAdmin/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        echo "Welcome to EasyAdmin 3";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_body"));

        // line 7
        echo "    <style>
        p { max-width: 600px; }
    </style>

    <p>
        <strong>You have successfully installed EasyAdmin 3 in your application!</strong>
    </p>

    <p>
        You are seeing this example page because you haven't configured the start page
        of your Dashboard. To do that, open the following file in your editor:
    </p>

    <pre>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["dashboard_controller_filepath"]) || array_key_exists("dashboard_controller_filepath", $context) ? $context["dashboard_controller_filepath"] : (function () { throw new RuntimeError('Variable "dashboard_controller_filepath" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</pre>

    <p>
        Then, add the following method to it to customize the Dashboard start page:
    </p>

    <pre>
use EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AbstractDashboardController;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator;
use Symfony\\Component\\Routing\\Annotation\\Route;
// ...

class ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["dashboard_controller_class"]) || array_key_exists("dashboard_controller_class", $context) ? $context["dashboard_controller_class"] : (function () { throw new RuntimeError('Variable "dashboard_controller_class" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " extends AbstractDashboardController
{
    /**
     * @Route(\"/admin\")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        \$routeBuilder = \$this->get(CrudUrlGenerator::class)->build();

        return \$this->redirect(\$routeBuilder->setController(OneOfYourCrudController::class)->generateUrl());

        // you can also redirect to different pages depending on the current user
        if ('jane' === \$this->getUser()->getUsername()) {
            return \$this->redirect('...');
        }

        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        return \$this->render('some/path/my-dashboard.html.twig');
    }

    // ...
}
    </pre>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  103 => 20,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title 'Welcome to EasyAdmin 3' %}

{% block content_body %}
    <style>
        p { max-width: 600px; }
    </style>

    <p>
        <strong>You have successfully installed EasyAdmin 3 in your application!</strong>
    </p>

    <p>
        You are seeing this example page because you haven't configured the start page
        of your Dashboard. To do that, open the following file in your editor:
    </p>

    <pre>{{ dashboard_controller_filepath }}</pre>

    <p>
        Then, add the following method to it to customize the Dashboard start page:
    </p>

    <pre>
use EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AbstractDashboardController;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator;
use Symfony\\Component\\Routing\\Annotation\\Route;
// ...

class {{ dashboard_controller_class }} extends AbstractDashboardController
{
    /**
     * @Route(\"/admin\")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        \$routeBuilder = \$this->get(CrudUrlGenerator::class)->build();

        return \$this->redirect(\$routeBuilder->setController(OneOfYourCrudController::class)->generateUrl());

        // you can also redirect to different pages depending on the current user
        if ('jane' === \$this->getUser()->getUsername()) {
            return \$this->redirect('...');
        }

        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        return \$this->render('some/path/my-dashboard.html.twig');
    }

    // ...
}
    </pre>
{% endblock %}
", "@EasyAdmin/welcome.html.twig", "C:\\Users\\assou\\Desktop\\AssouBoutique\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\welcome.html.twig");
    }
}
