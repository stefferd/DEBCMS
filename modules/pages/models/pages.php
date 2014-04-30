<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 6-2-14 16:03
 * Omschrijving: 
 */

class PdoPage extends GenericPdo {

    function __construct(Settings $settings)
    {
        parent::__construct($settings);
    }

    public function create(Page $page) {
        try {
            $sql = 'INSERT INTO page (id, title, technical, content, tags, description, active, state, version, `type`, created, updated, lang, `user`, user_created)
              VALUES (:id, :title, :technical, :content, :tags, :description, :active, :state, :version, :type, :created, :updated, :lang, :user, :user_created)';
            $statement = $this->handler->prepare($sql);
            $statement->execute((array)$page);
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function update(Page $page, $currentState) {
        try {
            $sql = 'UPDATE page SET title = :title, technical = :technical, content = :content, tags = :tags,
              description = :description, active = :active, state = :state, version = :version, `type` = :type,
              created = :created, updated = :updated, lang = :lang, `user` = :user, user_created = :user_created
              WHERE id = :id AND state = :state';
            $statement = $this->handler->prepare($sql);
            $page = (array)$page;
            $page['lang'] = 'NL';
            $page['updated'] = time();
            $page['version'] = 1;
            $page['state'] = $currentState;
            $statement->execute($page);
        } catch (PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function delete($id, $state) {
        try {
            $sql = 'DELETE FROM page WHERE id = :id and state = :state';
            $statement = $this->handler->prepare($sql);
            $statement->execute(array('id' => $id, 'state' => $state));
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine();
            return false;
        }
        return true;
    }

    public function get($id, $state) {
        $sql = 'SELECT * FROM page WHERE id = :id AND state = :state';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Page');
        $statement->execute(array('id' => $id, 'state' => $state));
        return $statement->fetch();
    }

    public function getByTechnical($technical) {
        $sql = 'SELECT * FROM page WHERE technical = :technical and state = 1 and active = 1';
        $statement = $this->handler->prepare($sql);
        $statement->execute(array('technical' => $technical));
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function getObject($id, $state) {
        $sql = 'SELECT * FROM page WHERE id = :id AND state = :state';
        $statement = $this->handler->prepare($sql);
        $statement->execute(array('id' => $id, 'state' => $state));
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function lastId() {
        $sql = 'SELECT MAX(id) as maxId FROM page';
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
        $sql = 'SELECT * FROM page';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Page');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function install() {
        try {
            $sql = 'CREATE TABLE IF NOT EXISTS `page` (
                  `id` int(11) NOT NULL,
                  `title` varchar(100) NOT NULL,
                  `technical` varchar(250) NOT NULL,
                  `content` TEXT NULL,
                  `tags` varchar(250) NOT NULL,
                  `description` TEXT NULL,
                  `active` int(11) DEFAULT 1,
                  `state` int(11) DEFAULT 1,
                  `version` int(11) DEFAULT 1,
                  `type` varchar(50)  DEFAULT \'PAGE\' NULL,
                  `created` varchar(50) NULL,
                  `updated` varchar(50) NULL,
                  `user` int(11) NOT NULL,
                  `user_created` varchar(50) NULL,
                  `lang` varchar(10) NOT NULL DEFAULT \'NL\',
                  PRIMARY KEY (`id`,`state`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';
            $statement = $this->handler->prepare($sql);
            $statement->execute();
        } catch (PDOException $exception) {
            return false;
        }
        return true;
    }
}