<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 22:02
 */
class PageBackend {

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

        $this->model = new PdoPage($settings);
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('../' . $settings->pageFolder . '/controller/backend/templates');
        $this->tpl->setCompileDir('../' . $settings->pageFolder . '/controller/backend/templates_c');
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
                return $this->update($post, $item, $subitem);
            case 'delete':
                return $this->delete($item, $subitem);
                break;
            case 'edit':
                return $this->getEdit($item, $subitem);
                break;
            default:
                return $this->getOverview();
                break;
        }
    }

    private function getEdit($id = null, $state = null) {
        $page = null;
        if ($id != null && $state != null) {
            $page = $this->model->getObject($id, $state);
        }
        $this->tpl->assignByRef('page', $page);
        $this->tpl->assign('url', $this->settings->url);
        return $this->tpl->fetch('form.tpl');
    }

    private function getOverview($message= null, $messageType = null) {
        $pages = $this->model->all();
        $this->tpl->assignByRef('pages', $pages);
        $this->tpl->assign('message', $message);
        $this->tpl->assign('messageType', $messageType);
        $this->tpl->assign('url' , $this->settings->url);
        return $this->tpl->fetch('overview.tpl');
    }

    private function save($post) {
        $id = $this->model->lastId();
        $page = new Page(1, $post['content'], time(), $post['description'], $id,
            $post['state'], $post['tags'], $post['technical'], $post['title'], $post['type'], null,
            1, 'NL', $_SESSION['user_id'], $_SESSION['user_created']);
        if ($this->model->create($page)) {
            return $this->getOverview();
        }
    }

    private function update($post, $id, $state) {
        $page = $this->model->get($id, $state);
        $page->id = $id;
        $page->title = $post['title'];
        $page->technical = $post['technical'];
        $page->content = $post['content'];
        $page->updated = time();
        $page->type = $post['type'];
        $page->description = $post['description'];
        $page->tags = $post['tags'];
        $page->state = $post['state'];
        $page->active = ($post['state'] == 2) ? 1 : 0;
        $page->user = $_SESSION['user_id'];
        $page->user_created = $_SESSION['user_created'];
        if ($this->model->update($page, $state)) {
            return $this->getOverview('De geselecteerde pagina is aangepast', 'success');
        }
    }

    private function delete($id, $state) {
        if ($this->model->delete($id, $state)) {
            return $this->getOverview('De geselecteerde pagina is verwijderd', 'success');
        } else {
            return $this->getOverview('De geselecteerde pagina is niet verwijderd, er is iets mis gegaan', 'danger');
        }
    }

} 