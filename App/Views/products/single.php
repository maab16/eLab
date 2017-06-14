<div class="container-fluid">
	<div class="container">
		<div class="col-sm-12 single_content no-padding">
			<div class="col-sm-3 single_left">
				<?php include_once VIEWS_PATH.DS.'includes'.DS.'sidebar_menu.php';?>
			</div>
			<div class="col-sm-9 single_right">
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
						<div class="col-sm-6 single_product_detail">
							<div class="col-sm-12 no-padding single_product_head">
								<p><?php echo $single->product_name;?></p>
							</div>
							<div class="col-sm-12 no-padding web_id">
								<p>Product Code : <?php echo $single->product_code?></p>
							</div>
							<div class="col-sm-12 no-padding">
								<input id="input-id" type="text" name="rating" class="rating" data-size="xs" data-min="0" value="2.5" data-max="5" data-step="0.1" >
							</div>

							<div class="col-sm-12 no-padding availability">
								<p>Availability : <span><?php echo $single->availability_name;?></span></p>
							</div>
							
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
							    	
							    	if (!empty($single->processor)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Processor </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->processor.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->chipset)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Chipset </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->chipset.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->ram)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>RAM </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->ram.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->hard_disk)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Hard Disk </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->hard_disk.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->display)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Display </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->display.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->graphics)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Graphics </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->graphics.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->audio)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Audio </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->audio.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->optical_disk_drive)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Optical Disk Drive </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->optical_disk_drive.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->mouse)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Mouse </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->mouse.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->keyboard)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Keyboard </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->keyboard.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->operating_system)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Operating System </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->operating_system.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->warranty)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Warranty </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->warranty.'</p>
								    			</div>
								    		</div>
							    		';
							    	}

							    	if (!empty($single->others)) {
							    		echo '
											<div class="col-sm-12">
								    			<div class="col-sm-4">
													<h4>Others </h4>
								    			</div>
								    			<div class="col-sm-8">
													<p>'.$single->others.'</p>
								    			</div>
								    		</div>
							    		';
							    	}
					    
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
</div>
<?php require_once VIEWS_PATH.DS.'products'.DS.'includes/related_products.php';?>