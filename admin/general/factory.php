<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 16/02/14
 * Time: 23:47
 */

class Factory {

    private $modules = null;
    private $settings = null;
    private $posted = null;
    private $item = null;
    private $subitem = null;
    private $files = null;
    private $defaults = array(
        array('module' => array('name' => 'Administrators', 'folder' => 'modules/profile/'), 'active' => true, 'limits' => 0, 'type' => 'administrators'),
        array('module' => array('name' => 'Pages', 'folder' => 'modules/pages/'), 'active' => true, 'limits' => 10, 'type' => 'pages'),
        array('module' => array('name' => 'Snippets', 'folder' => 'modules/snippets/'), 'active' => true, 'limits' => 10, 'type' => 'snippets'),
        array('module' => array('name' => 'Portfolio', 'folder' => 'modules/portfolio/'), 'active' => true, 'limits' => 10, 'type' => 'portfolio')
    );

    function __construct($settings)
    {
        $this->settings = $settings;
        $this->modules = $this->defaults;
    }

    public function setPost($post) {
        $this->posted = $post;
    }

    public function setFiles($files) {
        $this->files = $files;
    }

    public function setItem($item) {
        $this->item = $item;
    }

    public function setSubitem($subitem) {
        $this->subitem = $subitem;
    }

    public function createController($type, $view, $action) {
        $moduleAttributes = $this->getModuleAttributes($type);
        if ($type == 'administrators') {
            $profileBackendController = new ProfileBackend($this->settings, $moduleAttributes, $view, $action);
            $content = $profileBackendController->getContent($this->posted, $this->item, $this->subitem);
        } elseif ($type == 'pages') {
            $pageBackendController = new PageBackend($this->settings, $moduleAttributes, $view, $action);
            $content = $pageBackendController->getContent($this->posted, $this->item, $this->subitem);
        } elseif ($type == 'snippets') {
            $snippetBackendController = new SnippetBackend($this->settings, $moduleAttributes, $view, $action);
            $content = $snippetBackendController->getContent($this->posted, $this->item, $this->subitem);
        } elseif ($type == 'settings') {
            $settingsController = new SettingsBackend($this->settings, $moduleAttributes, $view, $action);
            $content = $settingsController->getContent($this->posted, $this->item, $this->subitem);
        } elseif ($type == 'portfolio') {
            $portfolioController = new PortfolioBackend($this->settings, $moduleAttributes, $view, $action);
            $content = $portfolioController->getContent($this->posted, $this->item, $this->subitem, $this->files);
        } else {
            $content = '404';
        }
        return $content;
    }

    private function getModuleAttributes($type) {
        foreach($this->modules as $module) {
            if ($module['type'] == $type) {
                return $module;
            }
        }
        return null;
    }
} 