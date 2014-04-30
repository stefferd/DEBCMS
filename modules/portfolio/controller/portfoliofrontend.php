<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 21:58
 */

class PortfolioFrontend {

    private $tpl = null;
    private $page = null;
    private $action = null;
    private $model = null;
    private $settings = null;

    function __construct($settings, $page, $action)
    {
        $this->page = $page;
        $this->action = $action;
        $this->model = new PdoPortfolio($settings);
        $this->settings = $settings;
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir($settings->portfolioFolder . '/controller/frontend/templates');
        $this->tpl->setCompileDir($settings->portfolioFolder . '/controller/frontend/templates_c');

    }

    public function getContent($post = null) {
        switch($this->page) {
            case 'view':
                return $this->get();
                break;
            default:
                return $this->get();
                break;
        }
    }

    private function get() {
        $items = $this->model->all();
        $picturesByItem = array();
        foreach($items as $item) {
            $pictures = $this->model->getPicturesByItem($item->id);
            array_push($picturesByItem, $pictures);
        }
        $this->tpl->assignByRef('picturesByItems', $picturesByItem);
        $this->tpl->assignByRef('items', $items);
        $this->tpl->assign('url', $this->settings->url);
        return $this->tpl->fetch('overview.tpl');
    }
}