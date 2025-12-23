<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Home
 *
 * Can be called from $this->load->controller('common/home');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Home extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
    $description = $this->config->get('config_description');
    $language_id = $this->config->get('config_language_id');

    if (isset($description[$language_id])) {
        $this->document->setTitle($description[$language_id]['meta_title']);
        $this->document->setDescription($description[$language_id]['meta_description']);
        $this->document->setKeywords($description[$language_id]['meta_keyword']);
    }

    // أعمدة / محتوى الصفحة
    $data['column_left']   = $this->load->controller('common/column_left');
    $data['column_right']  = $this->load->controller('common/column_right');
    $data['content_top']   = $this->load->controller('common/content_top');
    $data['content_bottom']= $this->load->controller('common/content_bottom');
    $data['footer']        = $this->load->controller('common/footer');
    $data['header']        = $this->load->controller('common/header');

    /* ================== قسم المتاجر ================== */

    // تحميل الموديلات الضرورية
    $this->load->model('setting/store');
    $this->load->model('tool/image');

    $data['stores'] = [];

    // 1) المتجر الرئيسي (نفس هذا الموقع)
    $main_logo = $this->config->get('config_logo');

    if ($main_logo && is_file(DIR_IMAGE . $main_logo)) {
        $main_thumb = $this->model_tool_image->resize($main_logo, 800, 500);
    } else {
        $main_thumb = $this->model_tool_image->resize('placeholder.png', 800, 500);
    }

    $data['stores'][] = [
        'store_id'    => 0,
        'name'        => $this->config->get('config_name'),
        'description' => 'متجرنا الرئيسي في العالم الافتراضي.',
        'thumb'       => $main_thumb,
        'href'        => $this->config->get('config_url'),
        'badge'       => 'الأكثر زيارة',
        'tag'         => 'متجر رئيسي',
        'rating'      => 4.9,
        'price_from'  => '–'
    ];
    
  

    // 2) المتاجر الفرعية المسجَّلة في أوبن كارت
    $stores = $this->model_setting_store->getStores();

    foreach ($stores as $store) {
        $image = $store['image'] ?? '';

        if ($image && is_file(DIR_IMAGE . $image)) {
            $thumb = $this->model_tool_image->resize($image, 800, 500);
        } else {
            $thumb = $this->model_tool_image->resize('placeholder.png', 800, 500);
        }

        $data['stores'][] = [
            'store_id'    => $store['store_id'],
            'name'        => $store['name'],
            'description' => $store['meta_description'] ?? '',
            'thumb'       => $thumb,
            'href'        => $store['url'],
            'badge'       => 'عرض خاص',
            'tag'         => 'متجر شريك',
            'rating'      => 4.7,
            'price_from'  => '999 ر.س'
        ];
    }

    /* ================================================= */

    // إخراج صفحة الهوم مع البيانات (ومنها مصفوفة المتاجر)
    $this->response->setOutput($this->load->view('common/home', $data));
}

}
