<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\DevicesDetection;

require_once PIWIK_INCLUDE_PATH . '/plugins/DevicesDetection/functions.php';

class Visitor
{
    private $details = array();

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function getDeviceType()
    {
        return getDeviceTypeLabel($this->details['config_device_type']);
    }

    public function getOperatingSystemCode()
    {
        return $this->details['config_os'];
    }

    public function getOperatingSystem()
    {
        return getOsFullName($this->details['config_os']);
    }

    public function getOperatingSystemIcon()
    {
        return getOsLogo($this->details['config_os']);
    }

    public function getBrowserEngineDescription()
    {
        return getBrowserEngineName($this->getBrowserEngine());
    }

    public function getBrowserEngine()
    {
        return $this->details['config_browser_engine'];
    }

    public function getBrowserCode()
    {
        return $this->details['config_browser_name'];
    }

    public function getBrowserVersion()
    {
        return $this->details['config_browser_version'];
    }

    public function getBrowser()
    {
        return getBrowserNameWithVersion($this->details['config_browser_name'] . ";" . $this->details['config_browser_version']);
    }

    public function getBrowserName()
    {
        return getBrowserName($this->details['config_browser_name'] . ";" . $this->details['config_browser_version']);
    }

    public function getBrowserIcon()
    {
        return getBrowserLogo($this->details['config_browser_name'] . ";" . $this->details['config_browser_version']);
    }
}