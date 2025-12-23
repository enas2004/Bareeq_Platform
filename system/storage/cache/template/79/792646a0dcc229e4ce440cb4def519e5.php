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

/* extension/opencart/catalog/view/template/module/category.twig */
class __TwigTemplate_f16fcbd9ba05b00b5dd5c51e46d38fd7 extends Template
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
        yield "<div class=\"list-group mb-3\"> ";
        // line 2
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            yield " ";
            // line 3
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                yield " ";
                // line 4
                yield "      <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 4);
                yield "\" class=\"list-group-item active\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4);
                yield "</a> ";
                // line 5
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                    yield "  ";
                    // line 6
                    yield "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        yield "  ";
                        // line 7
                        yield "          ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 7) == ($context["child_id"] ?? null))) {
                            yield "   ";
                            // line 8
                            yield "            <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 8);
                            yield "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 8);
                            yield "</a>   ";
                            // line 9
                            yield "          ";
                        } else {
                            yield "   ";
                            // line 10
                            yield "            <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 10);
                            yield "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 10);
                            yield "</a>  ";
                            // line 11
                            yield "          ";
                        }
                        yield "  ";
                        // line 12
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield "   ";
                    // line 13
                    yield "      ";
                }
                yield "      ";
                // line 14
                yield "    ";
            } else {
                yield " <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                yield "\" class=\"list-group-item\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                yield "</a>  ";
                // line 15
                yield "    ";
            }
            yield "  ";
            // line 16
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "   ";
        // line 17
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/category.twig";
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
        return array (  124 => 17,  117 => 16,  113 => 15,  105 => 14,  101 => 13,  94 => 12,  90 => 11,  84 => 10,  80 => 9,  74 => 8,  70 => 7,  64 => 6,  60 => 5,  54 => 4,  50 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"list-group mb-3\"> {# عرض قائمة الفئات مع إبراز الفئة الحالية والفرعية الحالية #}
  {% for category in categories %} {# تكرار عبر الفئات الرئيسية #}
    {% if category.category_id == category_id %} {# إبراز الفئة الحالية #}
      <a href=\"{{ category.href }}\" class=\"list-group-item active\">{{ category.name }}</a> {# رابط الفئة الحالية مع تمييزه #}
      {% if category.children %}  {# إذا كانت هناك فئات فرعية #}
        {% for child in category.children %}  {# تكرار عبر الفئات الفرعية #}
          {% if child.category_id == child_id %}   {# إبراز الفئة الفرعية الحالية #}
            <a href=\"{{ child.href }}\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>   {# رابط الفئة الفرعية الحالية مع تمييزه #}
          {% else %}   {# عرض الفئة الفرعية العادية #}
            <a href=\"{{ child.href }}\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>  {# رابط الفئة الفرعية العادية #}
          {% endif %}  {# نهاية شرط الفئة الفرعية الحالية #}
        {% endfor %}   {# نهاية تكرار الفئات الفرعية #}
      {% endif %}      {# نهاية شرط وجود فئات فرعية #}
    {% else %} <a href=\"{{ category.href }}\" class=\"list-group-item\">{{ category.name }}</a>  {# رابط الفئة العادية #}
    {% endif %}  {# نهاية شرط الفئة الحالية #}
  {% endfor %}   {# نهاية تكرار الفئات الرئيسية #}
</div>
", "extension/opencart/catalog/view/template/module/category.twig", "C:\\xampp\\htdocs\\bareeq_platform\\extension\\opencart\\catalog\\view\\template\\module\\category.twig");
    }
}
