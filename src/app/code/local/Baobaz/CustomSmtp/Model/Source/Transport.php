<?php

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