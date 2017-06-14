<?php
namespace App\Models;

use Blab\Mvc\Models\Blab_Model;
use Blab\Libs\Input;
use Blab\Libs\Redirect;

	class Dashboard extends BLAB_Model
	{

		public function insertProduct($source=''){

			$product_image_name = $_FILES['product_image']['name'];
			$image_tmp = $_FILES['product_image']['tmp_name'];
			move_uploaded_file($image_tmp,'images/'.input::get('product_category').'/'.$product_image_name);

			$insertProduct = $this->_db->query()
						->into('products')
						->insert(array(

							'product_code'=>input::get('product_code'),
							'product_name'=>input::get('product_name'),
							'product_image'=>$product_image_name,
							'brand'=>input::get('product_brand'),
							'category'=>input::get('product_category'),
							'price'=>input::get('price'),
							'tag'=>input::get('tag'),
							'available'=>input::get('available'),
							'rating'=>0,
							'entry'=>date("Y-m-d h:i:sa"),
							'modified'=>date("Y-m-d h:i:sa")
						));
			if ($this->_db->query()
				->exists(
					Input::get('product_category').'_description',
					array('product_code','=',Input::get('product_code')
					)
				)
			) {
				
				echo "<script>alert('Product Description Already exists.')</script>";
				echo "<script>window.open('/dashboard/insert_product/','_self')</script>";
			}else{
			
				$insertProductDesc = $this->_db->query()
							->into(Input::get('product_category').'_description')
							->insert(array(

								'product_code'=>input::get('product_code'),
								'processor'=>input::get(Input::get('product_category').'_processor'),
								'chipset'=>input::get(Input::get('product_category').'_chipset'),
								'ram'=>input::get(Input::get('product_category').'_ram'),
								'hard_disk'=>input::get(Input::get('product_category').'_hard_disk'),
								'display'=>input::get(Input::get('product_category').'_display'),
								'graphics'=>input::get(Input::get('product_category').'_graphics'),
								'audio'=>input::get(Input::get('product_category').'_audio'),
								'optical_disk_drive'=>input::get(Input::get('product_category').'_optical_disk_drive'),
								'mouse'=>input::get(Input::get('product_category').'_mouse'),
								'keyboard'=>input::get(Input::get('product_category').'_keyboard'),
								'operating_system'=>input::get(Input::get('product_category').'_operating_system'),
								'warranty'=>input::get(Input::get('product_category').'_warranty'),
								'others'=>input::get(Input::get('product_category').'_others')
							));
			}

			if ($insertProduct) {
				
				echo "<script>alert('Product Inserted Successfully.')</script>";
				echo "<script>window.open('/dashboard/insert_product/','_self')</script>";
			}	
		}

		public function updateProduct($product_id,$product_code){

			$product_image_name = $_FILES['product_image']['name'];
			$image_tmp = $_FILES['product_image']['tmp_name'];
			move_uploaded_file($image_tmp,'images/'.input::get('update_category').'/'.$product_image_name);
		
		$updateProduct = $this->_db->query()
						->into('products')
						->where(array('product_id'=>$product_id))
						->update(array(

							'product_name'=>input::get('product_name'),
							'product_image'=>$product_image_name,
							'brand'=>input::get('product_brand'),
							'category'=>input::get('update_category'),
							'price'=>input::get('price'),
							'tag'=>input::get('tag'),
							'available'=>input::get('available'),
							'rating'=>0,
							'entry'=>date("Y-m-d h:i:sa"),
							'modified'=>date("Y-m-d h:i:sa")
						));
			
			
		$updateProductDesc = $this->_db->query()
							->into(Input::get('update_category').'_description')
							->where(array('product_code'=>$product_code))
							->update(array(

								'processor'=>input::get(Input::get('update_category').'_processor'),
								'chipset'=>input::get(Input::get('update_category').'_chipset'),
								'ram'=>input::get(Input::get('update_category').'_ram'),
								'hard_disk'=>input::get(Input::get('update_category').'_hard_disk'),
								'display'=>input::get(Input::get('update_category').'_display'),
								'graphics'=>input::get(Input::get('update_category').'_graphics'),
								'audio'=>input::get(Input::get('update_category').'_audio'),
								'optical_disk_drive'=>input::get(Input::get('update_category').'_optical_disk_drive'),
								'mouse'=>input::get(Input::get('update_category').'_mouse'),
								'keyboard'=>input::get(Input::get('update_category').'_keyboard'),
								'operating_system'=>input::get(Input::get('update_category').'_operating_system'),
								'warranty'=>input::get(Input::get('update_category').'_warranty'),
								'others'=>input::get(Input::get('update_category').'_others')
							));

			if ($updateProduct) {
				
				echo "<script>alert('Product Updated Successfully.')</script>";
				echo "<script>window.open('/dashboard/all_products/','_self')</script>";
			}
		}

		public function deleteData($tableName,$where,$redirect="/dashboard/"){

			$delete = $this->_db->query()
					->from($tableName)
					->where($where)
					->delete();

			if ($delete) {
				
				echo "<script>alert('Data Deleted Successfully.')</script>";
				Redirect::to($redirect);
			}
		}
	

		public function count(){

			return $this->_db->getAffectedRows();
		}

		public function insertData($tableName,$data,$redirect="/dashboard/"){

			if ($this->_db->query()->exists($tableName,$data)) {
				
				echo "<script>alert('Item Already exists.')</script>";
				Redirect::to($redirect);
			}else{

				$insert = $this->_db->query()
						->into($tableName)
						->insert($data);

				if ($insert->getAffectedRows()) {

					echo "<script>alert('Item Created Successfully.')</script>";
					Redirect::to($redirect);
				}
			}

		}

		public function getSingleData($tableName,$where){

			return $this->_db->query()
					->from($tableName)
					->where($where)
					->firstResult();
		}

		public function getAllData($tableName,$where=array()){

			return $this->_db->query()
					->from($tableName)
					->where($where)
					->results();
		}

		public function updateSingleData($tableName,$where,$data,$redirect="/dashboard/"){

			if ($this->_db->query()->exists($tableName,$data)) {
				
				echo "<script>alert('Data Already exists.')</script>";
				Redirect::to($redirect);
			}else{

				$update = $this->_db->query()
							->into($tableName)
							->where($where)
							->update($data);

				if ($update) {
					
					echo "<script>alert('Data Updated Successfully.')</script>";		
				}
				Redirect::to($redirect);
			}
		}


		public function insertSliderData(){

			$insert_image_name = $_FILES['slider_image']['name'];
			$image_tmp = $_FILES['slider_image']['tmp_name'];
			move_uploaded_file($image_tmp,'images/slider/'.$insert_image_name);

			$insertSlider = $this->_db->query()
							->into("slider")
							->insert(array(

								"slider_image"=>$insert_image_name,
								"link"=>Input::get('link')
							));
			if ($insertSlider->getAffectedRows()) {
				
				echo "<script>alert('Slider Data Inserted Successfully.')</script>";
				echo "<script>window.open('/dashboard/insert_slider','_self')</script>";
			}
		}

		

		public function updateSliderData($sliderId){
			$insert_image_name = $_FILES['update_image']['name'];
			$image_tmp = $_FILES['update_image']['tmp_name'];
			move_uploaded_file($image_tmp,'images/slider/'.$insert_image_name);


			$update = $this->_db->query()
					->into("slider")
					->where(array('slider_id'=>$sliderId))
					->update(array(
						'slider_image'=>$insert_image_name,
						'link'=>Input::get('link')
					));
			if ($update) {
				
				echo "<script>alert('Slider Data Updated Successfully.')</script>";
				echo "<script>window.open('/dashboard/all_slider','_self')</script>";
			}
		}

		public function getMenuParent($tableName,$id){

			return $this->_db->query()
					->from($tableName)
					->where(array("id"=>$id))
					->firstResult();

		}

		public function setTableColumn($data=''){

			$validate= new Input();
			$validation = $validate->check($data,array(

				'database_name'=>array(
					'required'=>true
				),

				'table_name'=>array(

					'required'=>true,
					'min'=>5,
					'max'=>50
				),

				'column_length'=>array(
					'required'=>true
				)
			));

			if ($validation->passed()) {

				Session::put('database_name',Input::get('database_name'));
				Session::put('table_name',Input::get('table_name'));
				Session::put('column_length',Input::get('column_length'));
				Session::put('set_column',true);

				Redirect::to('/dashboard/create_table/display_fields');
			}

			Session::put('set_column',false);
		}

		public function createTableFields($data=''){

			$table_column = session::get('column_length');
			$table_name = session::get('table_name');
			$database_name = session::get('database_name');
			$STR="";
			$IND="";
			if (isset($data['create_feilds'])) {
				
				$i=1;
				while($i<=$table_column) {

					if (isset($data["name$i"])) {
						$name = $data["name$i"];
					}else{
						$name="";
					}

					if (isset($data["length$i"])) {
						$length = $data["length$i"];

					}else {
						$length = "";
					}

					if (isset($data["type$i"])) {
						$type = $data["type$i"];

						if ($length =='') {
							$type .="";
						}else{
							$type .="($length)";
						}
						
					}else {

						$type = 'INT';
					}

					

					if (isset($data["default$i"])) {
						$default = $data["default$i"];
						if ($default===''){
							$default="";
						}else {
							$default = "DEFAULT ";
							$default .= $data["default$i"];
						}

						
					}else {

						$default = "";
					}


					if (isset($data["collation$i"])) {
						$collation=$data["collation$i"];
						
						if ($collation!=='') {

							$database_collation = explode('-',$collation);
							$database_collation_label = $database_collation[0];
							$database_collation_name = $database_collation[1];

							$collation = "CHARACTER SET $database_collation_label COLLATE ".$database_collation_name;
							
						}else{
							
							$collation = "";
						}
						
					}else {

						$collation = "";
					}

					

					if (isset($data["attributes$i"])) {
						$attributes = $data["attributes$i"];
						
					}else {

						$attributes = '';
					}

					if (isset($data["null$i"])) {
						$null = $data["null$i"];
						
					}else {

						$null = 'NOT NULL';
					}

					if (isset($data["index$i"])) {
						$index = $data["index$i"];
						if ($index==="") {
							$index="";
						}elseif($index==="UNIQUE KEY"){
							$index = $index ." " .$name."($name)";
						}
						else {
							$index .="($name)";
						}
						
					}else {

						$index = "";
					}

					if (isset($data["auto_increment$i"])) {
						$auto_increment = $data["auto_increment$i"];
						
					}else {

						$auto_increment = "";
					}

					if (isset($data["comments$i"])) {
						$comment = $data["comments$i"];
						if ($comment==='') {
							$comment.="";
						}else {
							$comment = "COMMENT ";
							$comment .= $data["comments$i"];
						}
						
					}else {

						$comment = "";
					}

					$STR .= " $name $type $attributes $collation $null $default $auto_increment $comment,";

					$IND .= "$index,";
					$i++;

				}

				if (isset($data['engine_name'])) {
					$database_engine = $data['engine_name'];
					$engine_name ="ENGINE = ".$database_engine;
				}else{

					$engine_name= "ENGINE = InnoDB ";
				}

				if (isset($data["engine_collation"])) {
						$engine_collation = $data["engine_collation"];
						
						if ($engine_collation!=='') {

							$database_collation = explode('-',$engine_collation);
							$database_collation_label = $database_collation[0];
							$database_collation_name = $database_collation[1];

							$engine_collation = " CHARACTER SET $database_collation_label COLLATE ".$database_collation_name;
							
						}else{
							
							$engine_collation = " CHARACTER SET latin1 COLLATE latin1_swedish_ci";
						}
						
					}else {

						$engine_collation = " CHARACTER SET latin1 COLLATE latin1_swedish_ci";
					}

				


			}else{
				echo "Submit Data Unsuccessfully . ";
			}

			$command = $STR . $IND;
			$cmd = rtrim($command, ",");
			$engine = $engine_name . $engine_collation;
			$sql = "CREATE TABLE $table_name($cmd) $engine";
			$run_query = $this->_db->query($sql);
			if ($run_query) {
				echo "<script>alert('table created successfully.')</script>";
				echo "<script>window.open('/dashboard/','_self')</script>";
			}else{
				echo "Query Doesn't Set " . mysqli_report($run_query);
			}


		}
	}