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

/* catalog/view/template/information/sitemap.twig */
class __TwigTemplate_0ba6d08801aeddb9bc9f40af40e8f14d extends Template
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

<div id=\"information-sitemap\" class=\"container bq-page\">
  <ul class=\"breadcrumb bq-breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "  </ul>

  <div class=\"row\">
    ";
        // line 11
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 14
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bq-card\">
        <div class=\"bq-card__header\">
          <h1 class=\"bq-title\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bq-subtitle\">تصفّحي أقسام المتجر والروابط المهمة بسرعة.</p>
        </div>

        <div class=\"row g-4 bq-sitemap\">
          <!-- Left: Categories -->
          <div class=\"col-lg-6\">
            <div class=\"bq-section\">
              <div class=\"bq-section__title\">
                <i class=\"fa-solid fa-layer-group\"></i>
                <span>";
        // line 28
        yield ((array_key_exists("text_category", $context)) ? (($context["text_category"] ?? null)) : ("الأقسام"));
        yield "</span>
              </div>

              <div class=\"bq-list\">
                <ul class=\"bq-tree\">
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 34
            yield "                    <li>
                      <a class=\"bq-link\" href=\"";
            // line 35
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 35);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 35);
            yield "</a>

                      ";
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 37)) {
                // line 38
                yield "                        <ul>
                          ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 40
                    yield "                            <li>
                              <a class=\"bq-link\" href=\"";
                    // line 41
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 41);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 41);
                    yield "</a>

                              ";
                    // line 43
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 43)) {
                        // line 44
                        yield "                                <ul>
                                  ";
                        // line 45
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 45));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 46
                            yield "                                    <li>
                                      <a class=\"bq-link\" href=\"";
                            // line 47
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 47);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 47);
                            yield "</a>
                                    </li>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 50
                        yield "                                </ul>
                              ";
                    }
                    // line 52
                    yield "                            </li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "                        </ul>
                      ";
            }
            // line 56
            yield "                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                </ul>
              </div>
            </div>
          </div>

          <!-- Right: Quick links -->
          <div class=\"col-lg-6\">
            <div class=\"bq-section\">
              <div class=\"bq-section__title\">
                <i class=\"fa-solid fa-link\"></i>
                <span>روابط سريعة</span>
              </div>

              <div class=\"row g-3\">
                <div class=\"col-12\">
                  <div class=\"bq-quick\">
                    <a class=\"bq-quick__item\" href=\"";
        // line 74
        yield ($context["special"] ?? null);
        yield "\">
                      <i class=\"fa-solid fa-tags\"></i>
                      <span>";
        // line 76
        yield ($context["text_special"] ?? null);
        yield "</span>
                    </a>
                    <a class=\"bq-quick__item\" href=\"";
        // line 78
        yield ($context["cart"] ?? null);
        yield "\">
                      <i class=\"fa-solid fa-cart-shopping\"></i>
                      <span>";
        // line 80
        yield ($context["text_cart"] ?? null);
        yield "</span>
                    </a>
                    <a class=\"bq-quick__item\" href=\"";
        // line 82
        yield ($context["checkout"] ?? null);
        yield "\">
                      <i class=\"fa-solid fa-credit-card\"></i>
                      <span>";
        // line 84
        yield ($context["text_checkout"] ?? null);
        yield "</span>
                    </a>
                    <a class=\"bq-quick__item\" href=\"";
        // line 86
        yield ($context["search"] ?? null);
        yield "\">
                      <i class=\"fa-solid fa-magnifying-glass\"></i>
                      <span>";
        // line 88
        yield ($context["text_search"] ?? null);
        yield "</span>
                    </a>
                  </div>
                </div>

                <div class=\"col-12\">
                  <div class=\"bq-panel\">
                    <div class=\"bq-panel__head\">
                      <i class=\"fa-solid fa-user\"></i>
                      <span>";
        // line 97
        yield ($context["text_account"] ?? null);
        yield "</span>
                    </div>
                    <div class=\"bq-panel__body\">
                      <a class=\"bq-link\" href=\"";
        // line 100
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a>
                      <a class=\"bq-link\" href=\"";
        // line 101
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a>
                      <a class=\"bq-link\" href=\"";
        // line 102
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a>
                      <a class=\"bq-link\" href=\"";
        // line 103
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a>
                      <a class=\"bq-link\" href=\"";
        // line 104
        yield ($context["history"] ?? null);
        yield "\">";
        yield ($context["text_history"] ?? null);
        yield "</a>
                      <a class=\"bq-link\" href=\"";
        // line 105
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a>
                    </div>
                  </div>
                </div>

                <div class=\"col-12\">
                  <div class=\"bq-panel\">
                    <div class=\"bq-panel__head\">
                      <i class=\"fa-solid fa-circle-info\"></i>
                      <span>";
        // line 114
        yield ($context["text_information"] ?? null);
        yield "</span>
                    </div>
                    <div class=\"bq-panel__body\">
                      ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 118
            yield "                        <a class=\"bq-link\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 118);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 118);
            yield "</a>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "                      <a class=\"bq-link\" href=\"";
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      ";
        // line 131
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 134
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>

