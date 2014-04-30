<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 6-2-14 16:03
 * Omschrijving: 
 */

class PdoPortfolio extends GenericPdo {

    function __construct(Settings $settings)
    {
        parent::__construct($settings);
    }

    public function create(Item $item) {
        try {
            $sql = 'INSERT INTO items (id, title, content, active, created, updated, lang, `user`, user_created)
              VALUES (:id, :title, :content, :active, :created, :updated, :lang, :user, :user_created)';
            $statement = $this->handler->prepare($sql);
            $statement->execute((array)$item);
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function createPicture(Picture $picture) {
        try {
            $picture->id = $this->getLastPictureId();
            $sql = 'INSERT INTO pictures (id, title, url, created, updated, `user`, user_created, portfolio)
                VALUES (:id, :title, :url, :created, :updated, :user, :user_created, :portfolio)';
            $statement = $this->handler->prepare($sql);
            $statement->execute((array)$picture);
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function getPicturesByItem($item) {
        $sql = 'SELECT * FROM pictures WHERE portfolio = :portfolio';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Picture');
        $statement->execute(array('portfolio' => $item));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getPicturesById($id) {
        $sql = 'SELECT * FROM pictures WHERE id = :id';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Picture');
        $statement->execute(array('id' => $id));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function update(Item $item) {
        try {
            $sql = 'UPDATE items SET id = :id, title = :title, content = :content, active = :active, created = :created,
                updated = :updated, lang = :lang, `user` = :user, user_created = :user_created
              WHERE id = :id';
            $statement = $this->handler->prepare($sql);
            $item = (array)$item;
            $item['lang'] = 'NL';
            $item['updated'] = time();
            $item['active'] = 1;
            $item['created'] = time();
            $statement->execute($item);
        } catch (PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine() . '<br />';
            return false;
        }
        return true;
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM items WHERE id = :id';
            $statement = $this->handler->prepare($sql);
            $statement->execute(array('id' => $id));
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine();
            return false;
        }
        return true;
    }

    public function deletePicture($id) {
        try {
            $sql = 'DELETE FROM pictures WHERE id = :id';
            $statement = $this->handler->prepare($sql);
            $statement->execute(array('id' => $id));
        } catch(PDOException $exception) {
            echo $exception->getMessage() . ' in ' . $exception->getCode() . ' at ' . $exception->getLine();
            return false;
        }
        return true;
    }

    public function get($id) {
        $sql = 'SELECT * FROM items WHERE id = :id';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Item');
        $statement->execute(array('id' => $id));
        return $statement->fetch();
    }

    public function getObject($id) {
        $sql = 'SELECT * FROM items WHERE id = :id';
        $statement = $this->handler->prepare($sql);
        $statement->execute(array('id' => $id));
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function lastId() {
        $sql = 'SELECT MAX(id) as maxId FROM items';
        $statement = $this->handler->prepare($sql);
        $statement->execute();
        $result =  $statement->fetch(PDO::FETCH_OBJ);
        if ($result) {
            return $result->maxId + 1;
        } else {
            return 1;
        }
    }

    public function getLastPictureId() {
        $sql = 'SELECT MAX(id) as maxId FROM pictures';
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
        $sql = 'SELECT * FROM items';
        $statement = $this->handler->prepare($sql);
        $statement->setFetchMode( PDO::FETCH_CLASS, 'Item');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function install() {
        try {
            $sql = 'CREATE TABLE IF NOT EXISTS `items` (
                  `id` int(11) NOT NULL,
                  `title` varchar(100) NOT NULL,
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

            $sql = 'CREATE TABLE IF NOT EXISTS `pictures` (
                  `id` int(11) NOT NULL,
                  `title` varchar(100) NOT NULL,
                  `url` varchar(250) NOT NULL,
                  `created` varchar(50) NULL,
                  `updated` varchar(50) NULL,
                  `user` int(11) NOT NULL,
                  `user_created` varchar(50) NULL,
                  `portfolio` int(11) NOT NULL,
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