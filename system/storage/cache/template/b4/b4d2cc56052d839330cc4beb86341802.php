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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_b52bddead56bd3e9f26e280be0f4f13e extends Template
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


<div id=\"checkout-cart\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "  </ul>

  <div class=\"row\">
    ";
        // line 12
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 15
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bareeq-card bareeq-cart-card\">
        <div class=\"bareeq-card__head\">
          <div>
            <h1 class=\"bareeq-card__title\">";
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
            ";
        // line 21
        if (($context["weight"] ?? null)) {
            // line 22
            yield "              <div class=\"bareeq-card__sub\">";
            yield ($context["weight"] ?? null);
            yield "</div>
            ";
        }
        // line 24
        yield "          </div>
        </div>

        <div id=\"shopping-cart\" class=\"bareeq-cart\">
          ";
        // line 28
        yield ($context["list"] ?? null);
        yield "
        </div>
      </div>

      ";
        // line 32
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 35
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>

<script type=\"text/javascript\">
\$('#shopping-cart').on('submit', '#output-cart form', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 76
        yield ($context["language"] ?? null);
        yield "', {}, function() {
                    \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 77
        yield ($context["language"] ?? null);
        yield "');
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});


\$('#shopping-cart').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 116
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').observe(function(e) {
    \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 126
        yield ($context["language"] ?? null);
        yield "');
});

\$('#cart').on('submit', 'form', function(e) {
    window.setTimeout(function() {
        \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 131
        yield ($context["language"] ?? null);
        yield "');
    }, 3000);
});
</script>
";
        // line 135
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
        return "catalog/view/template/checkout/cart.twig";
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
        return array (  233 => 135,  226 => 131,  218 => 126,  205 => 116,  163 => 77,  159 => 76,  115 => 35,  109 => 32,  102 => 28,  96 => 24,  90 => 22,  88 => 21,  84 => 20,  76 => 15,  70 => 12,  65 => 9,  54 => 7,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}


<div id=\"checkout-cart\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareeq-card bareeq-cart-card\">
        <div class=\"bareeq-card__head\">
          <div>
            <h1 class=\"bareeq-card__title\">{{ heading_title }}</h1>
            {% if weight %}
              <div class=\"bareeq-card__sub\">{{ weight }}</div>
            {% endif %}
          </div>
        </div>

        <div id=\"shopping-cart\" class=\"bareeq-cart\">
          {{ list }}
        </div>
      </div>

      {{ content_bottom }}
    </div>

    {{ column_right }}
  </div>
</div>

<script type=\"text/javascript\">
\$('#shopping-cart').on('submit', '#output-cart form', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}', {}, function() {
                    \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});


\$('#shopping-cart').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').observe(function(e) {
    \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
});

\$('#cart').on('submit', 'form', function(e) {
    window.setTimeout(function() {
        \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}');
    }, 3000);
});
</script>
{{ footer }}
", "catalog/view/template/checkout/cart.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\checkout\\cart.twig");
    }
}
