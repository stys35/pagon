<?php

namespace Controller\Front;

class Index extends \Controller\Front
{
    public function get()
    {
        $this->_body = new \Omni\View('index');
        $this->_body->set(array('version' => \Omni\VERSION));
        trigger_error('e', E_USER_NOTICE);
    }
}