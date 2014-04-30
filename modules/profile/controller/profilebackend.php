<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 22:02
 */
class ProfileBackend {

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

        $this->model = new PdoProfile($settings);
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('../' . $settings->profileFolder . '/controller/backend/templates');
        $this->tpl->setCompileDir('../' . $settings->profileFolder . '/controller/backend/templates_c');
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
            case 'login':
                return $this->login($post);
                break;
            case 'logout':
                return $this->logout();
                break;
            default:
                return $this->getOverview();
                break;
        }
    }

    private function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_created']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_fullname']);

        return '<meta http-equiv="refresh" content="0;URL=' . $this->settings->url . 'admin" />';
    }

    private function login($post = null) {
        if ($post != null) {
            $administrator = $this->model->login($post['emailaddress'], md5($post['password']));
            $_SESSION['user_id'] = $administrator->id;
            $_SESSION['user_created'] = $administrator->created;
            $_SESSION['user_name'] = $administrator->name;
            $_SESSION['user_fullname'] = $administrator->name . ' ' . $administrator->lastname;
            return $this->getOverview();
        } else {
            $this->tpl->assign('url', $this->settings->url);
            return $this->tpl->fetch('login.tpl');
        }
    }

    private function getEdit($id = null, $created = null) {
        $administrator = null;
        if ($id != null && $created != null) {
            $administrator = $this->model->get($id, $created);
        }
        $this->tpl->assignByRef('administrator', $administrator);
        $this->tpl->assign('siteUrl', $this->settings->url);
        return $this->tpl->fetch('form.tpl');
    }

    private function getOverview($message= null, $messageType = null) {
        $profiles = $this->model->all();
        $this->tpl->assignByRef('administrators', $profiles);
        $this->tpl->assign('message', $message);
        $this->tpl->assign('messageType', $messageType);
        $this->tpl->assign('url' , $this->settings->url);
        return $this->tpl->fetch('overview.tpl');
    }

    private function save($post) {
        $id = $this->model->lastId();
        $adminArguments = array(
            'id' => $id,
            'name' => $post['firstname'],
            'lastname' => $post['lastname'],
            'emailaddress' => $post['emailaddress'],
            'password' => md5($post['password']),
            'birthday' => strtotime($post['birthday']),
            'created' => time(),
            'updated' => time(),
            'activated' => 1,
            'lastlogin' => '',
            'level' => 1,
            'group' => 2
        );
        $administrator = new Administrator($adminArguments);
        if ($this->model->create($administrator)) {
            return $this->getOverview();
        }
    }

    private function update($post, $id, $created) {
        $administrator = $this->model->getAdmin($id, $created);
        $administrator->name = $post['firstname'];
        $administrator->lastname = $post['lastname'];
        $administrator->emailaddress = $post['emailaddress'];
        $administrator->updated = time();
        $administrator->birthday = strtotime($post['birthday']);
        if ($this->model->update($administrator)) {
            return $this->getOverview('De geselecteerde beheerder is aangepast', 'success');
        }
    }

    private function delete($id, $created) {
        if ($this->model->delete($id, $created)) {
            return $this->getOverview('De geselecteerde beheerder is verwijderd', 'success');
        } else {
            return $this->getOverview('De geselecteerde beheerder is niet verwijderd, er is iets mis gegaan', 'danger');
        }
    }

} 