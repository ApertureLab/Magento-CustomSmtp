<?php
/**
 * @package    AL_CustomSmtp
 * @copyright  Copyright (c) 2015 Arnaud Ligny
 * @author     Arnaud Ligny <arnaud@ligny.org>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Class AL_CustomSmtp_Model_Source_Transport
 */
class AL_CustomSmtp_Model_Source_Transport
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'sendmail', 'label' => Mage::helper('AL_CustomSmtp')->__('PHP sendmail()')),
            array('value' => 'smtp', 'label' => Mage::helper('AL_CustomSmtp')->__('SMTP')),
        );
    }
}