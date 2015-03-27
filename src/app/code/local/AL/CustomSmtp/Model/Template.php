<?php
/**
 * @package    AL_CustomSmtp
 * @copyright  Copyright (c) 2015 Arnaud Ligny
 * @author     Arnaud Ligny <arnaud@ligny.org>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Class AL_CustomSmtp_Model_Template
 */
class AL_CustomSmtp_Model_Template extends Mage_Core_Model_Email_Template
{
    /**
     * Send mail to recipient
     *
     * @param string $email E-mail
     * @param string|null $name receiver name
     * @param array $variables template variables
     * @return boolean
     */
    public function send($email, $name = null, array $variables = array())
    {
        // use default send method
        if (Mage::getStoreConfig('system/smtp/transport') != 'smtp') {
            return parent::send($email, $name, $variables);
        }

        if (!$this->isValidForSend()) {
            Mage::logException(new Exception('This letter cannot be sent.')); // translation is intentionally omitted
            return false;
        }

        $emails = array_values((array)$email);
        $names = is_array($name) ? $name : (array)$name;
        $names = array_values($names);
        foreach ($emails as $key => $email) {
            if (!isset($names[$key])) {
                $names[$key] = substr($email, 0, strpos($email, '@'));
            }
        }

        $variables['email'] = reset($emails);
        $variables['name'] = reset($names);

        ini_set('SMTP', Mage::getStoreConfig('system/smtp/host'));
        ini_set('smtp_port', Mage::getStoreConfig('system/smtp/port'));

        $mail = $this->getMail();

        $transport = new Zend_Mail_Transport_Smtp(
            Mage::getStoreConfig('system/smtp/host'),
            array(
                'port'     => Mage::getStoreConfig('system/smtp/port'),
                //'auth'     => strtolower(Mage::getStoreConfig('system/smtp/auth')),
                'auth'     => 'login',
                'username' => Mage::getStoreConfig('system/smtp/username'),
                'password' => Mage::getStoreConfig('system/smtp/password'),
                'ssl'      => Mage::getStoreConfig('system/smtp/ssl'),
            )
        );
        Zend_Mail::setDefaultTransport($transport);

        foreach ($emails as $key => $email) {
            $mail->addTo($email, '=?utf-8?B?' . base64_encode($names[$key]) . '?=');
        }

        $this->setUseAbsoluteLinks(true);
        $text = $this->getProcessedTemplate($variables, true);

        if ($this->isPlain()) {
            $mail->setBodyText($text);
        }
        else {
            $mail->setBodyHTML($text);
        }

        $mail->addHeader ('X-Mailer', 'AL_CustomSmtp', TRUE);
        $mail->setSubject('=?utf-8?B?' . base64_encode($this->getProcessedTemplateSubject($variables)) . '?=');
        $mail->setFrom($this->getSenderEmail(), $this->getSenderName());
        
        try {
            Mage::dispatchEvent('customsmtp_email_before_send', array(
                'mail'     => $mail,
                'template' => $this->getTemplateId(),
                'subject'  => $this->getProcessedTemplateSubject($variables),
            ));
            $mail->send();
            Mage::dispatchEvent('customsmtp_email_after_send', array(
                'mail'     => $mail,
                'template' => $this->getTemplateId(),
                'subject'  => $this->getProcessedTemplateSubject($variables),
            ));
            $this->_mail = null;
        }
        catch (Exception $e) {
            $this->_mail = null;
            Mage::logException($e);
            return false;
        }

        return true;
    }
}