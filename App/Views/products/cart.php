<div class="container">
	<div class="col-sm-12 checkout">
		<div class="col-sm-12 cart_head">
			<div class="col-sm-2 product_img">
				<h4 class="align-center">Product</h4>
			</div>
			<div class="col-sm-2 product_name">
				<h4 class="align-center">Product Name</h4>
			</div>
			<div class="col-sm-2">
				<div class="col-sm-12 price_head">
					<h4 class="align-center">Price</h4>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="col-sm-12 quantity_head">
					<h4 class="align-center">Quantity</h4>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="col-sm-12 total_head">
					<h4 class="align-center">Total</h4>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="col-sm-12 remove_head">
					<h4 class="align-center">Remove</h4>
				</div>
			</div>
		</div>

		<div class="col-sm-12 cart_items no-padding">
			<?php
				if (!empty($data->carts)) {
					$i=1;
					foreach ($data->carts as $cart) {
			?>
			<div class="col-sm-12 single_item display_product product_<?=$i?>">
				<div class="col-sm-2">
					<div class="col-sm-12">
						<a href="/products/single/<?php echo $cart->category.'/'.$cart->product_id;?>"><img src="/images/<?php echo $cart->category.'/'.$cart->product_image;?>" class="img-responsive"></a>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="col-sm-12 product_description">
						<a href="/products/single/<?=$cart->id?>"><p><?= $cart->product_name?></p></a>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="col-sm-12 price">
						<h4 class="align-center"><strong>Tk. <?= $cart->price?></strong></h4>
						<input  id="single_price<?=$i?>" class="single_price" type="hidden" name="single_price" value="<?=$cart->price?>">
					</div>
				</div>
				<div class="col-sm-2">
					<div class="col-sm-12 quantity no-padding">
						<div class="col-sm-3 no-padding">
							<a class="plus"><span class="glyphicon glyphicon-plus-sign"></span></a>
						</div>
						<div class="col-sm-6 no-padding">
							<input id="qty_input<?=$i?>" type="text" name="qty" value="<?=$cart->qty?>" class="form-control">
						</div>
						<div class="col-sm-3 no-padding">
							<a class="minus"><span class="glyphicon glyphicon-minus-sign"></span></a>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="col-sm-12 total single_total<?=$i?>" id="single_total<?=$i?>">
						<h4 class="align-center"><strong>$60</strong></h4>
						<input id="total_price<?=$i?>" class="total_price" type="hidden" name="total_price" value="60">
						
					</div>
				</div>
				<div class="col-sm-2">
					<div class="col-sm-12  align-center remove_btn">
						<a  class="remove"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
				</div>
				<input id="productID_<?=$i?>" type="hidden" name="product_id" value="<?=$cart->product_id?>">
			</div>
		<?php
					$i++;
					}
				}
			?>
		</div>
		
	</div>

	<div class="col-sm-12 checkout_bottom" style="margin-bottom:30px;">
		<div class="col-sm-6 product_list">
			<div class="col-sm-12 cart_head">
				<div class="col-sm-5 product_name">
					<h4 class="align-center">Product Name</h4>
				</div>
				<div class="col-sm-4">
					<div class="col-sm-12 quantity_head">
						<h4 class="align-center">Quantity</h4>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="col-sm-12 price_head">
						<h4 class="align-center">Price</h4>
					</div>
				</div>
				
			</div>
			
			<div class="col-sm-12 cart_items no-padding cart_shoping">
				<?php
					if (!empty($data->carts)) {
						$i=1;
						foreach ($data->carts as $cart) {
				?>
				<div class="col-sm-12 single_item product_<?=$i?>">

					<div class="col-sm-5">
						<div class="col-sm-12 product_description">
							<a href="/products/single/<?php echo $cart->category.'/'.$cart->product_id?>"><p><?=$cart->product_name?></p></a>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-12 quantity no-padding">
							<div class="col-sm-3 no-padding">
								<a class="plus"><span class="glyphicon glyphicon-plus-sign"></span></a>
							</div>
							<div class="col-sm-6 no-padding">
								<input id="qty_input<?=$i?>" type="text" name="qty" value="<?=$cart->qty?>" class="form-control" disabled>
							</div>
							<div class="col-sm-3 no-padding">
								<a class="minus"><span class="glyphicon glyphicon-minus-sign"></span></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="col-sm-12 total single_total<?=$i?>" id="single_total<?=$i?>">
							<h4 class="align-center"><strong><?=$cart->price?></strong></h4>
							<input id="total_price<?=$i?>" class="total_price" type="hidden" name="total_price" value="<?=$cart->price?>">
						</div>
					</div>
				</div>
				<?php
						$i++;
						}
					}
				?>

				<div class="col-sm-12 total_amount">
					<div class="col-sm-5 total_amount_head">
						<h4>Total : </h4>
					</div>
					<div class="col-sm-4"></div>
					<div class="col-sm-3 price_total">
						<h4 class="align-center"><strong>Tk. 0</strong></h4>
						<input class="price_total" type="hidden" name="price_total" value="660">
					</div>
				</div>

			</div>
		</div>

		<div class="col-sm-6 checkout_btn">
			<div class="col-sm-1">
				<a href="/products/checkout/" class="btn btn-success">Process To Checkout</a>
			</div>
		</div>

	</div>
</div>
