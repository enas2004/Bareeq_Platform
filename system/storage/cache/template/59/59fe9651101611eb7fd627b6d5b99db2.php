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

/* extension/opencart/catalog/view/template/module/banner.twig */
class __TwigTemplate_dde6b699c038deddce54b6be0a1deb64 extends Template
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
        yield "<div id=\"carousel-banner-";
        yield ($context["module"] ?? null);
        yield "\" class=\"custom-banner-box\">
  ";
        // line 2
        if (($context["banners"] ?? null)) {
            // line 3
            yield "    ";
            $context["banner"] = (($_v0 = ($context["banners"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
            // line 4
            yield "
    <div class=\"banner-content row align-items-center\">
      <div class=\"col-lg-6 col-md-12 banner-image text-center\">
        <img src=\"";
            // line 7
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 7);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 7);
            yield "\" class=\"img-fluid\"/>
      </div>

      <div class=\"col-lg-6 col-md-12 banner-text text-center text-lg-start\">
        <h2 class=\"banner-title\">";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 11);
            yield "</h2>

        ";
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "description", [], "any", false, false, false, 13)) {
                // line 14
                yield "          <p class=\"banner-desc\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "description", [], "any", false, false, false, 14);
                yield "</p>
        ";
            } else {
                // line 16
                yield "          <p class=\"banner-desc\">استكشف عالماً جديداً من التسوق الإلكتروني في الواقع الافتراضي. اختبر تجربة تسوق فريدة تجمع بين الابتكار والخيال.</p>
        ";
            }
            // line 18
            yield "
        ";
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 19)) {
                // line 20
                yield "          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 20);
                yield "\" class=\"banner-btn\">ابدأ التسوق الآن</a>
        ";
            }
            // line 22
            yield "
           <a href=\"#\" class=\"banner-btn-outline\">تعرف علينا</a>
      </div>

    </div>
  </div>
  ";
        }
        // line 29
        yield "</div>

<!-- المميزات - لماذا تختار بريق؟ -->
<section class=\"features-section\" id=\"features\">
  <div class=\"features-container\">

    <!-- الشارة الصغيرة -->
    <div class=\"features-badge\">المميزات</div>

    <!-- العنوان والوصف -->
    <h2 class=\"features-title\">لماذا تختار بريق؟</h2>
    <p class=\"features-subtitle\">
      نقدم لك تجربة تسوق فريدة تجمع بين التكنولوجيا المتقدمة والراحة.
    </p>

    <!-- كروت المميزات -->
    <div class=\"features-grid\">

      <!-- كرت 1 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-vr-cardboard\"></i>
        </div>
        <h3 class=\"feature-title\">تجربة ثلاثية الأبعاد</h3>
        <p class=\"feature-text\">
          استكشف المنتجات في بيئة ثلاثية الأبعاد تفاعلية.
        </p>
      </article>

      <!-- كرت 2 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-bolt\"></i>
        </div>
        <h3 class=\"feature-title\">تسليم فوري</h3>
        <p class=\"feature-text\">
          احصل على منتجاتك الرقمية فوراً بعد الشراء.
        </p>
      </article>

      <!-- كرت 3 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-shield-halved\"></i>
        </div>
        <h3 class=\"feature-title\">أمان متقدم</h3>
        <p class=\"feature-text\">
          نحمي بياناتك بأحدث تقنيات التشفير.
        </p>
      </article>

      <!-- كرت 4 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-headset\"></i>
        </div>
        <h3 class=\"feature-title\">دعم على مدار الساعة</h3>
        <p class=\"feature-text\">
          فريق دعم متاح 24/7 لمساعدتك في أي وقت.
        </p>
      </article>

    </div>
  </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/banner.twig";
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
        return array (  103 => 29,  94 => 22,  88 => 20,  86 => 19,  83 => 18,  79 => 16,  73 => 14,  71 => 13,  66 => 11,  57 => 7,  52 => 4,  49 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"carousel-banner-{{ module }}\" class=\"custom-banner-box\">
  {% if banners %}
    {% set banner = banners[0] %}

    <div class=\"banner-content row align-items-center\">
      <div class=\"col-lg-6 col-md-12 banner-image text-center\">
        <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-fluid\"/>
      </div>

      <div class=\"col-lg-6 col-md-12 banner-text text-center text-lg-start\">
        <h2 class=\"banner-title\">{{ banner.title }}</h2>

        {% if banner.description %}
          <p class=\"banner-desc\">{{ banner.description }}</p>
        {% else %}
          <p class=\"banner-desc\">استكشف عالماً جديداً من التسوق الإلكتروني في الواقع الافتراضي. اختبر تجربة تسوق فريدة تجمع بين الابتكار والخيال.</p>
        {% endif %}

        {% if banner.link %}
          <a href=\"{{ banner.link }}\" class=\"banner-btn\">ابدأ التسوق الآن</a>
        {% endif %}

           <a href=\"#\" class=\"banner-btn-outline\">تعرف علينا</a>
      </div>

    </div>
  </div>
  {% endif %}
</div>

<!-- المميزات - لماذا تختار بريق؟ -->
<section class=\"features-section\" id=\"features\">
  <div class=\"features-container\">

    <!-- الشارة الصغيرة -->
    <div class=\"features-badge\">المميزات</div>

    <!-- العنوان والوصف -->
    <h2 class=\"features-title\">لماذا تختار بريق؟</h2>
    <p class=\"features-subtitle\">
      نقدم لك تجربة تسوق فريدة تجمع بين التكنولوجيا المتقدمة والراحة.
    </p>

    <!-- كروت المميزات -->
    <div class=\"features-grid\">

      <!-- كرت 1 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-vr-cardboard\"></i>
        </div>
        <h3 class=\"feature-title\">تجربة ثلاثية الأبعاد</h3>
        <p class=\"feature-text\">
          استكشف المنتجات في بيئة ثلاثية الأبعاد تفاعلية.
        </p>
      </article>

      <!-- كرت 2 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-bolt\"></i>
        </div>
        <h3 class=\"feature-title\">تسليم فوري</h3>
        <p class=\"feature-text\">
          احصل على منتجاتك الرقمية فوراً بعد الشراء.
        </p>
      </article>

      <!-- كرت 3 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-shield-halved\"></i>
        </div>
        <h3 class=\"feature-title\">أمان متقدم</h3>
        <p class=\"feature-text\">
          نحمي بياناتك بأحدث تقنيات التشفير.
        </p>
      </article>

      <!-- كرت 4 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-headset\"></i>
        </div>
        <h3 class=\"feature-title\">دعم على مدار الساعة</h3>
        <p class=\"feature-text\">
          فريق دعم متاح 24/7 لمساعدتك في أي وقت.
        </p>
      </article>

    </div>
  </div>
</section>
", "extension/opencart/catalog/view/template/module/banner.twig", "C:\\xampp\\htdocs\\bareeq_platform\\extension\\opencart\\catalog\\view\\template\\module\\banner.twig");
    }
}
