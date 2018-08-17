<?php

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Manager;

class ControllerBase extends Controller
{
	 public function initialize()
	{

    	if ($this->session->get('auth')==null) {
    		$this->response->redirect('login/index');
    	} 

    	$this->view->setTemplateAfter('common');

       
    }
    public function indexAction(){

    }



}
