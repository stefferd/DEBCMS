<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 16/02/14
 * Time: 23:47
 */

class FrontendFactory {

    private $modules = null;
    private $settings = null;
    private $posted = null;
    private $item = null;
    private $subitem = null;

    function __construct($settings)
    {
        $this->settings = $settings;
    }

    public function setPost($post) {
        $this->posted = $post;
    }

    public function setItem($item) {
        $this->item = $item;
    }

    public function setSubitem($subitem) {
        $this->subitem = $subitem;
    }

    public function createController($module, $action, $item) {
        $content = '';
        $page = new PageFrontend($this->settings, $module, $action);;
        $content .= $page->getContent($this->posted, $this->item, $this->subitem);
        return $content;
    }
} 