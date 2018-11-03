<?php
/**
 * Created by PhpStorm.
 * User: rpetluk
 * Date: 11/1/18
 * Time: 11:52 AM
 */

namespace application\controllers;

use application\core\Controller;

class NewsController extends Controller {

	public function showAction() {
		$this->view->render('news page');
	}
}
