<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function contactValidate($post) {
		$namelen = strlen($post['name']);
		if ($namelen < 3 or $namelen > 20) {
			return false;
		}
		return true;
	}
}