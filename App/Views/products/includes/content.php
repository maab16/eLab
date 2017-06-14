<div class="container-fluid">
	<div class="content">
		<div class="container">
			<div class="col-sm-12 no-paddind">
				<div class="col-sm-4 no-paddind">
					<div class="col-sm-12 no-padding">
						<div class="offer_head align-center ">
							<h3>Offers</h3>
						</div>
					</div>

					<div class="col-sm-12 no-padding sidebar">
						<div class="offer">
							<div class="col-sm-6 single_offer">
								<img src="/images/discount1.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 single_offer">
								<img src="/images/discount2.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 single_offer">
								<img src="/images/discount3.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 single_offer">
								<img src="/images/discount1.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 single_offer">
								<img src="/images/discount2.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 single_offer">
								<img src="/images/discount3.jpg" class="img-responsive">
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-8 no-paddind">
					<div class="col-sm-12 featured_products">
				
						<?php
							
							if(!empty($data->featured_product_pgn_data)){

								foreach ($data->featured_product_pgn_data as $featured_product) {

									//$product_name = $featured_product->product_name;
									$product_name = substr($featured_product->product_name,0,50);
						?>
						<div class="col-sm-3 no-padding-right ">
							<div class="col-sm-12 no-padding single_product">
								<div class="col-sm-12">
									<a href="/products/single/<?php echo $featured_product->category ."/".$featured_product->product_id?>"><img class="img-responsive" src="/images/desktop/<?php echo $featured_product->product_image;?>"></a>
								</div>
								<div class="col-sm-12 product_price">
									<h3 class="align-center">Price : <span><?php echo $featured_product->price?></span></h3>
								</div>

								<div class="col-sm-12 product_summery">
									<a href="/products/single/<?php echo $featured_product->category ."/".$featured_product->product_id?>" class="align-center"><?php echo $product_name?></p>
									</a>
								</div>

								<div class="col-sm-12 add_to_cart align-center">
									<button onclick="addToCart('<?php echo $featured_product->product_id?>');" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Add To Cart</button>
								</div>
							</div>
						</div>
						<?php
								}
							} 
						?>
					
					</div>
					<?php

						if(!empty($data->featured_product_pgn_list)){
							echo "<div class='col-sm-12 pgn_border' id='pagination_controls'>" .$data->featured_product_pgn_list."</div>";
						}
					?>
				</div>

			</div>
		</div>
	</div>
</div>