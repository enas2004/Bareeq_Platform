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

/* admin/view/template/localisation/currency_list.twig */
class __TwigTemplate_972cd9d6baeab1ad256c438ae34ef833 extends Template
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
        yield "<form id=\"form-currency\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#list\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_title"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "title")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_title"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_code"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "code")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_code"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 9
        yield ($context["sort_value"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "value")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_value"] ?? null);
        yield "</a></th>
          <th class=\"text-center\"><a href=\"";
        // line 10
        yield ($context["sort_status"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "status")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_status"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 11
        yield ($context["sort_date_modified"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "date_modified")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_modified"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 12
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["currencies"] ?? null)) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 18
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 18)) {
                    yield " class=\"table-disabled\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 19);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 20);
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 20) == ($context["code"] ?? null))) {
                    yield " <strong>(";
                    yield ($context["text_default"] ?? null);
                    yield ")</strong>";
                }
                yield "</td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 21);
                yield "</td>
              <td class=\"text-end\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "value", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-center\">";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                  <span class=\"badge bg-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</span>
                ";
                } else {
                    // line 26
                    yield "                  <span class=\"badge bg-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</span>
                ";
                }
                // line 27
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "date_modified", [], "any", false, false, false, 28);
                yield "</td>
              <td class=\"text-end text-nowrap\"><a href=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "edit", [], "any", false, false, false, 29);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 29)) {
                    yield "btn btn-secondary";
                } else {
                    yield "btn btn-primary";
                }
                yield "\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "        ";
        } else {
            // line 33
            yield "          <tr>
            <td class=\"text-center\" colspan=\"6\">";
            // line 34
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 37
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 41
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 42
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/localisation/currency_list.twig";
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
        return array (  214 => 42,  210 => 41,  204 => 37,  198 => 34,  195 => 33,  192 => 32,  175 => 29,  171 => 28,  168 => 27,  162 => 26,  156 => 24,  154 => 23,  150 => 22,  146 => 21,  137 => 20,  133 => 19,  126 => 18,  121 => 17,  119 => 16,  112 => 12,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-currency\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#list\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_title }}\"{% if sort == 'title' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_title }}</a></th>
          <th><a href=\"{{ sort_code }}\"{% if sort == 'code' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_code }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_value }}\"{% if sort == 'value' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_value }}</a></th>
          <th class=\"text-center\"><a href=\"{{ sort_status }}\"{% if sort == 'status' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_status }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_modified }}\"{% if sort == 'date_modified' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_modified }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if currencies %}
          {% for currency in currencies %}
            <tr{% if not currency.status %} class=\"table-disabled\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ currency.currency_id }}\" class=\"form-check-input\"/></td>
              <td>{{ currency.title }}{% if currency.code == code %} <strong>({{ text_default }})</strong>{% endif %}</td>
              <td>{{ currency.code }}</td>
              <td class=\"text-end\">{{ currency.value }}</td>
              <td class=\"text-center\">{% if currency.status %}
                  <span class=\"badge bg-success\">{{ text_enabled }}</span>
                {% else %}
                  <span class=\"badge bg-danger\">{{ text_disabled }}</span>
                {% endif %}</td>
              <td class=\"d-none d-lg-table-cell\">{{ currency.date_modified }}</td>
              <td class=\"text-end text-nowrap\"><a href=\"{{ currency.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"{% if not currency.status %}btn btn-secondary{% else %}btn btn-primary{% endif %}\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/localisation/currency_list.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\localisation\\currency_list.twig");
    }
}
