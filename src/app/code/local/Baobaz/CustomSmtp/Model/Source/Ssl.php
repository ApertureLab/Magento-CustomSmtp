<?php
/**
 * @category   Baobaz
 * @package    Baobaz_CustomSmtp
 * @copyright  Copyright (c) 2011-2013 Baobaz (http://www.baobaz.com)
 * @author     Arnaud Ligny <arnaud.ligny@baobaz.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Baobaz_CustomSmtp_Model_Source_Ssl
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'none', 'label' => Mage::helper('Baobaz_CustomSmtp')->__('none')),
            array('value' => 'tls', 'label' => Mage::helper('Baobaz_CustomSmtp')->__('TLS')),
            array('value' => 'ssl', 'label' => Mage::helper('Baobaz_CustomSmtp')->__('SSL')),
        );
    }
}