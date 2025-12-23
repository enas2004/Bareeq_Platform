<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/product/compare.twig */
class __TwigTemplate_e48af6beac6edbddf57c6871c57cdc42 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"product-compare\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
        }
        // line 13
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 14
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 15
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 16
        if (($context["products"] ?? null)) {
            // line 17
            yield "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td colspan=\"";
            // line 20
            yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
            yield "\"><strong>";
            yield ($context["text_product"] ?? null);
            yield "</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
            // line 25
            yield ($context["text_name"] ?? null);
            yield "</td>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                yield "                <td><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                yield "</strong></a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "            </tr>
            <tr>
              <td>";
            // line 31
            yield ($context["text_image"] ?? null);
            yield "</td>
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                yield "                <td class=\"text-center\">";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33)) {
                    yield " <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    yield "\" class=\"img-thumbnail\"/> ";
                }
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            </tr>
            <tr>
              <td>";
            // line 37
            yield ($context["text_price"] ?? null);
            yield "</td>
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                yield "                <td>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 39)) {
                    // line 40
                    yield "                    <x-currency code=\"";
                    yield ($context["currency"] ?? null);
                    yield "\" amount=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40);
                    yield "\"></x-currency>
                  ";
                } else {
                    // line 42
                    yield "                    <span class=\"price-new\"><x-currency code=\"";
                    yield ($context["currency"] ?? null);
                    yield "\" amount=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 42);
                    yield "\"></x-currency></span>
                    <span class=\"price-old\"><x-currency code=\"";
                    // line 43
                    yield ($context["currency"] ?? null);
                    yield "\" amount=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43);
                    yield "\"></x-currency></span>
                  ";
                }
                // line 44
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "            </tr>
            <tr>
              <td>";
            // line 48
            yield ($context["text_model"] ?? null);
            yield "</td>
              ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 50
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 50);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "            </tr>
            <tr>
              <td>";
            // line 54
            yield ($context["text_manufacturer"] ?? null);
            yield "</td>
              ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 56
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 56);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "            </tr>
            <tr>
              <td>";
            // line 60
            yield ($context["text_availability"] ?? null);
            yield "</td>
              ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 62);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "            </tr>
            ";
            // line 65
            if (($context["review_status"] ?? null)) {
                // line 66
                yield "              <tr>
                <td>";
                // line 67
                yield ($context["text_rating"] ?? null);
                yield "</td>
                ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 69
                    yield "                  <td class=\"rating\">
                    ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 71
                        yield "                      ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 71) < $context["i"])) {
                            // line 72
                            yield "                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                        } else {
                            // line 74
                            yield "                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                        }
                        // line 76
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    yield "                    <br/>
                    ";
                    // line 78
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 78);
                    yield "
                  </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "              </tr>
            ";
            }
            // line 83
            yield "            <tr>
              <td>";
            // line 84
            yield ($context["text_summary"] ?? null);
            yield "</td>
              ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 86
                yield "                <td class=\"description\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 86);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "            </tr>
            <tr>
              <td>";
            // line 90
            yield ($context["text_weight"] ?? null);
            yield "</td>
              ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 92
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 92);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "            </tr>
            <tr>
              <td>";
            // line 96
            yield ($context["text_dimension"] ?? null);
            yield "</td>
              ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 98
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 98);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 98);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 98);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield " </tr>
          </tbody>
          ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 102
                yield "            <thead>
              <tr>
                <td colspan=\"";
                // line 104
                yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 104);
                yield "</strong></td>
              </tr>
            </thead>
            ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 108
                    yield "              <tbody>
                <tr>
                  <td>";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 110);
                    yield "</td>
                  ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 112
                        yield "                    <td>";
                        if ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 112)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["key"]] ?? null) : null)) {
                            yield (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 112)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null);
                        }
                        yield "</td>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    yield "                </tr>
              </tbody>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "          <tr>
            <td></td>
            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 121
                yield "              <td class=\"text-center\">
                <form action=\"";
                // line 122
                yield ($context["cart_add"] ?? null);
                yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                yield ($context["cart"] ?? null);
                yield "\" data-oc-target=\"#cart\">
                  <button type=\"submit\" id=\"button-confirm\" class=\"btn btn-primary btn-block\">";
                // line 123
                yield ($context["button_cart"] ?? null);
                yield "</button>
                  <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 124
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                yield "\"/>
                  <input type=\"hidden\" name=\"quantity\" value=\"";
                // line 125
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 125);
                yield "\"/>
                  <a href=\"";
                // line 126
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 126);
                yield "\" class=\"btn btn-danger btn-block\">";
                yield ($context["button_remove"] ?? null);
                yield "</a>
                </form>
              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "          </tr>
        </table>
      ";
        } else {
            // line 133
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 134
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      ";
        }
        // line 136
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 137
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 139
        yield ($context["footer"] ?? null);
        yield " 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/compare.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  512 => 139,  507 => 137,  502 => 136,  495 => 134,  490 => 133,  485 => 130,  473 => 126,  469 => 125,  465 => 124,  461 => 123,  455 => 122,  452 => 121,  448 => 120,  444 => 118,  438 => 117,  430 => 114,  419 => 112,  415 => 111,  411 => 110,  407 => 108,  403 => 107,  395 => 104,  391 => 102,  387 => 101,  383 => 99,  370 => 98,  366 => 97,  362 => 96,  358 => 94,  349 => 92,  345 => 91,  341 => 90,  337 => 88,  328 => 86,  324 => 85,  320 => 84,  317 => 83,  313 => 81,  304 => 78,  301 => 77,  295 => 76,  291 => 74,  287 => 72,  284 => 71,  280 => 70,  277 => 69,  273 => 68,  269 => 67,  266 => 66,  264 => 65,  261 => 64,  252 => 62,  248 => 61,  244 => 60,  240 => 58,  231 => 56,  227 => 55,  223 => 54,  219 => 52,  210 => 50,  206 => 49,  202 => 48,  198 => 46,  191 => 44,  184 => 43,  177 => 42,  169 => 40,  166 => 39,  162 => 38,  158 => 37,  154 => 35,  137 => 33,  133 => 32,  129 => 31,  125 => 29,  114 => 27,  110 => 26,  106 => 25,  96 => 20,  91 => 17,  89 => 16,  85 => 15,  81 => 14,  76 => 13,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-compare\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if products %}
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td colspan=\"{{ products|length + 1 }}\"><strong>{{ text_product }}</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ text_name }}</td>
              {% for product in products %}
                <td><a href=\"{{ product.href }}\"><strong>{{ product.name }}</strong></a></td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_image }}</td>
              {% for product in products %}
                <td class=\"text-center\">{% if product.thumb %} <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\"/> {% endif %}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_price }}</td>
              {% for product in products %}
                <td>{% if not product.special %}
                    <x-currency code=\"{{ currency }}\" amount=\"{{ product.price }}\"></x-currency>
                  {% else %}
                    <span class=\"price-new\"><x-currency code=\"{{ currency }}\" amount=\"{{ product.special }}\"></x-currency></span>
                    <span class=\"price-old\"><x-currency code=\"{{ currency }}\" amount=\"{{ product.price }}\"></x-currency></span>
                  {% endif %}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_model }}</td>
              {% for product in products %}
                <td>{{ product.model }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_manufacturer }}</td>
              {% for product in products %}
                <td>{{ product.manufacturer }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_availability }}</td>
              {% for product in products %}
                <td>{{ product.availability }}</td>
              {% endfor %}
            </tr>
            {% if review_status %}
              <tr>
                <td>{{ text_rating }}</td>
                {% for product in products %}
                  <td class=\"rating\">
                    {% for i in 1..5 %}
                      {% if product.rating < i %}
                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      {% else %}
                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      {% endif %}
                    {% endfor %}
                    <br/>
                    {{ product.reviews }}
                  </td>
                {% endfor %}
              </tr>
            {% endif %}
            <tr>
              <td>{{ text_summary }}</td>
              {% for product in products %}
                <td class=\"description\">{{ product.description }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_weight }}</td>
              {% for product in products %}
                <td>{{ product.weight }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_dimension }}</td>
              {% for product in products %}
                <td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>
              {% endfor %} </tr>
          </tbody>
          {% for attribute_group in attribute_groups %}
            <thead>
              <tr>
                <td colspan=\"{{ products|length + 1 }}\"><strong>{{ attribute_group.name }}</strong></td>
              </tr>
            </thead>
            {% for key, attribute in attribute_group.attribute %}
              <tbody>
                <tr>
                  <td>{{ attribute.name }}</td>
                  {% for product in products %}
                    <td>{% if product.attribute[key] %}{{ product.attribute[key] }}{% endif %}</td>
                  {% endfor %}
                </tr>
              </tbody>
            {% endfor %}
          {% endfor %}
          <tr>
            <td></td>
            {% for product in products %}
              <td class=\"text-center\">
                <form action=\"{{ cart_add }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
                  <button type=\"submit\" id=\"button-confirm\" class=\"btn btn-primary btn-block\">{{ button_cart }}</button>
                  <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
                  <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\"/>
                  <a href=\"{{ product.remove }}\" class=\"btn btn-danger btn-block\">{{ button_remove }}</a>
                </form>
              </td>
            {% endfor %}
          </tr>
        </table>
      {% else %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }} 
", "catalog/view/template/product/compare.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\product\\compare.twig");
    }
}
