<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 6-2-14 16:21
 * Omschrijving: 
 */

class Settings {

    protected $_values = array();

    protected $settingsFile = 'config.xml';

    function __construct()
    {
        $this->settingsFile = 'http://' . $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] . '/config/' . $this->settingsFile;
        $settings = simplexml_load_file($this->settingsFile);
        $this->environment = (string)$settings->environment;
        $this->adminsitename = (string)$settings->adminsitename;
        $this->adminsitedescription = (string)$settings->adminsitedescription;
        $this->profileFolder = (string)$settings->profileFolder;
        $this->pageFolder = (string)$settings->pageFolder;
        $this->snippetFolder = (string)$settings->snippetFolder;
        $this->portfolioFolder = (string)$settings->portfolioFolder;
        $this->frontendName = (string)$settings->frontendName;
        $this->frontendDescription = (string)$settings->frontendDescription;
        $this->frontendTitle = (string)$settings->frontendTitle;
        $this->contactEmail = (string)$settings->contactEmail;
        foreach($settings->children() as $children) {
            if ((string)$children->attributes()->environment == $this->environment) {
                foreach($children as $child) {
                    $this->_values[$child->getName()] = (string)$child;
                }
            }
        }
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->_values)) {
            return $this->_values[$key];
        } else {
            return 'Property ' . $key . ' doesn\'t exsists';
        }
    }

    public function __set($key, $value)
    {
        $this->_values[$key] = $value;
    }
}