<?php

namespace App\Models;

use Blab\Libs\Blab_User;
use Blab\Libs\Input;
use Blab\Libs\Token;
use Blab\Libs\Hash;
use Blab\Libs\Session;
use Blab\Libs\Redirect;

class User extends Blab_User
{

	public function setUser($source){

		$input = new Input();
								
		$validation = $input->check($source,array(
			'username'=>array(

					'required'=>true,
					'min'=>5,
					'max'=>255,
					'unique'=>'users'
					),
			'fname'=>array(

					'required'=>true,
					'min'=>5,
					'max'=>255
					),
			'lname'=>array(

					'required'=>true,
					'min'=>5,
					'max'=>255
					),
			'email'=>array(
					'required'=>true,
					'min'=>15,
					'email'=>'username',
					'unique'=>'users'
					),
			'password'=>array(

					'required'=>true,
					'min'=>8,
					'preg_match'=>'password'
					),
			're_password'=>array(

					'required'=>true,
					'matches'=>'password'
					),
										
			'phone'=>array(

					'required'=>true,
					'min'=>11,
					'max'=>50
					)							
		));
		if ($validation->passed()) {

			echo $salt = hash::salt(32);

			try{

				$result = $this->create(array(

										"username"=>Input::get('username'),
										"fname"=>Input::get('fname'),
										"lname"=>Input::get('lname'),
										"email"=>Input::get('email'),
										"password"=>Hash::make(Input::get('password')),
										"salt"=>$salt,
										"phone"=>Input::get('phone'),
										"joined"=>date("Y-m-d")
										));
									
				Session::setFlash('Your registration Successfully.');
				Redirect::to('/users/login');
										
			} catch (Exception $e) {

				die($e->getMessage());
										
			}

		}else{

			return $validation->errors();
		}
	}

	public function logInUser($source){

		
	if (Token::check(Input::get('token'))) {
		
		$input = new Input();

		$validation = $input->check($source,array(
			'username'=>array(

					'required'=>true,
					'min'=>5,
					'max'=>255
					),
			'password'=>array(

					'required'=>true,
					'min'=>8,
					'preg_match'=>'password'
					)						
		));
		if ($validation->passed()) {
			/*
			if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
				$url = "https://www.google.com/recaptcha/api/siteverify";
				$privatekey = "6Lc8Mw0TAAAAAH0jajVKd9w-Wuk7abFnKdOETrNk";
				$ip = $_SERVER['REMOTE_ADDR'];
				$response = $_POST['g-recaptcha-response'];

				$rsp = file_get_contents($url ."?secret=".$privatekey."&response=".$response."&remoteip=".$ip);
				$data = json_decode($rsp);

				if (isset($data->success) && $data->success==true) {
			*/
					$remember = (Input::get('remember')==='on') ? true : false;

					$login = $this->login(Input::get('username'),Input::get('password'),$remember);

					if($login) {
						Redirect::to('/dashboard/');
											
					}else{

						echo "<script>alert('Username or Password Combination Does not Match.')</script>";
						echo "<script>window.open('/users/login/' , '_self')</script>";
					}
			/*							
				}else{

					echo "Captche Doesn't Set";
				}
			}else{

				Session::setFlash("Please Select Captcha !!");
			}

		*/
		}else{

			return $validation->errors();
		}
	}else{

					echo "<script>alert('Token Does not Set)</script>";
					echo "<script>window.open('/users/login/' , '_self')</script>";
				}
	}

	public function logOutUser(){

		$this->logout();
	}

}