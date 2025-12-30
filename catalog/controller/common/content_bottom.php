<?php
namespace Opencart\Catalog\Controller\Common;

/**
 * Class Content Bottom
 *
 * Can be called from $this->load->controller('common/content_bottom');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class ContentBottom extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		// Layout
		$this->load->model('design/layout');

		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}

		$layout_id = 0;

		// Category
		if ($route == 'product/category' && isset($this->request->get['path'])) {
			$this->load->model('catalog/category');

			$path = explode('_', (string)$this->request->get['path']);

			$layout_id = $this->model_catalog_category->getLayoutId((int)end($path));
		}

		// Product
		if ($route == 'product/product' && isset($this->request->get['product_id'])) {
			$this->load->model('catalog/product');

			$layout_id = $this->model_catalog_product->getLayoutId((int)$this->request->get['product_id']);
		}

		// Manufacturer
		if ($route == 'product/manufacturer.info' && isset($this->request->get['manufacturer_id'])) {
			$this->load->model('catalog/manufacturer');

			$layout_id = $this->model_catalog_manufacturer->getLayoutId((int)$this->request->get['manufacturer_id']);
		}

		// Information
		if ($route == 'information/information' && isset($this->request->get['information_id'])) {
			$this->load->model('catalog/information');

			$layout_id = $this->model_catalog_information->getLayoutId((int)$this->request->get['information_id']);
		}

		// Blog
		if ($route == 'cms/blog' && isset($this->request->get['topic_id'])) {
			$this->load->model('cms/topic');

			$layout_id = $this->model_cms_topic->getLayoutId((int)$this->request->get['topic_id']);
		}

		if ($route == 'cms/blog.info' && isset($this->request->get['article_id'])) {
			$this->load->model('cms/article');

			$layout_id = $this->model_cms_article->getLayoutId((int)$this->request->get['article_id']);
		}

		if (!$layout_id) {
			$layout_id = $this->model_design_layout->getLayout($route);
		}

		if (!$layout_id) {
			$layout_id = $this->config->get('config_layout_id');
		}

		// Extension
		$this->load->model('setting/module');

		$data['modules'] = [];

		$modules = $this->model_design_layout->getModules($layout_id, 'content_bottom');

		foreach ($modules as $module) {
			$part = explode('.', $module['code']);

			if (isset($part[1]) && $this->config->get('module_' . $part[1] . '_status')) {
				$module_data = $this->load->controller('extension/' . $part[0] . '/module/' . $part[1]);

				if ($module_data) {
					$data['modules'][] = $module_data;
				}
			}

			if (isset($part[2])) {
				$setting_info = $this->model_setting_module->getModule((int)$part[2]);

				if ($setting_info && $setting_info['status']) {
					$output = $this->load->controller('extension/' . $part[0] . '/module/' . $part[1], $setting_info);

					if ($output) {
						$data['modules'][] = $output;
					}
				}
			}
		}

		// =========================
		// ✅ جلب بيانات المتاجر هنا
		// =========================

		// تحميل مودل المتاجر
		$this->load->model('catalog/store');

		// تحميل مودل الصور
		$this->load->model('tool/image');

		$data['stores'] = [];

		$results = $this->model_catalog_store->getStores();

		foreach ($results as $result) {
			// تجهيز الصورة
			if (!empty($result['image']) && is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
				$thumb = $this->model_tool_image->resize(
					$result['image'],
					$this->config->get('config_image_category_width'),
					$this->config->get('config_image_category_height')
				);
			} else {
				$thumb = $this->model_tool_image->resize(
					'placeholder.png',
					$this->config->get('config_image_category_width'),
					$this->config->get('config_image_category_height')
				);
			}

			$data['stores'][] = [
				'id'    => $result['store_id'],
				'name'  => $result['name'],
				'url'   => $result['url'],
				'thumb' => $thumb
			];
		}

		return $this->load->view('common/content_bottom', $data);
	}
}
