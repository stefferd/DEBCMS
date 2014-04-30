<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 22:02
 */
class SnippetBackend {

    private $tpl = null;
    private $presets = null;
    private $action = null;
    private $view = null;
    private $model = null;
    private $settings = null;

    function __construct($settings, $attributes, $view, $action)
    {
        $this->presets = $attributes;
        $this->view = $view;
        $this->action = $action;
        $this->settings = $settings;

        $this->model = new PdoSnippet($settings);
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('../' . $settings->snippetFolder . '/controller/backend/templates');
        $this->tpl->setCompileDir('../' . $settings->snippetFolder . '/controller/backend/templates_c');
    }

    public function getContent($post = null, $item = null, $subitem = null) {
        switch($this->view) {
            case 'list':
                return $this->getOverview();
                break;
            case 'add':
                return $this->getEdit();
                break;
            case 'save':
                return $this->save($post);
                break;
            case 'update':
                return $this->update($post, $item);
            case 'delete':
                return $this->delete($item);
                break;
            case 'edit':
                return $this->getEdit($item);
                break;
            default:
                return $this->getOverview();
                break;
        }
    }

    private function getEdit($id = null) {
        $page = null;
        if ($id != null) {
            $snippet = $this->model->getObject($id);
        }
        $this->tpl->assignByRef('snippet', $snippet);
        $this->tpl->assign('url', $this->settings->url);
        return $this->tpl->fetch('form.tpl');
    }

    private function getOverview($message= null, $messageType = null) {
        $snippets = $this->model->all();
        $this->tpl->assignByRef('snippets', $snippets);
        $this->tpl->assign('message', $message);
        $this->tpl->assign('messageType', $messageType);
        $this->tpl->assign('url' , $this->settings->url);
        return $this->tpl->fetch('overview.tpl');
    }

    private function save($post) {
        $id = $this->model->lastId();
        $snippet = new Snippet(1, $post['content'], time(), $id, 'NL', $post['technical'],
            $post['title'], time(), $_SESSION['user_id'], $_SESSION['user_created']);
        if ($this->model->create($snippet)) {
            return $this->getOverview();
        }
    }

    private function update($post, $id) {
        $snippet = $this->model->get($id);
        $snippet->id = $id;
        $snippet->title = $post['title'];
        $snippet->technical = $post['technical'];
        $snippet->content = $post['content'];
        $snippet->updated = time();
        $snippet->active = 1;
        $snippet->lang = 'NL';
        $snippet->user = $_SESSION['user_id'];
        $snippet->user_created = $_SESSION['user_created'];
        if ($this->model->update($snippet)) {
            return $this->getOverview('De geselecteerde snippet is aangepast', 'success');
        }
    }

    private function delete($id) {
        if ($this->model->delete($id)) {
            return $this->getOverview('De geselecteerde snippet is verwijderd', 'success');
        } else {
            return $this->getOverview('De geselecteerde snippet is niet verwijderd, er is iets mis gegaan', 'danger');
        }
    }

} 