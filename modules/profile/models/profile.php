<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 6-2-14 16:03
 * Omschrijving: 
 */

class PdoProfile extends GenericPdo {

    function __construct(Settings $settings)
    {
        parent::__construct($settings);
    }

    public function create(Profile $profile) {
        try {
            if (get_class($profile) == 'User') {
                $sql = 'INSERT INTO profile (id, name, lastname, emailaddress, password, birthday, created, updated, activated, lastlogin, `level`, `group`, street, housenumber, zipcode, city, country, lang)
                  VALUES (:id, :name, :lastname, :emailaddress, :password, :birthday, :created, :updated, :activated, :lastlogin, :level, :group, :street, :housenumber, :zipcode, :city, :country, :lang)';
            } elseif (get_class($profile) == 'Administrator') {
                $sql = 'INSERT INTO profile (id, name, lastname, emailaddress, password, birthday, created, updated, activated, lastlogin, `level`, `group`)
                  VALUES (:id, :name, :lastname, :emailaddress, :password, :birthday, :created, :updated, :activated, :lastlogin, :level, :group)';
            } else {
                $sql = 'INSERT INTO profile (id, name, lastname, emailaddress, password, birthday, created, updated, activated, lastlogin)
                  VALUES (:id, :name, :lastname, :emailaddress, :password, :birthday, :created, :updated, :activated, :lastlogin)';
            }
            $statement = $this->handler->prepare($sql);
            $statement->execute((array)$profile);
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function update(Profile $profile) {
        try {
            if (get_class($profile) == 'User') {
                $sql = 'UPDATE profile SET name = :name, lastname = :lastname, emailaddress = :emailaddress, password = :password, birthday = :birthday
                , created = :created, updated = :updated, activated = :activated, lastlogin = :lastlogin, `level` = :level, `group` = :group, street = :street
                , housenumber = :housenumber, zipcode = :zipcode, city = :city, country = :country, lang = :lang WHERE id = :id';
            } elseif (get_class($profile) == 'Administrator') {
                $sql = 'UPDATE profile SET name = :name, lastname = :lastname, emailaddress = :emailaddress, password = :password, birthday = :birthday, created = :created
            , updated = :updated, activated = :activated, lastlogin = :lastlogin, `level` = :level, `group` = :group WHERE id = :id';
            } else {
                $sql = 'UPDATE profile SET name = :name, lastname = :lastname, emailaddress = :emailaddress, password = :password, birthday = :birthday, created = :created
            , updated = :updated, activated = :activated, lastlogin = :lastlogin WHERE id = :id';
            }
            $statement = $this->handler->prepare($sql);
            $statement->execute((array)$profile);
        } catch (PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function delete($id, $created) {
        try {
            $sql = 'DELETE FROM profile WHERE id = :id and created = :created';
            $statement = $this->handler->prepare($sql);
            $statement->execute(array('id' => $id, 'created' => $created));
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine();
            return false;
        }
        return true;
    }

    public function login($username, $password) {
        $sql = 'SELECT * FROM profile WHERE emailaddress = :emailaddress AND password = :password';
        $statement = $this->handler->prepare($sql);
        $statement->execute(array('emailaddress' => $username, 'password' => $password));
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function get($id, $created) {
        $sql = 'SELECT * FROM profile WHERE id = :id AND created = :created';
        $statement = $this->handler->prepare($sql);
        $statement->execute(array('id' => $id, 'created' => $created));
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function getAdmin($id, $created) {
        $sql = 'SELECT id, name, lastname, emailaddress, password, birthday, created, updated, activated, lastlogin, `level`, `group` FROM profile WHERE id = :id AND created = :created';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Administrator');
        $statement->execute(array('id' => $id, 'created' => $created));
        return $statement->fetch();
    }

    public function lastId() {
        $sql = 'SELECT MAX(id) as maxId FROM profile';
        $statement = $this->handler->prepare($sql);
        $statement->execute();
        $result =  $statement->fetch(PDO::FETCH_OBJ);
        if ($result) {
            return $result->maxId + 1;
        } else {
            return 1;
        }
    }

    public function all($limit = 0) {
        $sql = 'SELECT * FROM profile';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Administrator');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function install() {
        try {
            $sql = 'CREATE TABLE IF NOT EXISTS `profile` (
                  `id` int(11) NOT NULL,
                  `name` varchar(100) NOT NULL,
                  `lastname` varchar(250) NOT NULL,
                  `emailaddress` varchar(250) NOT NULL,
                  `password` varchar(250) NOT NULL,
                  `birthday` varchar(50) DEFAULT NULL COMMENT \'Timestamp\',
                  `created` varchar(50) NOT NULL COMMENT \'Timestamp\',
                  `updated` varchar(50) DEFAULT NULL COMMENT \'Timestamp\',
                  `activated` int(11) DEFAULT \'0\',
                  `lastlogin` varchar(50) DEFAULT NULL COMMENT \'Timestamp\',
                  `level` int(11) NOT NULL DEFAULT \'1\',
                  `group` int(11) NOT NULL DEFAULT \'1\',
                  `street` varchar(250) DEFAULT NULL,
                  `housenumber` varchar(10) DEFAULT NULL,
                  `zipcode` varchar(10) DEFAULT NULL,
                  `city` varchar(250) DEFAULT NULL,
                  `country` varchar(50) DEFAULT NULL,
                  `lang` varchar(10) NOT NULL DEFAULT \'NL\',
                  PRIMARY KEY (`id`,`created`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';
            $statement = $this->handler->prepare($sql);
            $statement->execute();
        } catch (PDOException $exception) {
            return false;
        }
        return true;
    }
}