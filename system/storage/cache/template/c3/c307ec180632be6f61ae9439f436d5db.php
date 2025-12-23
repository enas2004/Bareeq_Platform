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

/* admin/view/template/catalog/manufacturer.twig */
class __TwigTemplate_b49efc2a3186a2158292482e36a0467b extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
      <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-manufacturer').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
\t\t\t<div class=\"float-end\"><a href=\"";
        // line 6
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
\t\t\t\t<button type=\"submit\" form=\"form-manufacturer\" formaction=\"";
        // line 7
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
  <div class=\"row\">
    <div id=\"filter-manufacturer\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
      <div class=\"card filter-sticky\">
        <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 21
        yield ($context["text_filter"] ?? null);
        yield "</div>
        <div class=\"card-body\">
          <form id=\"form-filter\">
          <div class=\"mb-3\">
            <label class=\"form-label\">";
        // line 25
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"filter_name\" value=\"";
        // line 26
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-store-id\" class=\"form-label\">";
        // line 30
        yield ($context["entry_store"] ?? null);
        yield "</label>
            <select name=\"filter_store_id\" id=\"input-store-id\" class=\"form-select\">
              <option value=\"*\"></option>
              ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 34
            yield "               <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 34);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 34) == ($context["filter_store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 34);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "            </select>
          </div>
          <div class=\"text-end\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i>";
        // line 39
        yield ($context["button_filter"] ?? null);
        yield "</button>
            <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 40
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class=\"col-lg-9 col-md-12\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 48
        yield ($context["text_list"] ?? null);
        yield "</div>
\t\t\t<div id=\"list\" class=\"card-body\">";
        // line 49
        yield ($context["list"] ?? null);
        yield "</div>
\t\t</div>
\t</div>
  </div>
 </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#button-filter').on('click', function () {
    url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_store_id = \$('#input-store-id').val();

    if (filter_store_id !== '') {
        url += '&filter_store_id=' + filter_store_id;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/manufacturer&user_token=";
        // line 77
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#list').load('index.php?route=catalog/manufacturer.list&user_token=";
        // line 79
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-name').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 85
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-name').val(item['label']);
    }
});
//--></script>
";
        // line 102
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
        return "admin/view/template/catalog/manufacturer.twig";
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
        return array (  232 => 102,  212 => 85,  203 => 79,  198 => 77,  167 => 49,  163 => 48,  152 => 40,  148 => 39,  143 => 36,  128 => 34,  124 => 33,  118 => 30,  109 => 26,  105 => 25,  98 => 21,  89 => 14,  78 => 12,  74 => 11,  69 => 9,  60 => 7,  54 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
      <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-manufacturer').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
\t\t\t<div class=\"float-end\"><a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
\t\t\t\t<button type=\"submit\" form=\"form-manufacturer\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
\t\t\t</div>
\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
  <div class=\"row\">
    <div id=\"filter-manufacturer\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
      <div class=\"card filter-sticky\">
        <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
        <div class=\"card-body\">
          <form id=\"form-filter\">
          <div class=\"mb-3\">
            <label class=\"form-label\">{{ entry_name }}</label>
            <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-store-id\" class=\"form-label\">{{ entry_store }}</label>
            <select name=\"filter_store_id\" id=\"input-store-id\" class=\"form-select\">
              <option value=\"*\"></option>
              {% for store in stores %}
               <option value=\"{{ store.store_id }}\"{% if store.store_id == filter_store_id %} selected{% endif %}>{{ store.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"text-end\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i>{{ button_filter }}</button>
            <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class=\"col-lg-9 col-md-12\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
\t\t\t<div id=\"list\" class=\"card-body\">{{ list }}</div>
\t\t</div>
\t</div>
  </div>
 </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#button-filter').on('click', function () {
    url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_store_id = \$('#input-store-id').val();

    if (filter_store_id !== '') {
        url += '&filter_store_id=' + filter_store_id;
    }

    window.history.pushState({}, null, 'index.php?route=catalog/manufacturer&user_token={{ user_token }}' + url);

    \$('#list').load('index.php?route=catalog/manufacturer.list&user_token={{ user_token }}' + url);
});

\$('#input-name').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-name').val(item['label']);
    }
});
//--></script>
{{ footer }}
", "admin/view/template/catalog/manufacturer.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\catalog\\manufacturer.twig");
    }
}
