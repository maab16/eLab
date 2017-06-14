<div class="col-sm-12">
<div class="col-sm-10 main_content">
					
	<div class="col-sm-8 content">
						
						<?php
							
							if (!empty($data->pagination)) {
								
								foreach($data->pagination as $get){
								$productName = strlen($get->product_name);
						
						?>
							<div class='single_post col-sm-12'>

									<div class='post_heading col-sm-12' style="padding:0px;">

										<div class='col-sm-12' style="padding:0px;">
											<div class="col-sm-12" style="padding:0px;">
												<div class="col-sm-8" style="padding-left:10px;">
													<h1><small><a href='/dashboard/single/<?php echo $get->product_id?>'><?php echo $get->product_name;?></a></small></h1>
												</div>
												<div class="col-sm-4">
													<a href="/dashboard/update_product/<?php echo $get->product_id?>"><button class="btn btn-link">Edit</button></a>
													<a href="/dashboard/delete_product/<?php echo $get->product_id?>" onclick="return confirm('Are you sure you want to delete?')"><button class="btn btn-link">Trash</button></a>
												</div>
											</div>
											
											<div class='author_details col-sm-12' style="padding-left:10px;">
												<p class='author_name'>Brand: <a href='#'><?php echo $get->brand?></a> । Category : <?php echo $get->category;?> । সাম্প্রতিক সংশোধন : <?php echo $get->modified;?></p>
											</div>
										</div>
										
										
									</div>
									
									<div class='col-sm-12'>

										<div class='post row'>

											<div class='post_img_div col-sm-2' style="padding-left:10px; padding-right:10px;">
												<img class='post_img img-thumbnail' src='/images/<?php echo $get->category.'/'. $get->product_image ?>'alt='post_image' title='<?php echo $get->tag;?>'/>
											</div>
											<?php
												if ($productName>100) {
												$post_summery = substr($productName, 0,100);
											?>
											<div class='post_body col-sm-10' style="padding-left:10px;">
												<div class="col-sm-12">
													<p><?php echo $post_summery?></p>
												</div>
												
												<div class='post_details col-sm-12'>
													<a href='/dashboard/single/<?php echo $get->product_id?>'><button type='button' class='btn btn-link right'>Details</button></a>
												</div>
											</div>

											<?php }else{ ?>

											<div class='post_body col-sm-10'>
												<p><?php echo $get->product_name?></p>
											</div>
											

											<?php } ?> <!--End if statement-->
						
										</div>
										
									</div>
							</div>
							
						<?php }}?><!--End while statement-->	

						<div id='pagination_controls'>
							<?php

								if (!empty($data->pagination_controll)) {
								
									echo $data->pagination_controll;
								}
							?>
						</div>

					</div>

					<div class="col-sm-4 widget">
						
						
					</div>
				</div>
			</div>