";
        // line 138
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
        return "catalog/view/template/information/sitemap.twig";
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
        return array (  347 => 138,  340 => 134,  334 => 131,  317 => 120,  306 => 118,  302 => 117,  296 => 114,  282 => 105,  276 => 104,  270 => 103,  264 => 102,  258 => 101,  252 => 100,  246 => 97,  234 => 88,  229 => 86,  224 => 84,  219 => 82,  214 => 80,  209 => 78,  204 => 76,  199 => 74,  181 => 58,  174 => 56,  170 => 54,  163 => 52,  159 => 50,  148 => 47,  145 => 46,  141 => 45,  138 => 44,  136 => 43,  129 => 41,  126 => 40,  122 => 39,  119 => 38,  117 => 37,  110 => 35,  107 => 34,  103 => 33,  95 => 28,  82 => 18,  75 => 14,  69 => 11,  64 => 8,  53 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div id=\"information-sitemap\" class=\"container bq-page\">
  <ul class=\"breadcrumb bq-breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bq-card\">
        <div class=\"bq-card__header\">
          <h1 class=\"bq-title\">{{ heading_title }}</h1>
          <p class=\"bq-subtitle\">تصفّحي أقسام المتجر والروابط المهمة بسرعة.</p>
        </div>

        <div class=\"row g-4 bq-sitemap\">
          <!-- Left: Categories -->
          <div class=\"col-lg-6\">
            <div class=\"bq-section\">
              <div class=\"bq-section__title\">
                <i class=\"fa-solid fa-layer-group\"></i>
                <span>{{ text_category is defined ? text_category : 'الأقسام' }}</span>
              </div>

              <div class=\"bq-list\">
                <ul class=\"bq-tree\">
                  {% for category_1 in categories %}
                    <li>
                      <a class=\"bq-link\" href=\"{{ category_1.href }}\">{{ category_1.name }}</a>

                      {% if category_1.children %}
                        <ul>
                          {% for category_2 in category_1.children %}
                            <li>
                              <a class=\"bq-link\" href=\"{{ category_2.href }}\">{{ category_2.name }}</a>

                              {% if category_2.children %}
                                <ul>
                                  {% for category_3 in category_2.children %}
                                    <li>
                                      <a class=\"bq-link\" href=\"{{ category_3.href }}\">{{ category_3.name }}</a>
                                    </li>
                                  {% endfor %}
                                </ul>
                              {% endif %}
                            </li>
                          {% endfor %}
                        </ul>
                      {% endif %}
                    </li>
                  {% endfor %}
                </ul>
              </div>
            </div>
          </div>

          <!-- Right: Quick links -->
          <div class=\"col-lg-6\">
            <div class=\"bq-section\">
              <div class=\"bq-section__title\">
                <i class=\"fa-solid fa-link\"></i>
                <span>روابط سريعة</span>
              </div>

              <div class=\"row g-3\">
                <div class=\"col-12\">
                  <div class=\"bq-quick\">
                    <a class=\"bq-quick__item\" href=\"{{ special }}\">
                      <i class=\"fa-solid fa-tags\"></i>
                      <span>{{ text_special }}</span>
                    </a>
                    <a class=\"bq-quick__item\" href=\"{{ cart }}\">
                      <i class=\"fa-solid fa-cart-shopping\"></i>
                      <span>{{ text_cart }}</span>
                    </a>
                    <a class=\"bq-quick__item\" href=\"{{ checkout }}\">
                      <i class=\"fa-solid fa-credit-card\"></i>
                      <span>{{ text_checkout }}</span>
                    </a>
                    <a class=\"bq-quick__item\" href=\"{{ search }}\">
                      <i class=\"fa-solid fa-magnifying-glass\"></i>
                      <span>{{ text_search }}</span>
                    </a>
                  </div>
                </div>

                <div class=\"col-12\">
                  <div class=\"bq-panel\">
                    <div class=\"bq-panel__head\">
                      <i class=\"fa-solid fa-user\"></i>
                      <span>{{ text_account }}</span>
                    </div>
                    <div class=\"bq-panel__body\">
                      <a class=\"bq-link\" href=\"{{ account }}\">{{ text_account }}</a>
                      <a class=\"bq-link\" href=\"{{ edit }}\">{{ text_edit }}</a>
                      <a class=\"bq-link\" href=\"{{ password }}\">{{ text_password }}</a>
                      <a class=\"bq-link\" href=\"{{ address }}\">{{ text_address }}</a>
                      <a class=\"bq-link\" href=\"{{ history }}\">{{ text_history }}</a>
                      <a class=\"bq-link\" href=\"{{ download }}\">{{ text_download }}</a>
                    </div>
                  </div>
                </div>

                <div class=\"col-12\">
                  <div class=\"bq-panel\">
                    <div class=\"bq-panel__head\">
                      <i class=\"fa-solid fa-circle-info\"></i>
                      <span>{{ text_information }}</span>
                    </div>
                    <div class=\"bq-panel__body\">
                      {% for information in informations %}
                        <a class=\"bq-link\" href=\"{{ information.href }}\">{{ information.title }}</a>
                      {% endfor %}
                      <a class=\"bq-link\" href=\"{{ contact }}\">{{ text_contact }}</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      {{ content_bottom }}
    </div>

    {{ column_right }}
  </div>
</div>

{{ footer }}
", "catalog/view/template/information/sitemap.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\information\\sitemap.twig");
    }
}
