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


License
----------

_Baobaz CustomSmtp_ is released under the terms of the [Open Software License 3.0](http://opensource.org/licenses/OSL-3.0).

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.