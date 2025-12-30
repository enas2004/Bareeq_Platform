<?php
namespace Opencart\Catalog\Model\Catalog;

/**
 * Class Store
 *
 * Can be called using $this->load->model('catalog/store');
 *
 * @package Opencart\Catalog\Model\Catalog
 */
class Store extends \Opencart\System\Engine\Model {

    /**
     * Get Store
     *
     * Get a single store record from the database.
     *
     * @param int $store_id primary key of the store record
     *
     * @return array<string, mixed> store record that has the given ID
     *
     * @example
     *
     * $this->load->model('catalog/store');
     *
     * $store_info = $this->model_catalog_store->getStore($store_id);
     */
    public function getStore(int $store_id): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "store` WHERE `id` = '" . (int)$store_id . "'");

        return $query->row;
    }

    /**
     * Get Stores
     *
     * Get all store records from the database.
     *
     * @return array<int, array<string, mixed>> store records
     *
     * @example
     *
     * $this->load->model('catalog/store');
     *
     * $stores = $this->model_catalog_store->getStores();
     */
    public function getStores(): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "store` ORDER BY `name`");

        return $query->rows;
    }
}
