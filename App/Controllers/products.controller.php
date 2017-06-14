<?php

namespace App\Controllers;

use Blab\Mvc\Controllers as Controllers;
use Blab\Mvc\Bootstrap as Bootstrap;
use Blab\Libs\getIP;

class ProductsController extends Controllers\Blab_Controller
{
	public function __construct($data = array()){

		parent::__construct($data);
		$this->model = new \App\Models\Products();
	}

	public function index(){

		$this->model->setUserInfo();

		$location = $this->model->currentUserInfo();

		$ip = (!empty($location->query)) ? $location->query: "";

		$params = Bootstrap::getRouter()->getParams();
		
		$this->data['cart'] = $this->model->getAllData(
								'cart',
								array(
									'ip_address'=>$ip
								)
							);
		$this->data['cart_items'] = $this->model->count();

		$this->data['sidebar_menu'] = $this->model->getAllData('sidebar_menus');
		//$this->data['last_sidebar_menu'] = $this->model->getLastID('sidebar_menus');

		$this->data['slider'] = $this->model->getAllData('slider');

		$this->data['desktops'] = $this->model->getAllData(
				'products',
				array('category'=>'desktop'),
				array('product_id'=>"desc"),
				4
			);

		$this->data['featured_products'] = $this->model->getFeaturedProducts();

		//Get Total Post
		$this->data['total_featured'] = $this->model->count();
		
		/*
			 *This Section Are used for Pagination
			 */

			// Page Link

			$page_link  = '/products/index/';

			// pagination($opt1=table_name,$opt2=total_items,$opt3=page_link,$opt4=display_items,$opt5=where condition)

			if ($this->data['total_featured'] >0) {

				// params tableName,totalItems,pageLink,params,where,displayItems,orderName,$orderType
				
				$pgn = new \Blab\Libs\Pagination('products',$this->data['total_featured'],$page_link,'','',8,'product_id','desc');

				$this->data['featured_product_pgn_list'] = $pgn->getPaginationLists();

				$this->data['featured_product_pgn_data'] = $pgn->getPaginationData();
				//print_r($this->data['pagination']);
			}

		$this->data['recommend_products'] = $this->model->getRecommendProducts();

		$this->data['best_seller'] = $this->model->getBestSeller();

		// Add to Cart

		if (isset($params[1]) && $params[0]=="add_cart") {
			
			$this->model->insertData(
					'cart',
					array(

						'ip_address'=>$ip,
						'product_id'=>$params[1]
					)
				);
		}
	}


	public function single(){
		$this->data['sidebar_menu'] = $this->model->getAllData('sidebar_menus');
		$params = Bootstrap::getRouter()->getParams();

		if (isset($params[1])) {

			$this->data['single_product'] = $this->model->getSingleProduct($params[0],$params[1]);
			

		}	
	}

	public function cart(){

		$user = $this->model->currentUserInfo();

		$this->data['carts'] = $this->model->getAllCarts('cart',$user->query);
	}

	public function checkout(){

			$this->data['user_info'] = $this->model->currentUserInfo();
			$user = $this->model->currentUserInfo();
			
			$this->data['checkout'] = $this->model->getAllCarts('cart',$user->query);
	}
}