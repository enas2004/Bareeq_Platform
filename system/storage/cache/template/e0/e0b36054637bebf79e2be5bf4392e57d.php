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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_bca466d7bb4103d5f69df97f76374396 extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "  ";
            if (($context["error_warning"] ?? null)) {
                // line 3
                yield "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa-solid fa-circle-exclamation\"></i> ";
                // line 4
                yield ($context["error_warning"] ?? null);
                yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
            }
            // line 8
            yield "  ";
            if (($context["error_stock"] ?? null)) {
                // line 9
                yield "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa-solid fa-circle-exclamation\"></i> ";
                // line 10
                yield ($context["error_stock"] ?? null);
                yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
            }
            // line 14
            yield "  ";
            if (($context["success"] ?? null)) {
                // line 15
                yield "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa-solid fa-circle-check\"></i> ";
                // line 16
                yield ($context["success"] ?? null);
                yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
            }
            // line 20
            yield "  ";
            if (($context["attention"] ?? null)) {
                // line 21
                yield "    <div class=\"alert alert-info\">
      <i class=\"fa-solid fa-circle-info\"></i> ";
                // line 22
                yield ($context["attention"] ?? null);
                yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
            }
            // line 26
            yield "
  ";
            // line 30
            yield "
  <div id=\"output-cart\" class=\"bareeq-cart-table-wrap\">
    <div class=\"table-responsive bareeq-cart-table-responsive\">
      <table class=\"table bareeq-cart-table\">
        <thead>
          <tr>
            <th class=\"text-center bareeq-th-image\">";
            // line 36
            yield ($context["column_image"] ?? null);
            yield "</th>
            <th class=\"bareeq-th-name\">";
            // line 37
            yield ($context["column_name"] ?? null);
            yield "</th>
            <th class=\"bareeq-th-qty\">";
            // line 38
            yield ($context["column_quantity"] ?? null);
            yield "</th>
            <th class=\"text-end bareeq-th-price\">";
            // line 39
            yield ($context["column_price"] ?? null);
            yield "</th>
            <th class=\"text-end bareeq-th-total\">";
            // line 40
            yield ($context["column_total"] ?? null);
            yield "</th>
          </tr>
        </thead>

        <tbody>
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                yield "            <tr class=\"bareeq-row\">
              <td class=\"text-center bareeq-td-image\" data-label=\"";
                // line 47
                yield ($context["column_image"] ?? null);
                yield "\">
                ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48)) {
                    // line 49
                    yield "                  <a class=\"bareeq-thumb\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 49);
                    yield "\">
                    <img src=\"";
                    // line 50
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 50);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    yield "\" />
                  </a>
                ";
                }
                // line 53
                yield "              </td>

              <td class=\"bareeq-td-name text-wrap\" data-label=\"";
                // line 55
                yield ($context["column_name"] ?? null);
                yield "\">
                <div class=\"bareeq-name\">
                  <a class=\"bareeq-name-link\" href=\"";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
                yield "</a>
                  ";
                // line 58
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 58)) {
                    // line 59
                    yield "                    <span class=\"bareeq-oos\">***</span>
                  ";
                }
                // line 61
                yield "                </div>

                <ul class=\"bareeq-meta\">
                  <li><small>";
                // line 64
                yield ($context["text_model"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 64);
                yield "</small></li>

                  ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 67
                    yield "                    <li><small>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 67);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 67);
                    yield "</small></li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                yield "
                  ";
                // line 70
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 70)) {
                    // line 71
                    yield "                    <li><small>";
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 71);
                    yield "</small></li>
                  ";
                }
                // line 73
                yield "
                  ";
                // line 74
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 74)) {
                    // line 75
                    yield "                    <li><small>";
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 75);
                    yield "</small></li>
                  ";
                }
                // line 77
                yield "                </ul>
              </td>

              <td class=\"bareeq-td-qty\" data-label=\"";
                // line 80
                yield ($context["column_quantity"] ?? null);
                yield "\">
                <form method=\"post\" data-oc-target=\"#shopping-cart\">
                  <div class=\"bareeq-qtybox\">
                    <input
                      type=\"text\"
                      name=\"quantity\"
                      value=\"";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 86);
                yield "\"
                      class=\"form-control bareeq-qty-input";
                // line 87
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 87)) {
                    yield " is-invalid";
                }
                yield "\"
                      inputmode=\"numeric\"
                    />
                    <input type=\"hidden\" name=\"key\" value=\"";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 90);
                yield "\"/>

                    <div class=\"bareeq-actions\">
                      <button
                        type=\"submit\"
                        formaction=\"";
                // line 95
                yield ($context["edit"] ?? null);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        title=\"";
                // line 97
                yield ($context["button_update"] ?? null);
                yield "\"
                        class=\"btn btn-primary bareeq-btn-icon\"
                      >
                        <i class=\"fa-solid fa-rotate\"></i>
                      </button>

                      <a
                        href=\"";
                // line 104
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 104);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        title=\"";
                // line 106
                yield ($context["button_remove"] ?? null);
                yield "\"
                        class=\"btn btn-danger bareeq-btn-icon\"
                      >
                        <i class=\"fa-solid fa-circle-xmark\"></i>
                      </a>
                    </div>
                  </div>
                </form>

                ";
                // line 115
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 115)) {
                    // line 116
                    yield "                  <small class=\"invalid-feedback d-block\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 116);
                    yield "</small>
                ";
                }
                // line 118
                yield "              </td>

              <td class=\"text-end bareeq-td-price\" data-label=\"";
                // line 120
                yield ($context["column_price"] ?? null);
                yield "\">
                <x-currency code=\"";
                // line 121
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 121);
                yield "\"></x-currency>
              </td>

              <td class=\"text-end bareeq-td-total\" data-label=\"";
                // line 124
                yield ($context["column_total"] ?? null);
                yield "\">
                <x-currency code=\"";
                // line 125
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 125);
                yield "\"></x-currency>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "        </tbody>

        <tfoot id=\"checkout-total\" class=\"bareeq-tfoot\">
          ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 133
                yield "            <tr>
              <td colspan=\"4\" class=\"text-end bareeq-total-title\">
                <strong>";
                // line 135
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 135);
                yield "</strong>
              </td>
              <td class=\"text-end bareeq-total-value\">
                <strong><x-currency code=\"";
                // line 138
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 138);
                yield "\"></x-currency></strong>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "        </tfoot>
      </table>
    </div>
  </div>

  ";
            // line 147
            if (($context["modules"] ?? null)) {
                // line 148
                yield "    <h2 class=\"bareeq-next-title\">";
                yield ($context["text_next"] ?? null);
                yield "</h2>
    <p class=\"bareeq-next-sub\">";
                // line 149
                yield ($context["text_next_choice"] ?? null);
                yield "</p>

    ";
                // line 156
                yield "  ";
            }
            // line 157
            yield "
  <div class=\"bareeq-cart-footer row\">
    <div class=\"col\">
      <a href=\"";
            // line 160
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-light bareeq-btn-soft\">";
            yield ($context["button_shopping"] ?? null);
            yield "</a>
    </div>
    <div class=\"col text-end\">
      <a href=\"";
            // line 163
            yield ($context["checkout"] ?? null);
            yield "\" class=\"btn btn-primary bareeq-btn-main\">";
            yield ($context["button_checkout"] ?? null);
            yield "</a>
    </div>
  </div>

