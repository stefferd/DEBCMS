<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 22:02
 */
class SettingsBackend {

    private $tpl = null;
    private $presets = null;
    private $action = null;
    private $view = null;
    private $settings = null;

    function __construct($settings, $attributes, $view, $action)
    {
        $this->presets = $attributes;
        $this->view = $view;
        $this->action = $action;
        $this->settings = $settings;

        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('../modules/settings/controller/backend/templates');
        $this->tpl->setCompileDir('../modules/settings/controller/backend/templates_c');
    }

    public function getContent($post = null, $item = null, $subitem = null) {
        switch($this->view) {
            case 'list':
                return $this->getOverview();
                break;
            default:
                return $this->getOverview();
                break;
        }
    }

    private function getOverview($message= null, $messageType = null) {
        $this->tpl->assign('url' , $this->settings->url);
        $this->tpl->assign('message', $message);
        $this->tpl->assign('messageType', $messageType);
        return $this->tpl->fetch('overview.tpl');
    }
} 