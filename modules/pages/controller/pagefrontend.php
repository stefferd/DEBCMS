<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 21:58
 */

class PageFrontend {

    private $tpl = null;
    private $page = null;
    private $action = null;
    public $messageSend = false;
    private $model = null;
    private $settings = null;
    private $post = null;

    function __construct($settings, $page, $action)
    {
        $this->page = $page;
        $this->action = $action;
        $this->model = new PdoPage($settings);
        $this->settings = $settings;
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir($settings->pageFolder . '/controller/frontend/templates');
        $this->tpl->setCompileDir($settings->pageFolder . '/controller/frontend/templates_c');
    }

    public function getContent($item = null, $subitem = null) {
        //$this->messageSend = false;
        switch($this->page) {
            case 'view':
                return $this->get();
                break;
            default:
                return $this->get();
                break;
        }
    }

    private function sendEmail()
    {
        $first = $this->post['naam'];
        $email = $this->post['email'];
        $telefoon = $this->post['telefoonnummer'];
        $subject= $this->post['onderwerp'];
        $message = $this->post['bericht'];

        $mail_message = $first .' <'. $email . '> ' . $telefoon . ' heeft een vraag over ' . $subject . ': ' . $message;
        if (mail($this->settings->contactEmail, 'Contact via dt-montage.nl', $mail_message)) {
            return true;
        } else {
            return false;
        }

    }

    private function sendPhone() {
        $phone = $this->post['telefoon'];
        if (mail($this->settings->contactEmail, 'Belmijterug via dt-montage.nl', 'Bel mij zo spoedig mogelijk terug op het volgende telefoonnummer: ' . $phone)) {
            return true;
        } else {
            return false;
        }
    }

    private function get() {
        $page = $this->model->getByTechnical($this->page);
        $content = str_replace('{$url}', $this->settings->url, $page->content);
        return $content;
    }

    public function getPage() {
        return $this->model->getByTechnical($this->page);
    }

    public function getContact($post, $contactSnippet = null, $contactSendSnippet = null) {
        if (!empty($post)) {
            $this->post = $post;
            if (isset($post['telefoon'])) {
                $this->messageSend = $this->sendPhone();
            } else {
                $this->messageSend = $this->sendEmail();
            }
        }
        $this->tpl->assignByRef('messageSend', $this->messageSend);
        $this->tpl->assignByRef('url', $this->settings->url);
        $this->tpl->assignByRef('contactSnippet', $contactSnippet);
        $this->tpl->assignByRef('contactSendSnippet', $contactSendSnippet);
        return $this->tpl->fetch('contact.tpl');
    }

    public function getMenuItems() {
        return $this->model->all();
    }
}