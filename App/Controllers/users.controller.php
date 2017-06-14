<?php

namespace App\Controllers;

use Blab\Mvc\Controllers as Controllers;
use Blab\Libs\Input;

class UsersController extends Controllers\Blab_Controller
{
	public function __construct($data = array()){

		parent::__construct($data);
		$this->model = new \App\Models\User();
	}

	public function index(){

		//echo "OK! Home Index";
	}

	public function register(){

		if (isset($_POST['signup'])) {
			
			$this->data['signup_error'] = $this->model->setUser($_POST);
		}elseif(isset($_POST['login'])){

			$this->data['login_error'] = $this->model->logInUser($_POST);
		}
	}

	public function login(){

		if (Input::exists()) {
			
			$this->data['login_error'] = $this->model->logInUser($_POST);
		}
	}

	public function logout(){

		$this->model->logOutUser();
	}
}