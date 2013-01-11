<?php
/**
 * @category   Baobaz
 * @package    Baobaz_CustomSmtp
 * @copyright  Copyright (c) 2011-2013 Baobaz (http://www.baobaz.com)
 * @author     Arnaud Ligny <arnaud.ligny@baobaz.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Baobaz_CustomSmtp_Model_Source_Transport
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'sendmail', 'label' => Mage::helper('Baobaz_CustomSmtp')->__('PHP sendmail()')),
            array('value' => 'smtp', 'label' => Mage::helper('Baobaz_CustomSmtp')->__('SMTP')),
        );
    }
}