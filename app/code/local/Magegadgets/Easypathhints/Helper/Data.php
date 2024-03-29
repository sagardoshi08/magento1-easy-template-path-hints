<?php

/**
 * @category   Magegadgets
 * @package    Magegadgets_Easypathhints
 * @author     Magegadgets@gmail.com
 * @website    http://www.magegadgets.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Magegadgets_Easypathhints_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getConfig($field, $section = 'option')
	{
		return Mage::getStoreConfig('easypathhints/' .$section .  '/' . $field);
	}

	public function log($data, $includeSep = false)
	{
		if (!$this->getConfig('enable_log')) {
			return;
		}
		if ($includeSep) {
			$separator = '=================================================================';
			Mage::log($separator, null, 'easypathhints.log', true);
		}
		Mage::log($data, null, 'easypathhints.log', true);
	}

	public function checkVersion($version, $operator = '>=')
	{
		return version_compare(Mage::getVersion(), $version, $operator);
	}

	public function getExtensionVersion()
	{
		$moduleCode = 'Magegadgets_Easypathhints';
		return (string) $currentVer = Mage::getConfig()->getModuleConfig($moduleCode)->version;
	}

	public function isActive()
	{
		return $this->getConfig('active');
	}

}