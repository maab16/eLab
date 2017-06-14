<?php

	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));
	
	require_once(ROOT.DS.'libs'.DS.'init.php');

	if (isset($_GET['type'],$_GET['value'])) {
		
		$type = strtolower(trim($_GET['type']));
		$value = trim($_GET['value']);

		$json_data = ['exists'=>false];

		if (in_array($type, ['username','email','password','re_password'])) {

			if ($type == 'username' || $type=='email') {
				
				$dbname = config::get('dbName');	//Database Name

				$host = config::get('host');	//Host name

				$dsn = 'mysql:dbname='.$dbname.';host='.$host;	// Database Source Name

				$username = config::get('user');	// Database Username

				$password = config::get('password');		//Database Password
				$options = array(
						    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
						); 

				try{

					$db = new PDO($dsn,$username,$password,$options);		// Database Connection
					//$this->_pdo->exec("set utf8_general_ci utf8");

				}catch(PDOException $e){

					die($e->getMessage());
				}
				
				switch ($type) {
					case 'username':
						
							$sql ="
									SELECT *
									FROM users
									WHERE username=:value
								";
							$check = $db->prepare($sql);
						break;

					case 'email':
						
						$sql ="
								SELECT *
								FROM users
								WHERE email=:value
							";
						$check = $db->prepare($sql);
						break;
					
				}

				if($check->execute(['value'=>$value])){


					if ($check->rowCount()) {
						
						$json_data['exists'] = true;

					}

				}
			}else if ($type=='password') {

				if (!preg_match('/^.(?=.{8,})(?=.[a-z])(?=.[A-Z])(?=.[\d\W]).*$/',$value)) {

						if (!preg_match('/(?=.*[A-Z])/',$value)) {

							$json_data['exists'] = true;

						}else if (!preg_match('/(?=.*[\d])/',$value)) {

							$json_data['exists'] = true;
						}else if (!preg_match('/(?=.*[a-z])/',$value)) {

							$json_data['exists'] = true;
						}else if (!preg_match('/(?=.*[\W])/',$value)) {

							$json_data['exists'] = true;
						}else if (!preg_match('/(?=.{8,})/',$value)) {

							$json_data['exists'] = true;
						}
				}else{

					$json_data['exists'] = false;
				}

				$_SESSION['password']=$value;

			}else if ($type=='re_password') {				

					if ($value ==$_SESSION['password']) {
						
						$json_data['exists'] = false;
					}else{

					$json_data['exists'] = true;
				}
			}

			

			echo json_encode($json_data);

			
		}
	}