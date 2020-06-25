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

/* cart/_form.html.twig */
class __TwigTemplate_5eed25261a4eca6a2a497885e00470f079b2de021685df6239499bf45f70c077 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_form.html.twig"));

        // line 1
        echo "<div class=\"card border-info\">
    <div class=\"card-body\">
        <div class=\"row row-cols-md-3\">
            <div class=\"col-md-6\">
                ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["class" => ""]]);
        echo "
                ";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "children", [], "any", false, false, false, 6)) > 1)) {
            // line 7
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "children", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["sale"]) {
                // line 8
                echo "                        ";
                if ((twig_length_filter($this->env, $context["sale"]) > 0)) {
                    // line 9
                    echo "                            <div class=\"list-inline\">
                                <div class=\"list-inline-item\">
                                    ";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale"], "product", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
                    echo "
                                </div>
                                <div class=\"list-inline-item\">
                                    ";
                    // line 14
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["sale"], "count", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control m-2 w-25"]]);
                    // line 18
                    echo "
                                </div>
                                <div class=\"list-inline-item\">
                                    <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove_product", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale"], "product", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "data", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\" class=\"btn btn-outline-danger\">
                                        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                                ";
                    // line 25
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["sale"], "product", [], "any", false, false, false, 25), 'widget', ["attr" => ["hidden" => true]]);
                    echo "
                            </div>
                        ";
                }
                // line 28
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    <button class=\"btn btn-outline-success mt-2 align-self-center\" type=\"submit\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider", [], "messages");
            // line 32
            echo "                    </button>
                    ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
                ";
        } else {
            // line 35
            echo "                    <div>
                        <span class=\"fa-stack fa-5x\">
                          <i class=\"fa fa-shopping-cart fa-stack-1x\"></i>
                          <i class=\"fa fa-ban fa-stack-2x text-danger\"></i>
                        </span>
                    </div>
                    <h3>
                        ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Panier vide !", [], "messages");
            // line 43
            echo "                    </h3>
                ";
        }
        // line 45
        echo "            </div>
            <div class=\"col-md-4 text-center\">
                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total commande TTC", [], "messages");
        // line 48
        echo "                <div class=\"mt-3\">
                    <i class=\"fa fa-money fa-3x\" aria-hidden=\"true\"> ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 49, $this->source); })()), "EUR", [], "fr"), "html", null, true);
        echo "</i>
                </div>
            </div>
            <div class=\"col-md-2\">
                ";
        // line 53
        $this->loadTemplate("cart/_delete_form.html.twig", "cart/_form.html.twig", 53)->display($context);
        // line 54
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  144 => 53,  137 => 49,  134 => 48,  132 => 47,  128 => 45,  124 => 43,  122 => 42,  113 => 35,  108 => 33,  105 => 32,  103 => 31,  99 => 29,  93 => 28,  87 => 25,  80 => 21,  75 => 18,  73 => 14,  67 => 11,  63 => 9,  60 => 8,  55 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card border-info\">
    <div class=\"card-body\">
        <div class=\"row row-cols-md-3\">
            <div class=\"col-md-6\">
                {{ form_start(form, { 'attr': {'class': ''} }) }}
                {% if form.children|length > 1 %}
                    {% for sale in form.children %}
                        {% if sale|length > 0 %}
                            <div class=\"list-inline\">
                                <div class=\"list-inline-item\">
                                    {{ sale.product.vars.data.name }}
                                </div>
                                <div class=\"list-inline-item\">
                                    {{ form_widget(sale.count, {
                                        'attr': {
                                            'class': 'form-control m-2 w-25'
                                        }})
                                    }}
                                </div>
                                <div class=\"list-inline-item\">
                                    <a href=\"{{ path('cart_remove_product', {id: sale.product.vars.data.id}) }}\" class=\"btn btn-outline-danger\">
                                        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                                {{ form_widget(sale.product, { 'attr': {'hidden': true} }) }}
                            </div>
                        {% endif %}
                    {% endfor %}
                    <button class=\"btn btn-outline-success mt-2 align-self-center\" type=\"submit\">
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        {% trans %}Valider{% endtrans %}
                    </button>
                    {{ form_end(form, {'render_rest': false}) }}
                {% else %}
                    <div>
                        <span class=\"fa-stack fa-5x\">
                          <i class=\"fa fa-shopping-cart fa-stack-1x\"></i>
                          <i class=\"fa fa-ban fa-stack-2x text-danger\"></i>
                        </span>
                    </div>
                    <h3>
                        {% trans %}Panier vide !{% endtrans %}
                    </h3>
                {% endif %}
            </div>
            <div class=\"col-md-4 text-center\">
                {% trans %}Total commande TTC{% endtrans %}
                <div class=\"mt-3\">
                    <i class=\"fa fa-money fa-3x\" aria-hidden=\"true\"> {{ price|format_currency('EUR', [], 'fr') }}</i>
                </div>
            </div>
            <div class=\"col-md-2\">
                {% include 'cart/_delete_form.html.twig' %}
            </div>
        </div>
    </div>
</div>
", "cart/_form.html.twig", "C:\\Users\\assou\\Desktop\\AssouBoutique\\templates\\cart\\_form.html.twig");
    }
}
