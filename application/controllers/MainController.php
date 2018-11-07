<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		$this->view->render('index page');
	}

	public function aboutAction() {
		$this->view->render('about me page');
	}

	public function contactAction() {
		echo ($_POST);
		if(!empty($_POST)) {
			if (!$this->model->contactValidate($_POST)) {
				$this->view->message('ERROR', 'ERROR');
				echo 'ERROR.<br>';
				}
		}
		$this->view->render('contacts page');
	}


	public function postAction() {
		$this->view->render('post page');
	}
}
