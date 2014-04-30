<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 6-2-14 15:59
 * Omschrijving: 
 */

class User extends Profile {

    public $level;
    public $group;
    public $street;
    public $housenumber;
    public $zipcode;
    public $city;
    public $country;
    public $lang;

    function __construct($arguments = array())
    {
        parent::__construct($arguments);
        if (count($arguments) > 0) {
            $this->level = $arguments['level'];
            $this->group = $arguments['group'];
            $this->street = $arguments['street'];
            $this->housenumber = $arguments['housenumber'];
            $this->zipcode = $arguments['zipcode'];
            $this->city = $arguments['city'];
            $this->country = $arguments['country'];
            $this->lang = $arguments['lang'];
        }
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function &getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function &getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return mixed
     */
    public function &getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $housenumber
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;
    }

    /**
     * @return mixed
     */
    public function &getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return mixed
     */
    public function &getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function &getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function &getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return mixed
     */
    public function &getZipcode()
    {
        return $this->zipcode;
    }


} 