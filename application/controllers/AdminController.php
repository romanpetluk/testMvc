<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'admin';
		//$_SESSION['admin'] = 1;
		//session_destroy();
		//debug($_SESSION);
	}

	public function loginAction() {
		$this->view->render('login page');
	}

	public function addAction() {
		$this->view->render('add post');
	}

	public function editAction() {
		$this->view->render('edit post');
	}

	public function deleteAction() {
		exit('delete');
	}

	public function logoutAction() {
		exit('logout');
	}
}