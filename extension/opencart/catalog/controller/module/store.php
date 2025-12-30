<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Module;

/**
 * Class FeaturedStore
 *
 * @package Opencart\Catalog\Controller\Extension\Opencart\Module
 */
class FeaturedStore extends \Opencart\System\Engine\Controller {

	/**
	 * Index
	 *
	 * @param array<string, mixed> $setting
	 *
	 * @return string
	 */
	public function index(array $setting): string {

		$this->load->language('extension/opencart/module/featured_store');

		$data['stores'] = [];

		// Model: Stores
		$this->load->model('setting/store');

		// Model: Image
		$this->load->model('tool/image');

		// تأكد أن المتاجر محددة من الإعدادات
		if (!empty($setting['store'])) {

			foreach ($setting['store'] as $store_id) {

				$store_info = $this->model_setting_store->getStore((int)$store_id);

				if ($store_info) {

					// صورة المتجر
					if (!empty($store_info['image']) && is_file(DIR_IMAGE . $store_info['image'])) {
						$image = $this->model_tool_image->resize(
							$store_info['image'],
							$setting['width'],
							$setting['height']
						);
					} else {
						$image = $this->model_tool_image->resize(
							'no_image.png',
							$setting['width'],
							$setting['height']
						);
					}

					$data['stores'][] = [
						'store_id' => $store_info['store_id'],
						'name'     => $store_info['name'],
						'url'      => $store_info['url'],
						'image'    => $image
					];
				}
			}
		}

		if ($data['stores']) {
			return $this->load->view('extension/opencart/module/featured_store', $data);
		}

		return '';
	}
}
