<?php
/**
 * @package    AL_CustomSmtp
 * @copyright  Copyright (c) 2015 Arnaud Ligny
 * @author     Arnaud Ligny <arnaud@ligny.org>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Class AL_CustomSmtp_Model_Source_Ssl
 */
class AL_CustomSmtp_Model_Source_Ssl
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'none', 'label' => Mage::helper('AL_CustomSmtp')->__('none')),
            array('value' => 'tls', 'label' => Mage::helper('AL_CustomSmtp')->__('TLS')),
            array('value' => 'ssl', 'label' => Mage::helper('AL_CustomSmtp')->__('SSL')),
        );
    }
}