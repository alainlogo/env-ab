<?php
/**
 * 2007-2015 Apollotheme
 *
 * NOTICE OF LICENSE
 *
 * ApPageBuilder is module help you can build content for your shop
 *
 * DISCLAIMER
 *
 *  @author    Apollotheme <apollotheme@gmail.com>
 *  @copyright 2007-2019 Apollotheme
 *  @license   http://apollotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

require_once(_PS_MODULE_DIR_.'appagebuilder/classes/shortcodes.php');
require_once(_PS_MODULE_DIR_.'appagebuilder/classes/ApPageSetting.php');

class ApPageBuilderProductsModel extends ObjectModel
{
    public $name;
    public $params;
    public $type;
    public $active;
    public $plist_key;
    public $class;
    public $active_mobile;
    public $active_tablet;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'appagebuilder_products',
        'primary' => 'id_appagebuilder_products',
        'multilang' => false,
        'multishop' => true,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255),
            'plist_key' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255),
            'type' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'active' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'active_mobile' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'active_tablet' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'params' => array('type' => self::TYPE_HTML),
            'class' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255),
        )
    );

    public function getAllProductProfileByShop()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $where = ' WHERE id_shop='.(int)$id_shop;
        $sql = 'SELECT p.*, ps.*
                 FROM '._DB_PREFIX_.'appagebuilder_products p
                 INNER JOIN '._DB_PREFIX_.'appagebuilder_products_shop ps ON (ps.id_appagebuilder_products = p.id_appagebuilder_products)'
                .$where;
        return Db::getInstance()->executes($sql);
    }

    public function __construct($id = null, $id_lang = null, $id_shop = null, Context $context = null)
    {
        // validate module
        unset($context);
        parent::__construct($id, $id_lang, $id_shop);
    }

    public function add($autodate = true, $null_values = false)
    {
        $id_shop = apPageHelper::getIDShop();
        $res = parent::add($autodate, $null_values);
        $res &= Db::getInstance()->execute('
                INSERT INTO `'._DB_PREFIX_.'appagebuilder_products_shop` (`id_shop`, `id_appagebuilder_products`, `active_mobile`, `active_tablet`)
                VALUES('.(int)$id_shop.', '.(int)$this->id.', '.(int)$this->active_mobile.', '.(int)$this->active_tablet.')');
        if (Db::getInstance()->getValue('SELECT COUNT(p.`id_appagebuilder_products`) AS total FROM `'
                        ._DB_PREFIX_.'appagebuilder_products` p INNER JOIN `'
                        ._DB_PREFIX_.'appagebuilder_products_shop` ps ON(p.id_appagebuilder_products = ps.id_appagebuilder_products) WHERE id_shop='
                        .(int)$id_shop) <= 1) {
            $this->deActiveAll();
        } else if ($this->active) {
            $this->deActiveAll();
        }
        return $res;
    }

    public function toggleStatus()
    {
        $this->deActiveAll();
        return true;
    }

    public function deActiveAll()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $sql = 'UPDATE '._DB_PREFIX_.'appagebuilder_products_shop SET active=0 where id_shop='.(int)$id_shop;
        Db::getInstance()->execute($sql);
        $where = ' WHERE ps.id_shop='.(int)$id_shop." AND ps.id_appagebuilder_products = '".(int)$this->id."'";
        Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'appagebuilder_products_shop` ps set ps.active = 1 '.$where);
    }

    public function toggleStatusMT($field)
    {
        $id_shop = apPageHelper::getIDShop();
        $where = ' WHERE id_shop='.$id_shop." AND id_appagebuilder_products = '".(int)$this->id."'";
        $where1 = ' WHERE id_appagebuilder_products = "'.(int)$this->id.'"';
        $result = Db::getInstance()->getRow('SELECT '.$field.' from  `'._DB_PREFIX_.'appagebuilder_products_shop` '.$where);
        $value = $result[$field]==1?0:1;

        if ($value == 1) {
            Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'appagebuilder_products_shop` set '.$field.' = "0" WHERE id_shop="'.$id_shop.'"');
            Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'appagebuilder_products` set '.$field.' = "0";');
        }
        
        Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'appagebuilder_products_shop` set '.$field.' = "'.$value.'" '.$where);
        Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'appagebuilder_products` set '.$field.' = "'.$value.'" '.$where1);

        return true;
    }

    public static function getActive($use_mobile_theme = 0)
    {
        $id_shop = (int)Context::getContext()->shop->id;
        if (Tools::getIsset('plist_key') && Tools::getValue('plist_key')) {
            // validate module
            $where = " p.plist_key='".pSQL(Tools::getValue('plist_key'))."' and ps.id_shop=".(int)$id_shop;
        } else {
            // validate module
            $where = ' ps.active=1 and ps.id_shop='.(int)$id_shop;
            if ($use_mobile_theme) {
                if (Context::getContext()->isMobile()) {
                    $where = ' ps.active_mobile=1 and ps.id_shop='.(int)$id_shop;
                }
                if (Context::getContext()->isTablet()) {
                    $where = ' ps.active_tablet=1 and ps.id_shop='.(int)$id_shop;
                }
            }
        }

        $sql = 'SELECT * FROM '._DB_PREFIX_.'appagebuilder_products p
                INNER JOIN '._DB_PREFIX_.'appagebuilder_products_shop ps on(p.id_appagebuilder_products = ps.id_appagebuilder_products) WHERE '.$where;
        $result = Db::getInstance()->getRow($sql);

        if ($use_mobile_theme) {
            if ((!$result && Context::getContext()->isMobile()) || (!$result && Context::getContext()->isTablet())) {
                $where = ' ps.active=1 and ps.id_shop='.(int)$id_shop;
                $sql = 'SELECT * FROM '._DB_PREFIX_.'appagebuilder_products p
                INNER JOIN '._DB_PREFIX_.'appagebuilder_products_shop ps on(p.id_appagebuilder_products = ps.id_appagebuilder_products) WHERE '.$where;
                $result = Db::getInstance()->getRow($sql);
            }
        }

        return $result;
    }
    
    public function delete()
    {
        $result = parent::delete();
        
        if ($result) {
            if (isset($this->def['multishop']) && $this->def['multishop'] == true) {
                # DELETE RECORD FORM TABLE _SHOP
                $id_shop_list = Shop::getContextListShopID();
                if (count($this->id_shop_list)) {
                    $id_shop_list = $this->id_shop_list;
                }

                $id_shop_list = array_map('intval', $id_shop_list);

                Db::getInstance()->delete($this->def['table'].'_shop', '`'.$this->def['primary'].'`='.
                    (int)$this->id.' AND id_shop IN ('.pSQL(implode(', ', $id_shop_list)).')');
            }
        }
        
        return $result;
    }
}
