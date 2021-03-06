<a href="http://www.ffuenf.de" title="ffuenf - code • design • e-commerce"><img src="https://github.com/ffuenf/Ffuenf_Common/blob/master/skin/adminhtml/default/default/ffuenf/ffuenf.png" alt="ffuenf - code • design • e-commerce" /></a>

Ffuenf_ConfigDotEnv
===================
[![GitHub tag](https://img.shields.io/github/tag/ffuenf/Ffuenf_ConfigDotEnv.svg)][tag]
[![Build Status](https://img.shields.io/travis/ffuenf/Ffuenf_ConfigDotEnv.svg)][travis]
[![VersionEye](https://www.versioneye.com/user/projects//badge.svg)][versioneye]
[![Code Quality](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_ConfigDotEnv/badges/quality-score.png)][code_quality]
[![Code Coverage](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_ConfigDotEnv/badges/coverage.png)][code_coverage]
[![PayPal Donate](https://img.shields.io/badge/paypal-donate-blue.svg)][paypal_donate]
[tag]: https://github.com/ffuenf/Ffuenf_ConfigDotEnv
[travis]: https://travis-ci.org/ffuenf/Ffuenf_ConfigDotEnv
[versioneye]: https://www.versioneye.com/user/projects/
[code_quality]: https://scrutinizer-ci.com/g/ffuenf/Ffuenf_ConfigDotEnv
[code_coverage]: https://scrutinizer-ci.com/g/ffuenf/Ffuenf_ConfigDotEnv
[paypal_donate]: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=J2PQS2WLT2Y8W&item_name=Magento%20Extension%3a%20Ffuenf_ConfigDotEnv&item_number=Ffuenf_ConfigDotEnv&currency_code=EUR

This is a extension for Magento Community Edition that adds the possibility to use [dotenv](https://github.com/vlucas/phpdotenv)
environment variables in the local.xml file.
This is especially useful when using [laravel envoyer](https://envoyer.io) as deployment-tool.
Envoyer can manage your environment variables per host via its admin interface which will be
populated to a .env file on your destination host.

Platform
--------

The following versions are supported and tested:

* Magento Community Edition 1.9.2.4
* Magento Community Edition 1.9.1.1
* Magento Community Edition 1.8.1.0
* Magento Community Edition 1.7.0.2
* Magento Community Edition 1.6.2.0

Other versions are assumed to work.

Requirements
------------

|                                                                     | PHP 5.5           | PHP 5.6           | PHP 7.0           |
| ------------------------------------------------------------------- | ----------------- | ----------------- | ----------------- |
| [EOL](https://secure.php.net/supported-versions.php) / STABLE / RC  | STABLE            | **STABLE**        | **STABLE**        |
| automated tests on [travis]                                         | **required pass** | **required pass** | **required pass** |

Magento Community Edition officially supports PHP 5.4 and PHP 5.5.

Non-official compatibility to PHP 5.6 may be reached by following the tips on [Use of iconv.internal_encoding is deprecated](https://magento.stackexchange.com/questions/34015/magento-1-9-php-5-6-use-of-iconv-internal-encoding-is-deprecated).
Non-official compatibility to PHP 7.0 may be reached by using [Inchoo_PHP7](https://github.com/Inchoo/Inchoo_PHP7).

Installation
------------

Use [modman](https://github.com/colinmollenhour/modman) to install:
```
modman init
modman clone https://github.com/ffuenf/Ffuenf_Common
modman clone https://github.com/ffuenf/Ffuenf_ConfigDotEnv
```

Usage
-----

Example part of .env:
```bash
MAGE_DB_HOST=localhost
MAGE_DB_USER=magento
MAGE_DB_PASS=yourpassword
MAGE_DB_NAME=magento
```

Example part of local.xml:
```xml
    <default_setup>
        <connection>
            <host>$MAGE_DB_HOST</host>
            <username>$MAGE_DB_USER</username>
            <password>$MAGE_DB_PASS</password>
            <dbname>$MAGE_DB_NAME</dbname>
            <initStatements><![CDATA[SET NAMES utf8]]></initStatements>
            <active>1</active>
        </connection>
```

Deinstallation
--------------

#### via [Ffuenf_MageTrashApp](https://github.com/ffuenf/Ffuenf_MageTrashApp)

An additional module called [Ffuenf_MageTrashApp](https://github.com/ffuenf/Ffuenf_MageTrashApp) has been installed to help you to uninstall this extension in a clean way.
If it is not yet installed, please install it from [Ffuenf_MageTrashApp](https://github.com/ffuenf/Ffuenf_MageTrashApp)
If it is installed, go to your backend menu System > Configuration > Advanced > MageTrashApp, then click on the tab "Extension Installed", select the drop down option "Uninstall" of this extension and press "Save Config" button to uninstall
If you use this extension, you don't need to make any queries in your database as explained below in case of manually uninstallation.

#### via [modman](https://github.com/colinmollenhour/modman)

Use [modman](https://github.com/colinmollenhour/modman) to clear all files and symlinks:
```
modman clean Ffuenf_CheckoutHideShipping
```
see `sql/ffuenf_econda_setup/uninstall.sql` to clear all entries of this extension from your database.

Development
-----------
1. Fork the repository from GitHub.
2. Clone your fork to your local machine:

        $ git clone https://github.com/USER/Ffuenf_ConfigDotEnv

3. Create a git branch

        $ git checkout -b my_bug_fix

4. Make your changes/patches/fixes, committing appropriately
5. Push your changes to GitHub
6. Open a Pull Request

License and Author
------------------

- Author:: Achim Rosenhagen (<a.rosenhagen@ffuenf.de>)
- Copyright:: 2016, ffuenf

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.