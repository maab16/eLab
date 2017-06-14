<?php

namespace App\Controllers;

use Blab\Mvc\Controllers\Blab_Controller;
use Blab\Mvc\Bootstrap;
use Blab\Libs\Pagination;

	class DashboardController extends BLAB_Controller
	{
		
		function __construct($data='')
		{
			
			Parent::__construct($data);
			$this->model = new \App\Models\Dashboard();
		}

		public function index(){

			
		}

		public function single(){

		$params = Bootstrap::getRouter()->getParams();

		if (isset($params[0])) {

			$product_id = $params[0];

			$this->data['single_product'] = $this->model->getSingleData("products",array("product_id"=>$product_id));

			$product_code = $this->data['single_product']->product_code;

			$tableName = $this->data['single_product']->category ."_description";

			$this->data['product_description'] = $this->model->getSingleData($tableName,array("product_code"=>$product_code));

		}	
	}

		public function insert_product(){

			$this->data['categories'] = $this->model->getAllData('categories');

			$this->data['brands'] = $this->model->getAllData('brands');

			$this->data['availability'] = $this->model->getAllData('availability');

			if (isset($_POST['product_insert'])) {
				
				$this->model->insertProduct($_POST);
			}
		}

		public function all_products(){

				$this->data['all_products'] = $this->model->getAllData('products');

				$this->data['total_products'] = $this->model->count();

			
			/*
			 *This Section Are used for Pagination
			 */

			// Page Link

			$page_link  = '/dashboard/all_products/';

			// pagination($opt1=table_name,$opt2=total_items,$opt3=page_link,$opt4=display_items,$opt5=where condition)
			if ($this->data['total_products']>0) {

				$pgn = new Pagination('products',$this->data['total_products'],$page_link,'','',5,'product_id','desc');

				$this->data['pagination_controll'] = $pgn->getPaginationLists();

				$this->data['pagination'] = $pgn->getPaginationData();
			}
		}

		public function update_product(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {
				
				$product_id = $params[0];
				$this->data['update_product'] = $this->model->getSingleData("products",array("product_id"=>$product_id));

				$this->data['categories'] = $this->model->getAllData('categories');

				$this->data['brands'] = $this->model->getAllData('brands');

				$this->data['availability'] = $this->model->getAllData('availability');

				$availabilityId = $this->data['update_product']->available;
				$this->data['available'] = $this->model->getSingleData('availability',array('availability_id'=>$availabilityId));

				$tableName = $this->data['update_product']->category.'_description';
				$productCode = $this->data['update_product']->product_code;
				$this->data['product_description'] = $this->model->getSingleData($tableName,array('product_code'=>$productCode));

				if (isset($_POST['product_update'])) {
					
					$this->model->updateProduct($product_id,$productCode);
				}
			}
		}

		public function delete_product(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {
				
				$this->model->deleteData(
					'products',
					array('product_id'=>$params[0]),
					'/dashboard/all_products/'
				);
			}
		}

		public function create_table(){

			if (isset($_POST['set_column'])) {

				echo "Set";
				
				$this->model->setTableColumn($_POST);
			}

			if (isset($_POST['create_feilds'])) {
				
				$this->model->createTableFields($_POST);
			}
		}

		public function create_menu(){

			$this->data['sidebar_menus'] = $this->model->getAllData('sidebar_menus',array("child_parent"=>0));
			$this->data['child_parent'] = $this->model->getAllData("sidebar_menus",array("child_parent"=>1));
			//print_r($this->data['child_parent']);

			if (isset($_POST['insert_menu'])) {

				if ($_POST['child_id'] != "") {
					
					$this->model->insertData(
						"sidebar_menus",
						array(
							'menu'=>$_POST['menu_name'],
							'child'=>$_POST['child_id'],
							'parent'=>$_POST['parent_id'],
							'sub_id'=>2,
							'link'=>$_POST['link']
						),
						'/dashboard/create_menu/'
					);
					return;
				}

				if ($_POST['parent_id'] != "") {
					
					$this->model->insertData(
						"sidebar_menus",
						array(
							'menu'=>$_POST['menu_name'],
							'parent'=>$_POST['parent_id'],
							'child_parent'=>1,
							'link'=>$_POST['link']
						),
						'/dashboard/create_menu/'
					);

					return;
				}

				$this->model->insertData(
						"sidebar_menus",
						array(
							'menu'=>$_POST['menu_name'],
							'parent'=>0,
							'child_parent'=>0,
							'child'=>0,
							'sub_id'=>0,
							'link'=>$_POST['link']
						),
						'/dashboard/create_menu/'
					);
			}
		}

		public function all_menus(){

			$this->data['menus'] = $this->model->getAllData("sidebar_menus");
		}

		public function delete_menu(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {

				$this->model->deleteData(
					'sidebar_menus',
					array('id'=>$params[0]),
					'/dashboard/all_menus/'
				);
			}
		}

		public function update_menu(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {


				$this->data['sidebar_menus'] = $this->model->getAllData('sidebar_menus');
				
				$menu = $this->data['single_menu'] = $this->model->getSingleData(
					"sidebar_menus",
					array("id"=>$params[0])

				);

				$this->data['parent_name'] = $this->model->getSingleData(
						'sidebar_menus',
						array('id'=>$menu->parent)
					);

				$this->data['child_name'] = $this->model->getSingleData(
						'sidebar_menus',
						array('id'=>$menu->child)
					);

				$this->data['child_parent'] = $this->model->getAllData("sidebar_menus",array("child_parent"=>1));

				$this->data['sidebar_menu_parent'] = $this->model->getMenuParent("sidebar_menus",$this->data['single_menu']->parent);
			}
			

			if (isset($_POST['change'])) {

				

				if (isset($_POST['child_id'])) {

					if ($_POST['menus']!=0) {
					
						$parent_id = $POST['menus'];
					}else if($_POST['parent_id'] !=0){

						$parent_id = $_POST['parent_id'];
					}
						
					$this->model->updateSingleData(
						"sidebar_menus",
						array('id'=>$params[0]),
						array(
							'menu'=>$_POST['change_name'],
							'parent'=>$parent_id,
							'child_parent'=>0,
							'child'=>$_POST['child_id'],
							'sub_id'=>2,
							'link'=>$_POST['link']
						),
						'/dashboard/all_menus/'
					);

					return;
				}
			}
		}

		public function create_category(){

			if (isset($_POST['insert_category'])) {
				
				$this->model->insertData(
					"categories",
					array('cat_name'=>$_POST['category_name']),
					"/dashboard/create_category/"
				);
			}
		}

		public function all_categories(){

			$this->data['categories'] = $this->model->getAllData("categories");
		}

		public function delete_category(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {

				$this->model->deleteData(
					'categories',
					array('cat_id'=>$params[0]),
					'/dashboard/all_categories/'
				);
			}
		}

		public function update_category(){

			$params = Bootstrap::getRouter()->getParams();
			if (isset($params[0])) {
				
				$this->data['category'] = $this->model->getSingleData(
					"categories",
					array("cat_id"=>$params[0])
				);
			}
			

			if (isset($_POST['change'])) {

				$this->model->updateSingleData(
					"categories",
					array('cat_id'=>$params[0]),
					array('cat_name'=>$_POST['change_name']),
					'/dashboard/all_categories/'
				);
			}
		}

		public function create_brand(){

			if (isset($_POST['insert_brand'])) {
				
				$this->model->insertData(
					"brands",
					array('brand_name'=>$_POST['brand_name']),
					"/dashboard/create_brand/"
				);
			}
		}

		public function all_brands(){

			$this->data['brands'] = $this->model->getAllData("brands");
		}

		public function delete_brand(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {

				$this->model->deleteData(
					'brands',
					array('brand_id'=>$params[0]),
					'/dashboard/all_brands/'
				);
			}
		}

		public function update_brand(){

			$params = Bootstrap::getRouter()->getParams();
			if (isset($params[0])) {
				
				$this->data['brand'] = $this->model->getSingleData(
					"brands",
					array("brand_id"=>$params[0])
				);
			}
			

			if (isset($_POST['change'])) {

				$this->model->updateSingleData(
					"brands",
					array('brand_id'=>$params[0]),
					array('brand_name'=>$_POST['change_name']),
					'/dashboard/all_brands/'
				);
			}
		}

		public function create_availability(){

			if (isset($_POST['insert_availability'])) {
				
				$this->model->insertData(
					"availability",
					array(
						'availability_id'=>$_POST['availability_id'],
						'availability_name'=>$_POST['availability_name'],
						),
					"/dashboard/create_availability/"
				);
			}
		}

		public function all_availabilities(){

			$this->data['availabilities'] = $this->model->getAllData("availability");
		}

		public function delete_availability(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {

				$this->model->deleteData(
					'availability',
					array('id'=>$params[0]),
					'/dashboard/all_availabilities/'
				);
			}
		}

		public function update_availability(){

			$params = Bootstrap::getRouter()->getParams();
			if (isset($params[0])) {
				
				$this->data['availability'] = $this->model->getSingleData(
					"availability",
					array("id"=>$params[0])
				);
			}
			

			if (isset($_POST['change'])) {

				$this->model->updateSingleData(
					"availability",
					array('id'=>$params[0]),
					array(
						'availability_id'=>$_POST['availability_id'],
						'availability_name'=>$_POST['availability_name']),
					'/dashboard/all_availabilities/'
				);
			}
		}

		public function profile(){

			
		}

		public function insert_slider(){

			if (isset($_POST['insert_slider'])) {
				
				$this->model->insertSliderData();
			}		
		}

		public function delete_slider(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {

				$this->model->deleteData(
					'slider',
					array('slider_id'=>$params[0]),
					'/dashboard/all_slider/'
				);
			}
		}

		public function update_slider(){

			$params = Bootstrap::getRouter()->getParams();

			if (isset($params[0])) {
				
				$this->data['slider_data'] = $this->model->getSingleData("slider",array('slider_id'=>$params[0]));
				if (isset($_POST['update_slider'])) {
					
					$this->model->updateSliderData($params[0]);
				}		
			}

			
		}

		public function all_slider(){

			$this->data['all_slider'] = $this->model->getAllData("slider");

				$this->data['total_slider'] = $this->model->count();

			
			/*
			 *This Section Are used for Pagination
			 */

			// Page Link

			$page_link  = '/dashboard/all_slider/';

			// pagination($opt1=table_name,$opt2=total_items,$opt3=page_link,$opt4=display_items,$opt5=where condition)
			if ($this->data['total_slider']>0) {

				$pgn = new Pagination('slider',$this->data['total_slider'],$page_link,'','',2,'slider_id','desc');

				$this->data['pagination_controll'] = $pgn->getPaginationLists();

				$this->data['pagination'] = $pgn->getPaginationData();
			}
		}

		public function plugins(){

			$params = App::getRouter()->getParams();
			if (isset($params[0]) && $params[0]=='enable') {

				if (Config::exists('plugins')) {

					$plugins = Config::get('plugins');

					foreach ($plugins as $keys) {

						if (!in_array($params[1],$plugins)) {
							
							$plugin_items = count($plugins);
							$plugin_list ="array(\n";
							$i=1;
							foreach ($plugins as $name=>$values) {
								$plugin_list .= "'".$name."'=>array(\n";
								$items = '';
								$list = count($values);
								$j=1;
								foreach ($values as $key => $value) {

									if ($key ==$name."|version") {
																
										$items .= "'".$key."'"."=>".$value;

									}else{

										$items .= "'".$key."'"."=>"."'".$value."'";
									}

									if ($j<$list) {
															
										$items .=",\n";
									}
									$j++;
								}
								
								$plugin_list .=$items."\n)";
								if ($i<$plugin_items) {
									
									$plugin_list .= ",\n";
								}
								$i++;						
							}
	
							$line = "Config::set('plugins',".$plugin_list."));";
							$current = str_replace($line,'',file_get_contents(ROOT.DS.'config'.DS.'config.php'));

							$content = "Config::set('plugins',".$plugin_list.",\n";
							
								
								$content .= "'".$params[1]."'=>array(\n'"
								.$params[1]."|moderation_email'"."=>"."'',\n"."'"
								.$params[1]."|moderation_enabled'"."=>"."'no',\n"."'"
								.$params[1]."|version'"."=>"."0\n)";
								
							$content .="));";

							$current .=$content;
							file_put_contents(ROOT.DS.'config'.DS.'config.php', $current);
							echo "<script>alert('OK')</script>";
							echo "<script>window.open('/dashboard/plugins/' , '_self')</script>";
						}
					}
					
					
				}else if(!Config::exists('plugins')){

					$current = file_get_contents(ROOT.DS.'config'.DS.'config.php');
					$content = "Config::set('plugins',array(\n";
					$content .= "'".$params[1]."'=>array(\n'"
							.$params[1]."|moderation_email'"."=>"."'',\n"."'"
							.$params[1]."|moderation_enabled'"."=>"."'no',\n"."'"
							.$params[1]."|version'"."=>"."0\n)));";
					$current .= $content;
					file_put_contents(ROOT.DS.'config'.DS.'config.php', $current);
					echo "<script>alert('OK')</script>";
					echo "<script>window.open('/dashboard/plugins/' , '_self')</script>";
				}
	
				
			}

			if (isset($params[0]) && $params[0]=='disable') {

				if (Config::exists('plugins')) {
					
					$plugins = Config::get('plugins');
					$keys = array_keys($plugins);
						
						if (in_array($params[1],$keys)) {

							$deleteLine = Config::reWrite($plugins);

							$current = str_replace($deleteLine,'',file_get_contents(ROOT.DS.'config'.DS.'config.php'));

							unset($plugins[$params[1]]);

								$line = Config::reWrite($plugins);
								if (!empty($plugins)) {
									$current .=$line;
									file_put_contents(ROOT.DS.'config'.DS.'config.php', $current);
									echo "<script>alert('OK')</script>";
									echo "<script>window.open('/dashboard/plugins/' , '_self')</script>";
							}else{
								file_put_contents(ROOT.DS.'config'.DS.'config.php', $current);
								Redirect::to('/dashboard/plugins/');
							}
							
						}
					//}
				}
	
				
			}

		}
	}