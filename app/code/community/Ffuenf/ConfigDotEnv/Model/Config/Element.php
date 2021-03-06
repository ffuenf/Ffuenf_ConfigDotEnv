<?php
/**
 * Ffuenf_ConfigDotEnv extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

require(MAGENTO_ROOT.'/vendor/vlucas/phpdotenv/src/Dotenv.php');
require(MAGENTO_ROOT.'/vendor/vlucas/phpdotenv/src/Loader.php');

class Ffuenf_ConfigDotEnv_Model_Config_Element extends Mage_Core_Model_Config_Element
{
    public function xmlentities($value = null)
    {
        $dotenv = new Dotenv\Dotenv(MAGENTO_ROOT);
        $dotenv->load();
        $value = parent::xmlentities($value);
        if (substr($value, 0, 1) == "$") {
            $value = getenv(substr($value, 1));
        }
        return $value;
    }
}
