> Magento 1 module that provides a full SMTP configuration.

## Features

* Ability to setup host, port, username/password and secure mode (TSL or SSL)
* Ability to send a test email from admin panel
* Translated in french

## Screenshot

![CustomSmtp Configuration](https://raw.github.com/aperturelab/Magento-CustomSmtp/master/doc/screenshots/AL_CustomSmtp-Configuration.png "CustomSmtp Configuration")

## Configuration

### Magento configuration

System > Configuration > System > Mail Sending Settings

* Send email via: SMTP mode (or native transport (PHP sendmail()))
* Host: SMTP server host
* Port: SMTP server port
* Username: login username
* Password: login password
* Secure mode: none, TLS or SSL

### Third party service configuration

#### [Mailjet](https://www.mailjet.com)

* Host: in.mailjet.com
* Port: 587
* Username: your [API Mailjet Key](https://www.mailjet.com/account/api_keys)
* Password: your [Mailjet Secret Key](https://www.mailjet.com/account/api_keys)
* SSL: TLS

#### [Mandrill](http://mandrill.com)

* Host: smtp.mandrillapp.com
* Port: 587
* Username: your [Mandrill Username](https://mandrillapp.com/settings/index/)
* Password: any valid [Mandrill API key](https://mandrillapp.com/settings/index/)
* SSL: TLS

#### [Sendgrid](http://sendgrid.com)

* Host: smtp.sendgrid.net
* Port: 587
* Username: your [Sendgrid username](http://sendgrid.com/developer)
* Password: your [Sendgrid password](http://sendgrid.com/developer)
* SSL: TLS

#### [Mailgun](http://www.mailgun.com)

* Host: smtp.mailgun.org
* Port: 587
* Username: [postmaster@yourdomainname.mailgun.org](https://mailgun.net/cp/domains)
* Password: your [Mailgun domain password](https://mailgun.net/cp/domains)
* SSL: TLS

#### [CheetahSender](https://app.cheetahsender.com)

* Host: relay.cheetahsender.com
* Port: 25
* Username: ?
* Password: ?
* SSL: none

## Developper

If you are a developer and want to hack _CustomSmtp_, you could use two new events:
* ```customsmtp_email_before_send```: called before sending e-mail
* ```customsmtp_email_after_send```: called after sending e-mail

Each one uses those parameters:
* mail
* template (ID)
* subject

## License

Released under the terms of the [Open Software License 3.0](http://opensource.org/licenses/OSL-3.0).

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.
