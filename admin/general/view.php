<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 16/02/14
 * Time: 23:45
 */

class View {

    private $factory;
    private $content;
    private $tpl;
    private $settings;
    private $view;

    function __construct($settings, $module, $action, $item, $subitem, $post = null, $files = null)
    {
        $this->tpl = new Smarty();
        $this->settings = $settings;
        $this->view = $action;
        $this->tpl->setTemplateDir('includes/templates');
        $this->tpl->setCompileDir('includes/templates_c');
        $this->factory = new Factory($settings);
        if ($post) {
            $this->factory->setPost($post);
        }
        if ($item) {
            $this->factory->setItem($item);
        }
        if ($subitem) {
            $this->factory->setSubitem($subitem);
        }
        if ($files) {
            $this->factory->setFiles($files);
        }
        $this->content = $this->factory->createController($module, $action, $item);
    }

    public function create() {
        $this->tpl->assign('siteTitle', $this->view . ' - ' . $this->settings->adminsitename);
        $this->tpl->assign('siteName', $this->settings->adminsitename);
        $this->tpl->assign('siteDescription', $this->settings->adminsitedescription);
        $this->tpl->assign('siteUrl', $this->settings->url);
        $this->tpl->assignByRef('content', $this->content);
        $this->tpl->display('page.tpl');
    }
}