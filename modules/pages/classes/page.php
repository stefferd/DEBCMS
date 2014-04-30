<?php
/**
 * Created by DEB Media
 * Author: Stef van den Berg
 * Date: 6-2-14 15:30
 * Description: Class that
 */

class Page {

    public $id; // PK
    public $title;
    public $technical;
    public $content;
    public $tags;
    public $description;
    public $active;
    public $state;  // PK
    public $version; // PK
    public $type;
    public $created;
    public $updated;
    public $lang;
    public $user;
    public $user_created;

    function __construct($active = null, $content = null, $created = null, $description = null, $id = null,
                         $state = null, $tags = null, $technical = null, $title = null, $type = null, $updated = null,
                         $version = null, $lang = null, $user = null, $user_created = null)
    {
        $this->active = $active;
        $this->content = $content;
        $this->created = $created;
        $this->description = $description;
        $this->id = $id;
        $this->state = $state;
        $this->tags = $tags;
        $this->technical = $technical;
        $this->title = $title;
        $this->type = $type;
        $this->updated = $updated;
        $this->version = $version;
        $this->lang = $lang;
        $this->user = $user;
        $this->user_created = $user_created;
    }
}