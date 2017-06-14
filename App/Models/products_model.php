<?php

namespace App\Models;

use Blab\Mvc\Models\Blab_Model;

	class Products extends Blab_Model
	{
		public function getAllCheckouts($ip){

			return $this->_db->query()
					->from("cart")
					->where(array('ip_address'=>$ip))
					->join("products","products.product_id=cart.product_id")
					->join("users_info","users_info.ip_address=cart.ip_address")
					->results();
		}

		public function getAllCarts($tableName,$id){

			return $this->_db->query()
					->from($tableName)
					->where(array("ip_address"=>$id))
					->join("products","products.product_id=cart.product_id")
					->results();
		}

		public function currentUserInfo(){

			if(isset($_REQUEST['REMOTE_ADDR']))
		        $ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query
			$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
			return (object)$query;
		}

		public function setUserInfo(){

			$user = $this->currentUserInfo();
			if (!empty($user->query)) {

				$result = $this->_db->query()
							->from("users_info")
							->where(array('ip_address'=>$user->query))
							->firstResult();
				if (empty($result)) {
					
					$insert = $this->_db->query()
							->into("users_info")
							->insert(array(
										'ip_address'=>$user->query,
										'country'=>$user->country,
										'countryCode'=>$user->countryCode,
										'city'=>$user->city,
										'zip'=>$user->zip,
										'timezone'=>$user->timezone,
										'region'=>$user->region,
										'regionName'=>$user->regionName,
										'isp'=>$user->isp,
										'org'=>$user->org,
										'as_name'=>$user->as,
										'lat'=>$user->lat,
										'lon'=>$user->lon
									));
				}
				
				
			}
			
		}

		public function getUserInfo($ip=""){

			if (isset($ip)) {
				
				$ip_address = $ip;
			}else{

				$user = $this->currentUserInfo();
				$ip_address = $user->query();

			}

			return $this->_db->query()
					->from('users_info')
					->where(array('ip_address'=>$ip_address))
					->firstResult();

		}

		public function insertData($tableName,$data){

			$insert = $this->_db->query()
						->into($tableName)
						->insert($data);
		}
		public function getLastID($tableName){

			return $this->_db->query()
					->from($tableName)
					->order(array("product_id"=>"desc"))
					->limit(1)
					->firstResult();
		}
		public function getAllData($tableName,$where=array(),$order=array(),$limit=""){

			if ($limit!="") {
				
				return $this->_db->query()
					->from($tableName)
					->where($where)
					->order($order)
					->limit($limit)
					->results();
			}

			return $this->_db->query()
					->from($tableName)
					->where($where)
					->order($order)
					->results();
		}

		public function getSingleData($tableName,$where=array()){

			return $this->_db->query()
					->from($tableName)
					->where($where)
					->firstResult();
		}
		public function getFeaturedProducts(){

			return $this->_db->query()
			->from("products")
			->order(array("product_id"=>"desc"))
			->where(array())
			->results();
		}

		public function count(){

			return $this->_db->getAffectedRows();
		}

		public function getRecommendProducts(){

			return $this->_db->query()
			->from("products")
			//->where(array("rating"=>4.5),">=")
			->where(array("available"=>1),"=")
			->limit(6)
			->results();
		}

		public function getBestSeller(){

			return $this->_db->query()
			->from("products")
			->order(array("product_id"=>"desc"))
			->limit(10)
			->results();
		}

		public function getSingleProduct($category,$id){

			return $this->_db->query()
					->from("products")
					->where(array("product_id"=>$id))
					->join("availability","availability.availability_id=products.available")
					->join("{$category}_description","desktop_description.product_code=products.product_code")
					
					->firstResult();
		}

		public function getProductDescription($category,$productCode){

			return $this->_db->query()
					->from($category)
					->where(array('product_code'=>$productCode))
					->firstResult();
		}
	}