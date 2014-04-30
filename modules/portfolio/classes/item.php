<?php
/**
 * Created by DEB Media
 * Author: Stef van den Berg
 * Date: 6-2-14 15:30
 * Description: Class that
 */

class Item {

    public $id; // PK
    public $title;
    public $content;
    public $active;
    public $created;
    public $updated;
    public $lang;
    public $user;
    public $user_created;

    function __construct($active = null, $content = null, $created = null, $id = null, $lang = null, $title = null,
                         $updated = null, $user = null, $user_created = null)
    {
        $this->active = $active;
        $this->content = $content;
        $this->created = $created;
        $this->id = $id;
        $this->lang = $lang;
        $this->title = $title;
        $this->updated = $updated;
        $this->user = $user;
        $this->user_created = $user_created;
    }


}