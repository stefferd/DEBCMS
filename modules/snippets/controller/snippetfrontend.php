<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 21:58
 */

class SnippetFrontend {

    private $tpl = null;
    private $model = null;
    private $settings = null;

    function __construct($settings)
    {
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('../' . $settings->snippetFolder . '/controller/frontend/templates');
        $this->tpl->setCompileDir('../' . $settings->snippetFolder . '/controller/frontend/templates');
        $this->model = new PdoSnippet($settings);
        $this->settings = $settings;
    }

    public function get($technical) {
        $snippet = $this->model->getByTechnical($technical);
        $content = str_replace('${url}', $this->settings->url, $snippet->content);
        return $content;
    }
}