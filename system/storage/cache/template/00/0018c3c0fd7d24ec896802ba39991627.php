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

/* extension/opencart/admin/view/template/report/marketing_list.twig */
class __TwigTemplate_02a0766472cf9ea9b4263bf4a8dc69ab extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-start\">";
        // line 5
        yield ($context["column_campaign"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 6
        yield ($context["column_code"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 7
        yield ($context["column_clicks"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 8
        yield ($context["column_orders"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 9
        yield ($context["column_total"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["marketings"] ?? null)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["marketings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["marketing"]) {
                // line 15
                yield "          <tr>
            <td class=\"text-start\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "campaign", [], "any", false, false, false, 16);
                yield "</td>
            <td class=\"text-start\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "code", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-end\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "clicks", [], "any", false, false, false, 18);
                yield "</td>
            <td class=\"text-end\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "orders", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-end\"><x-currency code=\"";
                // line 20
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "total", [], "any", false, false, false, 20);
                yield "\"></x-currency></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['marketing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "      ";
        } else {
            // line 24
            yield "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 25
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 28
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 32
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 33
        yield ($context["results"] ?? null);
        yield "</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/report/marketing_list.twig";
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
        return array (  130 => 33,  126 => 32,  120 => 28,  114 => 25,  111 => 24,  108 => 23,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  78 => 15,  73 => 14,  71 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-start\">{{ column_campaign }}</th>
        <th class=\"text-start\">{{ column_code }}</th>
        <th class=\"text-end\">{{ column_clicks }}</th>
        <th class=\"text-end\">{{ column_orders }}</th>
        <th class=\"text-end\">{{ column_total }}</th>
      </tr>
    </thead>
    <tbody>
      {% if marketings %}
        {% for marketing in marketings %}
          <tr>
            <td class=\"text-start\">{{ marketing.campaign }}</td>
            <td class=\"text-start\">{{ marketing.code }}</td>
            <td class=\"text-end\">{{ marketing.clicks }}</td>
            <td class=\"text-end\">{{ marketing.orders }}</td>
            <td class=\"text-end\"><x-currency code=\"{{ currency }}\" amount=\"{{ marketing.total }}\"></x-currency></td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"5\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>", "extension/opencart/admin/view/template/report/marketing_list.twig", "C:\\xampp\\htdocs\\bareeq_platform\\extension\\opencart\\admin\\view\\template\\report\\marketing_list.twig");
    }
}
