<div class="container-fluid">
	<div class="container">
		<div class="single_content no-padding">
			
			<div class="col-sm-12 single_right">
			<?php

				if (count($data->single_product)) {
					$single = $data->single_product;	
			?>
			
				<form action="" method="get">
					<div class="col-sm-12 no-padding">
						<div class="col-sm-6 single_product_img">
							<div class="col-sm-12 no-padding">
								<div class="magnify">
									<div class="zoom-length" style="display:none"></div>
									<img class="small" src="/images/<?php echo $single->category .'/'.$single->product_image;?>" height="350" width="350""/>
									<div class="zoom" style="display:none">
										<img class="large" src="/images/<?php echo $single->category .'/'.$single->product_image;?>" width="600px" height="600px">
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-sm-6 single_product_detail" style="margin-top:50px;">
							<div class="col-sm-12 no-padding single_product_head">
								<p><?php echo $single->product_name;?></p>
							</div>
							<div class="col-sm-12 no-padding web_id">
								<p>Product Code : <?php echo $single->product_code?></p>
							</div>
							<div class="col-sm-12 no-padding">
								<input id="input-id" type="text" name="rating" class="rating" data-size="xs" data-min="0" value="2.5" data-max="5" data-step="0.1" >
							</div>
							<?php
								if ($single->available ==1) {
								?>
									<div class="col-sm-12 no-padding availability">
										<p>Availability : <span>In Stock</span></p>
									</div>
							<?php
								}else{
							?>
									<div class="col-sm-12 no-padding availability">
										<p>Availability : <span>Out of Stock</span></p>
									</div>
							<?php
								}
							?>
							
							<div class="col-sm-12 condition no-padding">
								<p>Condition : <span>New</span></p>
							</div>
							<div class="col-sm-12 single_product_brand no-padding">
								<p>Brand : <span><?=$single->brand?></span></p>
							</div>

							<div class="col-sm-12 no-padding price">
								<p>Price : <span>TK. <?=$single->price?></span></p>
							</div>
							
							<div class="col-sm-12 no-padding">
								
									<div class="col-sm-4 no-padding quantity">
										<label>Quantity : </label>
									</div>
									<div class="col-sm-2 no-padding">
										<input type="text" name="qty" value="1" class="form-control">
									</div>
									<div class="col-sm-6 no-padding add_qty">
										<button type="submit" name="add_to_cart" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Add to cart</button>
									</div>
							</div>
						</div>
					</div>
				</form>
				<?php
					}
				?>
				<div class="col-sm-12 product_description">
					<div class="product_tab">
						<ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
						    <li><a data-toggle="tab" href="#review">Review</a></li>
						    <li><a data-toggle="tab" href="#information">Information</a></li>
						</ul>
					</div>

					<div class="tab-content col-sm-12">
					    <div id="description" class="tab-pane fade in active">
					    	<?php

					    		if (!empty($data->product_description)) {

					    			$description = $data->product_description;
							    	
							    	if (!empty($description->processor)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Processor </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->processor.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->chipset)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Chipset </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->chipset.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->ram)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>RAM </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->ram.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->hard_disk)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Hard Disk </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->hard_disk.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->display)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Display </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->display.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->graphics)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Graphics </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->graphics.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->audio)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Audio </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->audio.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->optical_disk_drive)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Optical Disk Drive </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->optical_disk_drive.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->mouse)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Mouse </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->mouse.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->keyboard)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Keyboard </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->keyboard.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->operating_system)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Operating System </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->operating_system.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->warranty)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Warranty </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->warranty.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($description->others)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Others </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$description->others.'</p>
								    			</div>
								    		</div>
							    		';
							    	}
					    
					    		}else{

					    			echo '
						    			<div class="col-sm-12">
									    			
											<h4>Description not available </h4>
									  		
									    </div>
							    	';
					    		}
					    	?>
					      
					    </div>
					    <div id="review" class="tab-pane fade">
					      <h3>Review</h3>
					      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					    </div>
					    <div id="information" class="tab-pane fade">
					      <h3>Information</h3>
					      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
					    </div>
					</div>
				</div>
		</div>
	</div>
</div>
<?php require_once VIEWS_PATH.DS.'products'.DS.'includes/related_products.php';?>