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

/* admin/view/template/common/developer.twig */
class __TwigTemplate_03ee2f1c07000cc58d4337d3bc99f859 extends Template
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
        yield "<div id=\"modal-developer\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> ";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>";
        // line 12
        yield ($context["column_component"] ?? null);
        yield "</th>
              <th class=\"w-25\">";
        // line 13
        yield ($context["entry_cache"] ?? null);
        yield "</th>
              <th class=\"text-end\" style=\"width: 1px;\">";
        // line 14
        yield ($context["column_action"] ?? null);
        yield "</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
        // line 19
        yield ($context["text_cache"] ?? null);
        yield "</td>
              <td></td>
              <td class=\"text-end\"><button type=\"button\" value=\"cache\" data-bs-toggle=\"tooltip\" title=\"";
        // line 21
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
            <tr>
              <td>";
        // line 24
        yield ($context["text_theme"] ?? null);
        yield "</td>
              <td></td>
              <td class=\"text-end\"><button type=\"button\" value=\"theme\" data-bs-toggle=\"tooltip\" title=\"";
        // line 26
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
            <tr>
              <td>";
        // line 29
        yield ($context["text_sass"] ?? null);
        yield "</td>
              <td><x-switch name=\"developer_sass\" value=\"1\" checked=\"";
        // line 30
        yield ($context["developer_sass"] ?? null);
        yield "\" input-id=\"input-developer-sass\" input-class=\"form-switch form-switch-lg\"></x-switch></td>
              <td class=\"text-end\"><button type=\"button\" value=\"sass\" data-bs-toggle=\"tooltip\" title=\"";
        // line 31
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
            <tr>
              <td>";
        // line 34
        yield ($context["text_vendor"] ?? null);
        yield "</td>
              <td></td>
              <td class=\"text-end\"><button type=\"button\" value=\"vendor\" data-bs-toggle=\"tooltip\" title=\"";
        // line 36
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_sass\\']').on('change', function() {
    \$.ajax({
        url: 'index.php?route=common/developer.edit&user_token=";
        // line 47
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'post',
        data: \$('input[name=\\'developer_sass\\']:checked'),
        dataType: 'json',
        beforeSend: function() {
            \$('input[name=\\'developer_sass\\']').prop('disabled', true);
        },
        complete: function() {
            \$('input[name=\\'developer_sass\\']').prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-developer table button').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/developer.' + \$(element).attr('value') + '&user_token=";
        // line 78
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/developer.twig";
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
        return array (  163 => 78,  129 => 47,  115 => 36,  110 => 34,  104 => 31,  100 => 30,  96 => 29,  90 => 26,  85 => 24,  79 => 21,  74 => 19,  66 => 14,  62 => 13,  58 => 12,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"modal-developer\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> {{ heading_title }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>{{ column_component }}</th>
              <th class=\"w-25\">{{ entry_cache }}</th>
              <th class=\"text-end\" style=\"width: 1px;\">{{ column_action }}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ text_cache }}</td>
              <td></td>
              <td class=\"text-end\"><button type=\"button\" value=\"cache\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
            <tr>
              <td>{{ text_theme }}</td>
              <td></td>
              <td class=\"text-end\"><button type=\"button\" value=\"theme\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
            <tr>
              <td>{{ text_sass }}</td>
              <td><x-switch name=\"developer_sass\" value=\"1\" checked=\"{{ developer_sass }}\" input-id=\"input-developer-sass\" input-class=\"form-switch form-switch-lg\"></x-switch></td>
              <td class=\"text-end\"><button type=\"button\" value=\"sass\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
            <tr>
              <td>{{ text_vendor }}</td>
              <td></td>
              <td class=\"text-end\"><button type=\"button\" value=\"vendor\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_sass\\']').on('change', function() {
    \$.ajax({
        url: 'index.php?route=common/developer.edit&user_token={{ user_token }}',
        type: 'post',
        data: \$('input[name=\\'developer_sass\\']:checked'),
        dataType: 'json',
        beforeSend: function() {
            \$('input[name=\\'developer_sass\\']').prop('disabled', true);
        },
        complete: function() {
            \$('input[name=\\'developer_sass\\']').prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-developer table button').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/developer.' + \$(element).attr('value') + '&user_token={{ user_token }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
", "admin/view/template/common/developer.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\common\\developer.twig");
    }
}
