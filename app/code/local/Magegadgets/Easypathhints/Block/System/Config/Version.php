<?php

/**
 * @category   Magegadgets
 * @package    Magegadgets_Easypathhints
 * @author     magegadgets@gmail.com
 * @website    http://www.Magegadgets.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Magegadgets_Easypathhints_Block_System_Config_Version extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    const EXTENSION_URL = 'http://www.Magegadgets.com/easy-template-path-hints.html';

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return sprintf('<a href="%s" title="Easy Template Path Hints" target="_blank">%s</a>', self::EXTENSION_URL, Mage::helper('easypathhints')->getExtensionVersion());
    }
}