";
        } else {
            // line 168
            yield "  
  <p>";
            // line 169
            yield ($context["text_no_results"] ?? null);
            yield "</p>
  <div class=\"text-end\">
    <a href=\"";
            // line 171
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/cart_list.twig";
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
        return array (  423 => 171,  418 => 169,  415 => 168,  405 => 163,  397 => 160,  392 => 157,  389 => 156,  384 => 149,  379 => 148,  377 => 147,  370 => 142,  358 => 138,  352 => 135,  348 => 133,  344 => 132,  339 => 129,  327 => 125,  323 => 124,  315 => 121,  311 => 120,  307 => 118,  301 => 116,  299 => 115,  287 => 106,  282 => 104,  272 => 97,  267 => 95,  259 => 90,  251 => 87,  247 => 86,  238 => 80,  233 => 77,  225 => 75,  223 => 74,  220 => 73,  212 => 71,  210 => 70,  207 => 69,  196 => 67,  192 => 66,  185 => 64,  180 => 61,  176 => 59,  174 => 58,  168 => 57,  163 => 55,  159 => 53,  149 => 50,  144 => 49,  142 => 48,  138 => 47,  135 => 46,  131 => 45,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  99 => 30,  96 => 26,  89 => 22,  86 => 21,  83 => 20,  76 => 16,  73 => 15,  70 => 14,  63 => 10,  60 => 9,  57 => 8,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}
  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa-solid fa-circle-check\"></i> {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}
  {% if attention %}
    <div class=\"alert alert-info\">
      <i class=\"fa-solid fa-circle-info\"></i> {{ attention }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}

  {# <h1 class=\"bareeq-cart-title\">
    {{ heading_title }}{% if weight %} <span class=\"bareeq-cart-weight\">({{ weight }})</span>{% endif %}
  </h1> #}

  <div id=\"output-cart\" class=\"bareeq-cart-table-wrap\">
    <div class=\"table-responsive bareeq-cart-table-responsive\">
      <table class=\"table bareeq-cart-table\">
        <thead>
          <tr>
            <th class=\"text-center bareeq-th-image\">{{ column_image }}</th>
            <th class=\"bareeq-th-name\">{{ column_name }}</th>
            <th class=\"bareeq-th-qty\">{{ column_quantity }}</th>
            <th class=\"text-end bareeq-th-price\">{{ column_price }}</th>
            <th class=\"text-end bareeq-th-total\">{{ column_total }}</th>
          </tr>
        </thead>

        <tbody>
          {% for product in products %}
            <tr class=\"bareeq-row\">
              <td class=\"text-center bareeq-td-image\" data-label=\"{{ column_image }}\">
                {% if product.thumb %}
                  <a class=\"bareeq-thumb\" href=\"{{ product.href }}\">
                    <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" />
                  </a>
                {% endif %}
              </td>

              <td class=\"bareeq-td-name text-wrap\" data-label=\"{{ column_name }}\">
                <div class=\"bareeq-name\">
                  <a class=\"bareeq-name-link\" href=\"{{ product.href }}\">{{ product.name }}</a>
                  {% if not product.stock %}
                    <span class=\"bareeq-oos\">***</span>
                  {% endif %}
                </div>

                <ul class=\"bareeq-meta\">
                  <li><small>{{ text_model }}: {{ product.model }}</small></li>

                  {% for option in product.option %}
                    <li><small>{{ option.name }}: {{ option.value }}</small></li>
                  {% endfor %}

                  {% if product.subscription %}
                    <li><small>{{ text_subscription }}: {{ product.subscription }}</small></li>
                  {% endif %}

                  {% if product.reward %}
                    <li><small>{{ text_points }}: {{ product.reward }}</small></li>
                  {% endif %}
                </ul>
              </td>

              <td class=\"bareeq-td-qty\" data-label=\"{{ column_quantity }}\">
                <form method=\"post\" data-oc-target=\"#shopping-cart\">
                  <div class=\"bareeq-qtybox\">
                    <input
                      type=\"text\"
                      name=\"quantity\"
                      value=\"{{ product.quantity }}\"
                      class=\"form-control bareeq-qty-input{% if product.minimum %} is-invalid{% endif %}\"
                      inputmode=\"numeric\"
                    />
                    <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\"/>

                    <div class=\"bareeq-actions\">
                      <button
                        type=\"submit\"
                        formaction=\"{{ edit }}\"
                        data-bs-toggle=\"tooltip\"
                        title=\"{{ button_update }}\"
                        class=\"btn btn-primary bareeq-btn-icon\"
                      >
                        <i class=\"fa-solid fa-rotate\"></i>
                      </button>

                      <a
                        href=\"{{ product.remove }}\"
                        data-bs-toggle=\"tooltip\"
                        title=\"{{ button_remove }}\"
                        class=\"btn btn-danger bareeq-btn-icon\"
                      >
                        <i class=\"fa-solid fa-circle-xmark\"></i>
                      </a>
                    </div>
                  </div>
                </form>

                {% if product.minimum %}
                  <small class=\"invalid-feedback d-block\">{{ product.minimum }}</small>
                {% endif %}
              </td>

              <td class=\"text-end bareeq-td-price\" data-label=\"{{ column_price }}\">
                <x-currency code=\"{{ currency }}\" amount=\"{{ product.price }}\"></x-currency>
              </td>

              <td class=\"text-end bareeq-td-total\" data-label=\"{{ column_total }}\">
                <x-currency code=\"{{ currency }}\" amount=\"{{ product.total }}\"></x-currency>
              </td>
            </tr>
          {% endfor %}
        </tbody>

        <tfoot id=\"checkout-total\" class=\"bareeq-tfoot\">
          {% for total in totals %}
            <tr>
              <td colspan=\"4\" class=\"text-end bareeq-total-title\">
                <strong>{{ total.title }}</strong>
              </td>
              <td class=\"text-end bareeq-total-value\">
                <strong><x-currency code=\"{{ currency }}\" amount=\"{{ total.value }}\"></x-currency></strong>
              </td>
            </tr>
          {% endfor %}
        </tfoot>
      </table>
    </div>
  </div>

  {% if modules %}
    <h2 class=\"bareeq-next-title\">{{ text_next }}</h2>
    <p class=\"bareeq-next-sub\">{{ text_next_choice }}</p>

    {# <div id=\"accordion\" class=\"accordion bareeq-accordion\">
      {% for module in modules %}
        {{ module }}
      {% endfor %}
    </div> #}
  {% endif %}

  <div class=\"bareeq-cart-footer row\">
    <div class=\"col\">
      <a href=\"{{ continue }}\" class=\"btn btn-light bareeq-btn-soft\">{{ button_shopping }}</a>
    </div>
    <div class=\"col text-end\">
      <a href=\"{{ checkout }}\" class=\"btn btn-primary bareeq-btn-main\">{{ button_checkout }}</a>
    </div>
  </div>

{% else %}
  
  <p>{{ text_no_results }}</p>
  <div class=\"text-end\">
    <a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a>
  </div>
{% endif %}
", "catalog/view/template/checkout/cart_list.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\checkout\\cart_list.twig");
    }
}
