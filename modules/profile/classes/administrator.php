<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 6-2-14 15:38
 * Omschrijving: 
 */

class Administrator extends Profile {

    public $level;
    public $group;

    function __construct($arguments = array())
    {
        parent::__construct($arguments);
        if (count($arguments) > 0) {
            $this->level = $arguments['level'];
            $this->group = $arguments['group'];
        }
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


}