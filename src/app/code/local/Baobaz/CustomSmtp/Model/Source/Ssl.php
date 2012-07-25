<?php

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