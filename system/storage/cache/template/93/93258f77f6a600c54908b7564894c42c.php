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

/* catalog/view/template/common/content_bottom.twig */
class __TwigTemplate_e049079fa6727d78d7274c2f0f70f205 extends Template
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
        yield "
";
        // line 2
        if (($context["stores"] ?? null)) {
            // line 3
            yield "   <h2 class=\"stores-heading\">المتاجر</h2>
  <div class=\"stores row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4\">
   
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 7
                yield "      <div class=\"col mb-3\">
        <div class=\"store-item card h-100 text-center\">

          <a href=\"";
                // line 10
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "url", [], "any", false, false, false, 10);
                yield "\" target=\"_blank\" class=\"text-decoration-none\">

            ";
                // line 12
                if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "thumb", [], "any", false, false, false, 12)) {
                    // line 13
                    yield "              <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "thumb", [], "any", false, false, false, 13);
                    yield "\" 
                   alt=\"";
                    // line 14
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 14);
                    yield "\" 
                   class=\"card-img-top img-fluid\"/>
            ";
                }
                // line 17
                yield "
            <div class=\"card-body\">
              <h3 class=\"h6 card-title\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 19);
                yield "</h3>
            </div>

          </a>

        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "
  </div>
";
        }
        // line 30
        yield "
";
        // line 32
        yield "<section class=\"newsletter-section\">
  <div class=\"newsletter-container\">

    <div class=\"newsletter-icon-wrap\">
      <i class=\"fa-regular fa-envelope\"></i>
    </div>

    <h2 class=\"newsletter-title\">اشترك في النشرة الإخبارية</h2>

    <p class=\"newsletter-subtitle\">
      كن أول من يعرف عن المنتجات الجديدة والعروض الحصرية في عالمنا الافتراضي.
    </p>

    <form action=\"";
        // line 45
        yield ((array_key_exists("newsletter_action", $context)) ? (Twig\Extension\CoreExtension::default(($context["newsletter_action"] ?? null), "#")) : ("#"));
        yield "\" method=\"post\" class=\"newsletter-form\">
      <div class=\"newsletter-input-wrap\">
        <input type=\"email\"
               name=\"email\"
               class=\"newsletter-input\"
               placeholder=\"أدخل بريدك الإلكتروني\"
               required>
      </div>

      <button type=\"submit\" class=\"newsletter-btn\">
        <i class=\"fa-regular fa-paper-plane\"></i>
        <span>اشترك الآن</span>
      </button>
    </form>

    <p class=\"newsletter-note\">
      لن نشارك بريدك الإلكتروني مع أي جهة خارجية.
    </p>

  </div>
</section>

<script>
//   document.addEventListener('DOMContentLoaded', function () {
//     // نحدد هل الصفحة هي الهوم ولا لا
//     var isHome =
//       window.location.pathname === '/' ||                       // أغلب المواقع
//       window.location.search.indexOf('route=common/home') !== -1; // نمط أوبن كارت

//     // لو مش هوم نحذف أقسام المتاجر + النشرة
//     if (!isHome) {
//       var selectors = ['.stores-section', '.stores', '.newsletter-section'];

//       selectors.forEach(function (sel) {
//         document.querySelectorAll(sel).forEach(function (el) {
//           el.remove(); // يشيل العنصر بالكامل من الصفحة
//         });
//       });
//     }
//   });
// </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var isHome =
      window.location.pathname === '/' ||
      window.location.search.indexOf('route=common/home') !== -1;

    if (!isHome) {
      var selectors = [
        '.stores-heading',        // العنوان \"المتاجر\"
        '.stores-section',        // لو عندك ديف يغلف المتاجر
        '.stores',                // الشبكة نفسها
        '.newsletter-section'     // النشرة الإخبارية
      ];

      selectors.forEach(function (sel) {
        document.querySelectorAll(sel).forEach(function (el) {
          el.remove();
        });
      });
    }
  });
</script>




";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/content_bottom.twig";
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
        return array (  120 => 45,  105 => 32,  102 => 30,  97 => 27,  83 => 19,  79 => 17,  73 => 14,  68 => 13,  66 => 12,  61 => 10,  56 => 7,  52 => 6,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% if stores %}
   <h2 class=\"stores-heading\">المتاجر</h2>
  <div class=\"stores row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4\">
   
    {% for store in stores %}
      <div class=\"col mb-3\">
        <div class=\"store-item card h-100 text-center\">

          <a href=\"{{ store.url }}\" target=\"_blank\" class=\"text-decoration-none\">

            {% if store.thumb %}
              <img src=\"{{ store.thumb }}\" 
                   alt=\"{{ store.name }}\" 
                   class=\"card-img-top img-fluid\"/>
            {% endif %}

            <div class=\"card-body\">
              <h3 class=\"h6 card-title\">{{ store.name }}</h3>
            </div>

          </a>

        </div>
      </div>
    {% endfor %}

  </div>
{% endif %}

{# ===== قسم النشرة الإخبارية ===== #}
<section class=\"newsletter-section\">
  <div class=\"newsletter-container\">

    <div class=\"newsletter-icon-wrap\">
      <i class=\"fa-regular fa-envelope\"></i>
    </div>

    <h2 class=\"newsletter-title\">اشترك في النشرة الإخبارية</h2>

    <p class=\"newsletter-subtitle\">
      كن أول من يعرف عن المنتجات الجديدة والعروض الحصرية في عالمنا الافتراضي.
    </p>

    <form action=\"{{ newsletter_action|default('#') }}\" method=\"post\" class=\"newsletter-form\">
      <div class=\"newsletter-input-wrap\">
        <input type=\"email\"
               name=\"email\"
               class=\"newsletter-input\"
               placeholder=\"أدخل بريدك الإلكتروني\"
               required>
      </div>

      <button type=\"submit\" class=\"newsletter-btn\">
        <i class=\"fa-regular fa-paper-plane\"></i>
        <span>اشترك الآن</span>
      </button>
    </form>

    <p class=\"newsletter-note\">
      لن نشارك بريدك الإلكتروني مع أي جهة خارجية.
    </p>

  </div>
</section>

<script>
//   document.addEventListener('DOMContentLoaded', function () {
//     // نحدد هل الصفحة هي الهوم ولا لا
//     var isHome =
//       window.location.pathname === '/' ||                       // أغلب المواقع
//       window.location.search.indexOf('route=common/home') !== -1; // نمط أوبن كارت

//     // لو مش هوم نحذف أقسام المتاجر + النشرة
//     if (!isHome) {
//       var selectors = ['.stores-section', '.stores', '.newsletter-section'];

//       selectors.forEach(function (sel) {
//         document.querySelectorAll(sel).forEach(function (el) {
//           el.remove(); // يشيل العنصر بالكامل من الصفحة
//         });
//       });
//     }
//   });
// </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var isHome =
      window.location.pathname === '/' ||
      window.location.search.indexOf('route=common/home') !== -1;

    if (!isHome) {
      var selectors = [
        '.stores-heading',        // العنوان \"المتاجر\"
        '.stores-section',        // لو عندك ديف يغلف المتاجر
        '.stores',                // الشبكة نفسها
        '.newsletter-section'     // النشرة الإخبارية
      ];

      selectors.forEach(function (sel) {
        document.querySelectorAll(sel).forEach(function (el) {
          el.remove();
        });
      });
    }
  });
</script>




", "catalog/view/template/common/content_bottom.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\common\\content_bottom.twig");
    }
}
