<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 6-2-14 16:03
 * Omschrijving: 
 */

class PdoSnippet extends GenericPdo {

    function __construct(Settings $settings)
    {
        parent::__construct($settings);
    }

    public function create(Snippet $snippet) {
        try {
            $sql = 'INSERT INTO snippet (id, title, technical, content, active, created, updated, lang, `user`, user_created)
              VALUES (:id, :title, :technical, :content, :active, :created, :updated, :lang, :user, :user_created)';
            $statement = $this->handler->prepare($sql);
            $statement->execute((array)$snippet);
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function update(Snippet $snippet) {
        try {
            $sql = 'UPDATE snippet SET title = :title, technical = :technical, content = :content, active = :active,
              created = :created, updated = :updated, lang = :lang, `user` = :user, user_created = :user_created
              WHERE id = :id AND state = :state';
            $statement = $this->handler->prepare($sql);
            $statement->execute((array)$snippet);
        } catch (PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM snippet WHERE id = :id';
            $statement = $this->handler->prepare($sql);
            $statement->execute(array('id' => $id));
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine();
            return false;
        }
        return true;
    }

    public function get($id) {
        $sql = 'SELECT * FROM snippet WHERE id = :id';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Page');
        $statement->execute(array('id' => $id));
        return $statement->fetch();
    }

    public function getObject($id) {
        $sql = 'SELECT * FROM snippet WHERE id = :id';
        $statement = $this->handler->prepare($sql);
        $statement->execute(array('id' => $id));
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function getByTechnical($technical) {
        $sql = 'SELECT * FROM snippet WHERE technical = :technical';
        $statement = $this->handler->prepare($sql);
        $statement->execute(array('technical' => $technical));
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function lastId() {
        $sql = 'SELECT MAX(id) as maxId FROM snippet';
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
        $sql = 'SELECT * FROM snippet';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Snippet');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function install() {
        try {
            $sql = 'CREATE TABLE IF NOT EXISTS `snippet` (
                  `id` int(11) NOT NULL,
                  `title` varchar(100) NOT NULL,
                  `technical` varchar(250) NOT NULL,
                  `content` TEXT NULL,
                  `active` int(11) DEFAULT 1,
                  `created` varchar(50) NULL,
                  `updated` varchar(50) NULL,
                  `user` int(11) NOT NULL,
                  `user_created` varchar(50) NULL,
                  `lang` varchar(10) NOT NULL DEFAULT \'NL\',
                  PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';
            $statement = $this->handler->prepare($sql);
            $statement->execute();
        } catch (PDOException $exception) {
            return false;
        }
        return true;
    }
}