		<div class="col-sm-12">
	
				<div class="col-sm-10 main_content">
					
					<div class="col-sm-8 content">

						<?php
							if (!empty($data->update_product)) {

							$get = $data->update_product;
						?>
						
						
							<form name="post_item" action="" method="post" enctype="multipart/form-data">
										<div class="col-sm-12">
											<h1 align="center">Update Product here.</h1>
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Product Code </label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" value="<?php echo $get->product_code;?>" name="product_code" placeholder="New Post Title" disabled="true"/>
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Product Name </label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="product_name" value="<?php echo $get->product_name;?>" placeholder="New Post Title" required />
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
														<option value="<?php echo $get->brand;?>"><?php echo $get->brand;?></option>
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
													<select id="category" name="update_category" class="form-control" style="max-width:280px">
														<option value="<?php echo $get->category;?>"><?php echo $get->category;?></option>
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
													<input type="text" class="form-control" name="price" value="<?php echo $get->price;?>" placeholder="Enter Price" required />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Tag</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="tag" value="<?php echo $get->tag;?>" placeholder="Tags" required />
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
														<?php

															if (!empty($data->available)) {
															$get = $data->available;
														?>
																
																<option value="<?php echo $get->availability_id;?>"><?php echo $get->availability_name;?></option>
														<?php	
															}
														?>
														
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
										
										include_once VIEWS_PATH.DS.'dashboard'.DS.'includes'.DS.'update_description.php';?>

									<div class="col-sm-12 post_label" style="margin-top:10px;margin-bottom: 10px;">
										<input type="hidden" name="token" value="<?php echo \Blab\Libs\Token::generate();?>"/>
										<input id="product_update" type="submit" class="btn btn-success btn-lg" name="product_update" value="Publish Post" style="float: right;"  required />
									</div>

									</form>
						
						<?php }?><!--End if statement-->
					</div>
					<div class="col-sm-4 widget"></div>
				</div>
			</div>
				
			</div>
		</div>