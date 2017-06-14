<div class="col-sm-12">
	<div class="col-sm-10 main_content">
					
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-8 content">
					<div class="col-sm-12">
						<div class="row">
							<!--Create Table & Colum field-->
							<div id="panal_content" class="col-sm-12" style="margin-top:15px;">

								<div class="row">
									<form name="post_item" action="" method="post" enctype="multipart/form-data">
										<div class="col-sm-12">
											<h1 align="center">Insert new Product here.</h1>
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Product Code </label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="product_code" placeholder="New Post Title" required />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Product Name </label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="product_name" placeholder="New Post Title" required />
												</div>
											</div>
														
										</div>
													
										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Image </label>
												</div>
												<div class="col-sm-10 ">
													<input type="file"  name="product_image" class="btn btn-default" required/>
												</div>
											</div>
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label style="font-size:18px;">Brands </label>
												</div>
												<div class="col-sm-10 ">
													<select name="product_brand" class="form-control" style="max-width:280px">
														<option value="">Brands</option>
													<?php
														if (!empty($data->brands)) {
															foreach($data->brands as $obj) {
																		

													?>
														<option value="<?php echo $obj->brand_name;?>">
													<?php echo $obj->brand_name;?></option>
													<?php }}?>
																	
													</select>
												</div>
											</div>
											
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label style="font-size:18px;">Categories </label>
												</div>
												<div class="col-sm-10 ">
													<select id="category" name="product_category" class="form-control" style="max-width:280px">
														<option value="">Category</option>
													<?php
														if (!empty($data->categories)) {
															foreach($data->categories as $obj) {
																		

													?>
														<option value="<?php echo $obj->cat_name;?>">
													<?php echo $obj->cat_name;?></option>
													<?php }}?>
																	
													</select>
												</div>
											</div>
											
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Product Price</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="price" placeholder="Enter Price" required />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Tag</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="tag" placeholder="Tags" required />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label style="font-size:18px;">Availability </label>
												</div>
												<div class="col-sm-10 ">
													<select id="available" name="available" class="form-control" style="max-width:280px">
														
														<option value="">Availability</option>
														
													<?php
														if (!empty($data->availability)) {
															foreach($data->availability as $obj) {
																		

													?>
														<option value="<?php echo $obj->availability_id;?>">
													<?php echo $obj->availability_name;?></option>
													<?php }}?>
																	
													</select>
												</div>
											</div>
											
										</div>
									<?php 
										
										include_once VIEWS_PATH.DS.'dashboard'.DS.'includes'.DS.'insert_description.php';?>

									<div class="col-sm-12 post_label" style="margin-top:10px;margin-bottom: 10px;">
										<input type="hidden" name="token" value="<?php echo \Blab\Libs\Token::generate();?>"/>
										<input id="product_insert" type="submit" class="btn btn-success btn-lg" name="product_insert" value="Publish Post" style="float: right;"  required />
									</div>

									</form>
							</div>
											
											
						</div><!--End Panel Content-->
					</div>
				</div>
								
			</div>
			<div class="col-sm-4 widget">
				<!--Upload Post Image-->
				<div class="col-sm-12">
					<div class="row" style="margin-top:15px;margin-bottom:50px;">
						<div class="tune_img_head drop_div">
							<button id="head_btn" class="btn btn-default ctrl_btn" style="width:100%;">
              
		    	            	<strong class="left">Tune Image</strong>
			                	<span id="database_navarrow" class="navarrow right" >&#9652</span> 
			                </button>
				            <div class="user_img_body" style="display:block;background-color: #E6E6E6;">
							                		
			        			 <div class="btn-group tune_img_body" style="margin-top:10px;">
									<button  id="btn1" class="btn btn-default style_btn active" onclick="displayOne('box1','btn1')">From Computer</button>
					
									<button  id="btn2" class="btn btn-default style_btn" onclick="displayOne('box2','btn2')">From Tune library</button>
		
								</div>

								<div class="sub_buttons p_active" id="box1">
									<?php 

										if(!empty($data->posts)){
											foreach($data->posts as $post ){
												echo "<h6 style='margin-top:3px;margin-bottom:3px'><a href='single.php?post_id=$post->post_id'>". $post->post_title . "</a></h6>" ;
											}
										}
									?>
								</div>
							<div class="sub_buttons p_deactive" id="box2">
								<p>Popular Post</p>
							</div>
	              		</div>
					</div>
				</div>
			 </div>
		  </div>
	   </div>
	 </div>
					
  </div>	
</div>
				