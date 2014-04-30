<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 21:58
 */

class ProfileFrontend {

    private $tpl = null;

    function __construct()
    {
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('../frontend/templates');
        $this->tpl->setCompileDir('../frontend/templates_c');

    }
}