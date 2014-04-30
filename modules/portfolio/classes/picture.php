<?php
/**
 * Created by DEB Media
 * Author: Stef van den Berg
 * Date: 6-2-14 15:30
 * Description: Class that
 */

class Picture {

    public $id; // PK
    public $title;
    public $url;
    public $created;
    public $updated;
    public $user;
    public $user_created;
    public $portfolio;

    function __construct($created = null, $id = null, $title = null, $updated = null, $url = null, $portfolio = null,
                         $user = null, $user_created = null)
    {
        $this->created = $created;
        $this->id = $id;
        $this->title = $title;
        $this->updated = $updated;
        $this->url = $url;
        $this->user = $user;
        $this->user_created = $user_created;
        $this->portfolio = $portfolio;
    }
}