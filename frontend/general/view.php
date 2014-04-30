<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 16/02/14
 * Time: 23:45
 */

class FrontendView {

    private $factory;
    private $content;
    private $tpl;
    private $settings;
    private $action;
    private $view;

    function __construct($settings, $module, $action, $item, $subitem)
    {
        $this->tpl = new Smarty();
        $this->settings = $settings;
        $this->view = $module;
        $this->action = $action;
        $this->tpl->setTemplateDir('frontend/includes/templates/');
        $this->tpl->setCompileDir('frontend/includes/templates_c/');
        $this->factory = new FrontendFactory($settings);
        if ($item) {
            $this->factory->setItem($item);
        }
        if ($subitem) {
            $this->factory->setSubitem($subitem);
        }
        $this->content = $this->factory->createController($module, $action, $item, $post);
    }

    public function create($post) {
        $pageFrontend = new PageFrontend($this->settings, $this->view, $this->action);
        $page = $pageFrontend->getPage();

        $menuitems = $pageFrontend->getMenuItems();
        $this->tpl->assignByRef('menuitems', $menuitems);

        $this->tpl->assign('frontendTitle', $this->settings->frontendName . ' | ' . $this->view);
        $this->tpl->assign('frontendName', $this->settings->frontendName);
        $this->tpl->assign('frontendDescription', $this->settings->frontendDescription);
        $this->tpl->assign('url', $this->settings->url);
        $this->tpl->assignByRef('content', $this->content);
        $snippet = new SnippetFrontend($this->settings);
        $this->tpl->assign('view', $this->view);
        if ($page != null) {
            $this->tpl->assign('metatags', $page->tags);
            $this->tpl->assign('frontendDescription', $page->description);
            $this->tpl->assign('frontendTitle', $this->settings->frontendName . ' | ' . $page->title);
        }
        if ($this->view == 'portfolio') {
            $portfolioFrontend = new PortfolioFrontend($this->settings, $this->view, $this->action);
            $this->content .= $portfolioFrontend->getContent(null);
        } else if ($this->view == 'contact') {
            $contactSnippet = $snippet->get('contact');
            $contactSendSnippet = $snippet->get('contact-send');
            $this->content .= $pageFrontend->getContact($post, $contactSnippet, $contactSendSnippet);
        }
        $scontent = '';
        if ($this->view == 'home') {
            $scontent = $snippet->get('jumbotron');
        }
        $this->tpl->assign('snippet', $scontent);
        $this->tpl->display('page.tpl');
    }
}