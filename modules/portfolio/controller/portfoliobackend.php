<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 22:02
 */
class PortfolioBackend {

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

        $this->model = new PdoPortfolio($settings);
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('../' . $settings->portfolioFolder . '/controller/backend/templates');
        $this->tpl->setCompileDir('../' . $settings->portfolioFolder . '/controller/backend/templates_c');
    }

    public function getContent($post = null, $item = null, $subitem = null, $files = null) {
        switch($this->view) {
            case 'list':
                return $this->getOverview();
                break;
            case 'add':
                return $this->getEdit($item);
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
            case 'add-image':
                return $this->savePicture($item, $post, $files);
                break;
            case 'delete-image':
                return $this->deletePicture($item);
                break;
            default:
                return $this->getOverview();
                break;
        }
    }

    private function getOverview($message= null, $messageType = null) {
        $items = $this->model->all();
        $this->tpl->assignByRef('items', $items);
        $this->tpl->assign('message', $message);
        $this->tpl->assign('messageType', $messageType);
        $this->tpl->assign('url' , $this->settings->url);
        return $this->tpl->fetch('overview.tpl');
    }


    private function getEdit($id = null, $message = '') {
        $item = null;
        $pictures = null;
        if ($id != null) {
            $item = $this->model->getObject($id);
            $pictures = $this->model->getPicturesByItem($id);
        }
        $this->tpl->assign('message', $message);
        $this->tpl->assignByRef('item', $item);
        $this->tpl->assignByRef('pictures', $pictures);
        $this->tpl->assign('url', $this->settings->url);
        return $this->tpl->fetch('form.tpl');
    }

    private function save($post) {
        $id = $this->model->lastId();
        $item = new Item(1, $post['content'], time(), $id, 'NL', $_POST['title'],
            null, $_SESSION['user_id'], $_SESSION['user_created']);
        if ($this->model->create($item)) {
            return $this->getOverview();
        }
    }

    private function update($post, $id) {
        $page = $this->model->get($id);
        $page->id = $id;
        $page->title = $post['title'];
        $page->content = $post['content'];
        $page->updated = time();
        $page->user = $_SESSION['user_id'];
        $page->user_created = $_SESSION['user_created'];
        if ($this->model->update($page)) {
            return $this->getOverview('Het geselecteerde item is aangepast', 'success');
        }
    }

    private function savePicture($id, $post, $files) {
        $image = new Images();
        $image->setContent($files);
        $url = $image->upload();
        $message = '';
        if ($url != 1) {
            $picture = new Picture();
            $picture->title = $post['title'];
            $picture->url = $url;
            $picture->user = $_SESSION['user_id'];
            $picture->user_created = $_SESSION['user_created'];
            $picture->created = time();
            $picture->updated = time();
            $picture->portfolio = $id;

            $this->model->createPicture($picture);
        } else {
            $message = 'Er is iets fout gegaan tijdens het uploaden, is het bestand groter dan 3 mb? Verklein de afbeelding dan. En is het een afbeelding met de extensie .jpg, .png, .gif, .jpeg?';
        }
        return $this->getEdit($id, $message);
    }

    private function deletePicture($id) {
        $picture = $this->model->getPicturesById($id);
        $url = $picture->url;
        $thumb = 'small_' . $url;

        @unlink('../upload/images/' . $url);
        @unlink('../upload/images/' . $thumb);

        $this->model->deletePicture($id);
        return $this->getEdit($picture->portfolio);
    }

    private function delete($id) {
        if ($this->model->delete($id)) {
            return $this->getOverview('Het geselecteerde item is verwijderd', 'success');
        } else {
            return $this->getOverview('Het geselecteerde item is niet verwijderd, er is iets mis gegaan', 'danger');
        }
    }

} 