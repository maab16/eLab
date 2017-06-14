<div class="container-fluid slider_carousel">
	<div class="best">
		<div class="container">
			<div class="col-sm-12">
				<div class="col-sm-12" style="padding:0px;margin-top:20px;">
					
						<div class="best_head align-center">
							<h3>Best Seller</h3>

					</div>
				</div>

				<div class="col-sm-12 no-padding">
					<div class="best_link">
						<a class="float-left" href="#best" data-slide="prev"><button id="best_prev" class="btn btn-link"><span class="glyphicon glyphicon-chevron-left best_link_glyph"></span></button></a>
				           <a class="float-right" href="#best" data-slide="next"><button id="best_next" class="btn btn-link"><span class="glyphicon glyphicon-chevron-right best_link_glyph"></span></button></a>
					</div>
							
				</div>

				<div class="col-sm-12" style="padding:0px;margin-top:15px;">
					
					<div class="carousel slide" id="best">
			            <div class="carousel-inner">
			            	<?php
			            		if (!empty($data->best_seller)) {
			            			$i=1;
			            			foreach ($data->best_seller as $best) {

			            				$productName = substr($best->product_name,0,50);
			            				
			            	?>
				            	<div class="item <?php if($i==1)echo "active"?>">
				                    <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3 slideLeft">
				                    	<div class="col-sm-12">
				                    		<a class="img-responsive" href="/products/single/<?php echo $best->category ."/".$best->product_id;?>"><img src="/images/<?php echo $best->category."/".$best->product_image?>"></a>
				                    	</div>
				                    	
				                    	<div class="col-sm-12">
											<a href="/products/single/<?php echo $best->category ."/".$best->product_id;?>"><p class="detail"><?= $productName?></p></a>
										</div>
										<div class="col-sm-12 product_price">
											<h5 class="price"><span>Tk. <?= $best->price;?></h5></span>
										</div>
				                    </div>
				                </div>
			            	<?php
			            		$i++;
			            			}
			            		}
			            	?>
			            </div>
			            
			          </div>
				</div>

		</div>
	</div>

</div>
	
</div>
