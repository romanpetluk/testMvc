<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
//		if (!empty($_POST)) {
//			$this->view->message('success', 'ERROR text');
//			$this->view->redirect('/');
//		}
		$this->view->render('login page');
	}

	public function registerAction() {
		$this->view->render('register page');
	}
}