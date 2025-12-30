<?php
namespace Opencart\Catalog\Controller\Product;

/**
 * Class Store
 *
 * صفحة عرض المتاجر
 *
 * @package Opencart\Catalog\Controller\Product
 */
class Store extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return \Opencart\System\Engine\Action|null
	 */
	public function index(): ?\Opencart\System\Engine\Action {
		// تحميل ملف اللغة
		$this->load->language('product/store');

		// عنوان الصفحة (من ملف اللغة)
		$this->document->setTitle($this->language->get('heading_title'));

		// مسار الـ breadcrumbs
		$data['breadcrumbs'] = [];

		// رابط الصفحة الرئيسية
		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		// رابط صفحة المتاجر نفسها
		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/store', 'language=' . $this->config->get('config_language'))
		];

		$data['heading_title'] = $this->language->get('heading_title');

		// تحميل المودل الخاص بالمتاجر
		$this->load->model('catalog/store');

		// تحميل مودل الصور
		$this->load->model('tool/image');

		$data['stores'] = [];

		// جلب كل المتاجر من قاعدة البيانات
		$results = $this->model_catalog_store->getStores();

		foreach ($results as $result) {
			// معالجة الصورة
			if (!empty($result['image']) && is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
				$thumb = $this->model_tool_image->resize(
					$result['image'],
					$this->config->get('config_image_category_width'),
					$this->config->get('config_image_category_height')
				);
			} else {
				// صورة افتراضية
				$thumb = $this->model_tool_image->resize(
					'placeholder.png',
					$this->config->get('config_image_category_width'),
					$this->config->get('config_image_category_height')
				);
			}

			$data['stores'][] = [
				'id'    => $result['id'],       // اسم العمود الأساسي في جدول المتاجر
				'name'  => $result['name'],     // اسم المتجر
				'url'   => $result['url'],      // رابط الموقع الخارجي للمتجر
				'thumb' => $thumb               // صورة مصغرة للعرض في الواجهة
			];
		}

		// ربط أجزاء الصفحة (العمود يمين/يسار + الهيدر + الفوتر)
		$data['column_left']   = $this->load->controller('common/column_left');
		$data['column_right']  = $this->load->controller('common/column_right');
		$data['content_top']   = $this->load->controller('common/content_top');
		$data['content_bottom']= $this->load->controller('common/content_bottom');
		$data['footer']        = $this->load->controller('common/footer');
		$data['header']        = $this->load->controller('common/header');

		// عرض الفيو الخاص بالمتاجر
		$this->response->setOutput($this->load->view('product/store', $data));

		return null;
	}
}
