<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Module;
/**
 * Class Featured
 *
 * @package Opencart\Catalog\Controller\Extension\Opencart\Module
 */
class Featured extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @param array<string, mixed> $setting array of data
	 *
	 * @return string
	 */
	public function index(array $setting): string {
		$this->load->language('extension/opencart/module/featured');

		$data['axis'] = $setting['axis'];

		$data['products'] = [];

		// Product
		$this->load->model('catalog/product');

		// Image
		$this->load->model('tool/image');

		if (!empty($setting['product'])) {
			$products = [];

			foreach ($setting['product'] as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					$products[] = $product_info;
				}
			}

			foreach ($products as $product) {
				if ($product['image']) {
					$image = $this->model_tool_image->resize(html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'), $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'));
				} else {
					$price = false;
				}

				if ((float)$product['special']) {
					$special = $this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax'));
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = (float)$product['special'] ? $product['special'] : $product['price'];
				} else {
					$tax = false;
				}

				$product_data = [
					'product_id'  => $product['product_id'],
					'thumb'       => $image,
					'name'        => $product['name'],
					'description' => oc_substr(trim(strip_tags(html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $product['minimum'] > 0 ? $product['minimum'] : 1,
					'rating'      => (int)$product['rating'],
					'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $product['product_id'])
				];

				$data['products'][] = $this->load->controller('product/thumb', $product_data);
			}
		}

		if ($data['products']) {
			return $this->load->view('extension/opencart/module/featured', $data);
		} else {
			return '';
		}
	}
}


// <?php
// namespace Opencart\Catalog\Controller\Extension\Opencart\Module;
// /**
//  * Class Store
//  *
//  * @package Opencart\Catalog\Controller\Extension\Opencart\Module
//  */
// class Store extends \Opencart\System\Engine\Controller {
// 	/**
// 	 * Index
// 	 *
// 	 * @return string
// 	 */
// 	public function index(): string {
// 		$status = true;

// 		if ($this->config->get('module_store_admin')) {
// 			$this->user = new \Opencart\System\Library\Cart\User($this->registry);

// 			$status = $this->user->isLogged();
// 		}

// 		if ($status) {
// 			$this->load->language('extension/opencart/module/store');

// 			$data['store_id'] = $this->config->get('config_store_id');

// 			// Stores
// 			$data['stores'] = [];

// 			$data['stores'][] = [
// 				'store_id' => 0,
// 				'name'     => $this->language->get('text_default'),
// 				'url'      => HTTP_SERVER . 'index.php?route=common/home&session_id=' . $this->session->getId()
// 			];

// 			$this->load->model('setting/store');

// 			$results = $this->model_setting_store->getStores();

// 			foreach ($results as $result) {
// 				$data['stores'][] = [
// 					'store_id' => $result['store_id'],
// 					'name'     => $result['name'],
// 					'url'      => $result['url'] . 'index.php?route=common/home&session_id=' . $this->session->getId()
// 				];
// 			}

// 			return $this->load->view('extension/opencart/module/store', $data);
// 		} else {
// 			return '';
// 		}
// 	}
// }
