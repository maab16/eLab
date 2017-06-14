<?php

namespace Blab\Libs;

use Blab\Mvc\Models\Blab_Model;

	class Blab_User extends Blab_Model
	{

		private	$_data,
				$_sessionName,
				$_cookieName,
				$_isLoggedIn = false;

		private static $_instanceUser=null;

		public function __construct($user=null){

			// Call The parent __construct for instantiate Database
			Parent::__construct();

			$default = Registry::get('default');
			$this->_sessionName = $default->sessionName;
			$this->_cookieName = $default->cookieName;
			
			if (!$user) {
				
				if (session::exists($this->_sessionName)) {
					
					$user = session::get($this->_sessionName);

					if ($this->find($user)) {
						
						$this->_isLoggedIn = true;
					}
				}

			}else{

				if($this->find($user)){

					$this->_isLoggedIn = true;
				}
			}
		}

		public function create($fields = array()){

			return $this->_db->query()
			->into("users")
			->insert($fields);
		}

		public function get($name){

			if(input::get($name)==''){

				if ($name=='birth_day' || $name=='birth_month' || $name=='birth_year') {

					$birth_date = $this->data()->birth_date;
					
					$birth_date = explode('-',$birth_date);

					$birth_day = $birth_date[0];
					$birth_month = $birth_date[1];
					$birth_year = $birth_date[2];

					if ($name=='birth_day') {
						
						return $birth_day;
					}else if ($name=='birth_month') {
						
						return $birth_month;
					}else if ($name=='birth_year') {
						
						return $birth_year;
					}
				}

				return $this->data()->$name;

				

			}else{

				return input::get($name);
			}
		}

		public function update($fields = array(),$user_id=null){

			if (!$user_id && $this->isLoggedIn()) {
				
				$user_id = $this->data()->id;
			}

			if (!$this->_db->query()
					->from('users')
					->where(array('user_id'=>$user_id))
					->update($fields)) {
				
				throw new Exception("There was a problem to update Your details .");
				
			}else{
				return true;
			}

		}

		public function find($fieldValue=null){

			if ($fieldValue) {
	

				if (is_numeric($fieldValue)) {
					
					$field = 'id';
				}else if (filter_var($fieldValue, FILTER_VALIDATE_EMAIL)) {
					
					$field = 'email';
				}else{

					$field = 'username';
				}

				$query = $this->_db->query()->exists('users',array($field,'=',$fieldValue));

				if ($query->getAffectedRows()) {
					
					foreach($query->getResults() as $this->_data){
						return true;

					}

					
				}
			}

			return false;
		}

		public function login($username=null,$password=null,$remember=false){

			if (!$username && !$password && $this->exists()) {
				
				Session::set($this->_sessionName,$this->data()->username);

			}else{

				if ($this->find($username)) {
				
					if ($this->data()->password===Hash::make($password) && $this->data()->active==1) {
						
						Session::set($this->_sessionName,$this->data()->username);

						if ($remember) {
							
							$hash = Hash::unique();
							$hashChek = $this->_db->query()
										->from('users_session')
										->where(array('user_id'=>$this->data()->user_id))
										->firstResult();
							if (!$hashChek) {
								
								$this->_db->query()
								->into('users_session')
								->insert(array(

									'user_id'=>$this->data()->user_id,
									'hash'=>$hash

									));
							}else{

								$hash = $hashChek->hash;
							}

							Cookie::put($this->_cookieName,$hash,$default->cookieExpiry);

						}

						return true;
					}

				}
			}

			return false;
		}

		public function logout(){

			$this->_db->query()
			->from('users_session')
			->where(array(
				'user_id'=>$this->data()->user_id
			))
			->delete();
			Session::delete($this->_sessionName);
			Cookie::delete($this->_cookieName);
			Redirect::to('/users/login/');
		}

		public function data(){

			return $this->_data;
		}

		public static function getUserInstance(){

			if (!isset(self::$_instanceUser)) {
				
				self::$_instanceUser = new BLAB_User();
			}

			return self::$_instanceUser;

		}

		public function isLoggedIn(){

			return $this->_isLoggedIn;
		}

		public function exists(){

			return (!empty($this->_data)) ? true : false ;
		}


	}