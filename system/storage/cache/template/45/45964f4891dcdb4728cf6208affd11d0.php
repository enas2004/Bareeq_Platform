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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_6fe67be0cc995f7a3cca2cd3f3f384f6 extends Template
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
        yield "<?php
namespace Opencart\\Catalog\\Controller\\Product;

/**
 * Class Store
 *
 * صفحة عرض المتاجر
 *
 * @package Opencart\\Catalog\\Controller\\Product
 */
class Store extends \\Opencart\\System\\Engine\\Controller {
\t/**
\t * Index
\t *
\t * @return \\Opencart\\System\\Engine\\Action|null
\t */
\tpublic function index(): ?\\Opencart\\System\\Engine\\Action {
\t\t// تحميل ملف اللغة
\t\t\$this->load->language('product/store');

\t\t// عنوان الصفحة (من ملف اللغة)
\t\t\$this->document->setTitle(\$this->language->get('heading_title'));

\t\t// مسار الـ breadcrumbs
\t\t\$data['breadcrumbs'] = [];

\t\t// رابط الصفحة الرئيسية
\t\t\$data['breadcrumbs'][] = [
\t\t\t'text' => \$this->language->get('text_home'),
\t\t\t'href' => \$this->url->link('common/home', 'language=' . \$this->config->get('config_language'))
\t\t];

\t\t// رابط صفحة المتاجر نفسها
\t\t\$data['breadcrumbs'][] = [
\t\t\t'text' => \$this->language->get('heading_title'),
\t\t\t'href' => \$this->url->link('product/store', 'language=' . \$this->config->get('config_language'))
\t\t];

\t\t\$data['heading_title'] = \$this->language->get('heading_title');

\t\t// تحميل المودل الخاص بالمتاجر
\t\t\$this->load->model('catalog/store');

\t\t// تحميل مودل الصور
\t\t\$this->load->model('tool/image');

\t\t\$data['stores'] = [];

\t\t// جلب كل المتاجر من قاعدة البيانات
\t\t\$results = \$this->model_catalog_store->getStores();

\t\tforeach (\$results as \$result) {
\t\t\t// معالجة الصورة
\t\t\tif (!empty(\$result['image']) && is_file(DIR_IMAGE . html_entity_decode(\$result['image'], ENT_QUOTES, 'UTF-8'))) {
\t\t\t\t\$thumb = \$this->model_tool_image->resize(
\t\t\t\t\t\$result['image'],
\t\t\t\t\t\$this->config->get('config_image_category_width'),
\t\t\t\t\t\$this->config->get('config_image_category_height')
\t\t\t\t);
\t\t\t} else {
\t\t\t\t// صورة افتراضية
\t\t\t\t\$thumb = \$this->model_tool_image->resize(
\t\t\t\t\t'placeholder.png',
\t\t\t\t\t\$this->config->get('config_image_category_width'),
\t\t\t\t\t\$this->config->get('config_image_category_height')
\t\t\t\t);
\t\t\t}

\t\t\t\$data['stores'][] = [
\t\t\t\t'id'    => \$result['id'],       // اسم العمود الأساسي في جدول المتاجر
\t\t\t\t'name'  => \$result['name'],     // اسم المتجر
\t\t\t\t'url'   => \$result['url'],      // رابط الموقع الخارجي للمتجر
\t\t\t\t'thumb' => \$thumb               // صورة مصغرة للعرض في الواجهة
\t\t\t];
\t\t}

\t\t// ربط أجزاء الصفحة (العمود يمين/يسار + الهيدر + الفوتر)
\t\t\$data['column_left']   = \$this->load->controller('common/column_left');
\t\t\$data['column_right']  = \$this->load->controller('common/column_right');
\t\t\$data['content_top']   = \$this->load->controller('common/content_top');
\t\t\$data['content_bottom']= \$this->load->controller('common/content_bottom');
\t\t\$data['footer']        = \$this->load->controller('common/footer');
\t\t\$data['header']        = \$this->load->controller('common/header');

\t\t// عرض الفيو الخاص بالمتاجر
\t\t\$this->response->setOutput(\$this->load->view('product/store', \$data));

\t\treturn null;
\t}
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/category.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?php
namespace Opencart\\Catalog\\Controller\\Product;

/**
 * Class Store
 *
 * صفحة عرض المتاجر
 *
 * @package Opencart\\Catalog\\Controller\\Product
 */
class Store extends \\Opencart\\System\\Engine\\Controller {
\t/**
\t * Index
\t *
\t * @return \\Opencart\\System\\Engine\\Action|null
\t */
\tpublic function index(): ?\\Opencart\\System\\Engine\\Action {
\t\t// تحميل ملف اللغة
\t\t\$this->load->language('product/store');

\t\t// عنوان الصفحة (من ملف اللغة)
\t\t\$this->document->setTitle(\$this->language->get('heading_title'));

\t\t// مسار الـ breadcrumbs
\t\t\$data['breadcrumbs'] = [];

\t\t// رابط الصفحة الرئيسية
\t\t\$data['breadcrumbs'][] = [
\t\t\t'text' => \$this->language->get('text_home'),
\t\t\t'href' => \$this->url->link('common/home', 'language=' . \$this->config->get('config_language'))
\t\t];

\t\t// رابط صفحة المتاجر نفسها
\t\t\$data['breadcrumbs'][] = [
\t\t\t'text' => \$this->language->get('heading_title'),
\t\t\t'href' => \$this->url->link('product/store', 'language=' . \$this->config->get('config_language'))
\t\t];

\t\t\$data['heading_title'] = \$this->language->get('heading_title');

\t\t// تحميل المودل الخاص بالمتاجر
\t\t\$this->load->model('catalog/store');

\t\t// تحميل مودل الصور
\t\t\$this->load->model('tool/image');

\t\t\$data['stores'] = [];

\t\t// جلب كل المتاجر من قاعدة البيانات
\t\t\$results = \$this->model_catalog_store->getStores();

\t\tforeach (\$results as \$result) {
\t\t\t// معالجة الصورة
\t\t\tif (!empty(\$result['image']) && is_file(DIR_IMAGE . html_entity_decode(\$result['image'], ENT_QUOTES, 'UTF-8'))) {
\t\t\t\t\$thumb = \$this->model_tool_image->resize(
\t\t\t\t\t\$result['image'],
\t\t\t\t\t\$this->config->get('config_image_category_width'),
\t\t\t\t\t\$this->config->get('config_image_category_height')
\t\t\t\t);
\t\t\t} else {
\t\t\t\t// صورة افتراضية
\t\t\t\t\$thumb = \$this->model_tool_image->resize(
\t\t\t\t\t'placeholder.png',
\t\t\t\t\t\$this->config->get('config_image_category_width'),
\t\t\t\t\t\$this->config->get('config_image_category_height')
\t\t\t\t);
\t\t\t}

\t\t\t\$data['stores'][] = [
\t\t\t\t'id'    => \$result['id'],       // اسم العمود الأساسي في جدول المتاجر
\t\t\t\t'name'  => \$result['name'],     // اسم المتجر
\t\t\t\t'url'   => \$result['url'],      // رابط الموقع الخارجي للمتجر
\t\t\t\t'thumb' => \$thumb               // صورة مصغرة للعرض في الواجهة
\t\t\t];
\t\t}

\t\t// ربط أجزاء الصفحة (العمود يمين/يسار + الهيدر + الفوتر)
\t\t\$data['column_left']   = \$this->load->controller('common/column_left');
\t\t\$data['column_right']  = \$this->load->controller('common/column_right');
\t\t\$data['content_top']   = \$this->load->controller('common/content_top');
\t\t\$data['content_bottom']= \$this->load->controller('common/content_bottom');
\t\t\$data['footer']        = \$this->load->controller('common/footer');
\t\t\$data['header']        = \$this->load->controller('common/header');

\t\t// عرض الفيو الخاص بالمتاجر
\t\t\$this->response->setOutput(\$this->load->view('product/store', \$data));

\t\treturn null;
\t}
}
", "catalog/view/template/product/category.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\product\\category.twig");
    }
}
