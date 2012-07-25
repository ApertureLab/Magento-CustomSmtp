Description
-----------

_Baobaz CustomSmtp_ provides a full SMTP configuration in Magento.

Features list:
* Configure host, port, username/password and secure mode (TSL or SSL)


Configuration
-------------

* Config
 * System > Configuration > System > Mail Sending Settings
  * Send email via: SMTP mode (or native transport (PHP sendmail()))
  * Host: SMTP server host
  * Port: SMTP server port
  * Username: login username (or public key)
  * Password: login password (or private key)
  * Secure mode: TLS or SSL
* Config file (config.xml)
 * default > system > smtp
  * auth


Screenshot
----------

![Baobaz_CustomSmtp Configuration](https://github.com/Baobaz/Magento_Baobaz_CustomSmtp/raw/master/doc/screenshots/Baobaz_CustomSmtp-Configuration.png "Baobaz_CustomSmtp Configuration")
