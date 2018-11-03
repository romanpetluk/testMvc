<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		//$this->view->redirect('https://google.com');
		$this->view->render('login page');
	}

	public function registerAction() {
		$this->view->render('register page');
	}
}