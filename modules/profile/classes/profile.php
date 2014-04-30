<?php
/**
 * Created by DEB Media
 * Author: Stef van den Berg
 * Date: 6-2-14 15:30
 * Description: Class that
 */

abstract class Profile {

    public $id;
    public $name;
    public $lastname;
    public $emailaddress;
    public $password;
    public $birthday;
    public $created;
    public $updated;
    public $activated;
    public $lastlogin;

    function __construct($arguments = array()) {
        if (count($arguments) > 0) {
            $this->id = $arguments['id'];
            $this->name = $arguments['name'];
            $this->lastname = $arguments['lastname'];
            $this->emailaddress = $arguments['emailaddress'];
            $this->password = $arguments['password'];
            $this->birthday = $arguments['birthday'];
            $this->created = $arguments['created'];
            $this->updated = $arguments['updated'];
            $this->activated = $arguments['activated'];
            $this->lastlogin = $arguments['lastlogin'];
        }
    }

    /**
     * @param mixed $activated
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
    }

    /**
     * @return mixed
     */
    public function &getActivated()
    {
        return $this->activated;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function &getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function &getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $emailaddress
     */
    public function setEmailaddress($emailaddress)
    {
        $this->emailaddress = $emailaddress;
    }

    /**
     * @return mixed
     */
    public function &getEmailaddress()
    {
        return $this->emailaddress;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function &getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $lastlogin
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;
    }

    /**
     * @return mixed
     */
    public function &getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function &getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function &getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function &getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function &getUpdated()
    {
        return $this->updated;
    }


}