<div class="container-fluid">
	<div class="categories_item">
		<div class="container">
			<div class="col-sm-12">

					<div class="col-sm-12 no-padding">
						
						<div class="col-sm-6">
							<div class="featured_head align-center ">
								<h3>Desktop Products</h3>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="category_link">
								<a href=""><span class="glyphicon glyphicon-menu-left category_prev"></span></a>
						           <a href=""><span class=" glyphicon glyphicon-menu-right category_next"></span></a>
							</div>
						</div>

					</div>
					
					<div class="col-sm-12 featured_products">
				
						<?php
							
							if(!empty($data->desktops)){

								foreach ($data->desktops as $featured_product) {

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
							
			</div>
		</div>
	</div>
</div>
