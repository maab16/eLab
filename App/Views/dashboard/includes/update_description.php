<?php
	
	if (!empty($data->product_description)) {
		
		$product = $data->product_description;
		if (!empty($data->update_product)) {

		$get = $data->update_product;
		switch ($get->category) {
			case 'desktop':
				
?>
<div id="desktop_description" class="col-sm-12 description no-padding product_description">
	<h3>Desktop Description : </h3>

	<div class="col-sm-12 post_label" style="margin-top:10px;">
		<div class="row">
			<div class="col-sm-2">
				<label>Processor</label>
			</div>
			<div class="col-sm-10 ">
				<input type="text" class="form-control" name="desktop_processor" value="<?php echo $product->processor;?>" placeholder="Processor" />
			</div>
		</div>
														
	</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Chipset</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_chipset" value="<?php echo $product->chipset;?>" placeholder="Chipset" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>RAM</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_ram" value="<?php echo $product->ram;?>" placeholder="RAM" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Hard Disk</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_hard_disk" value="<?php echo $product->hard_disk;?>" placeholder="Hard Disk" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Display</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_display" value="<?php echo $product->display;?>" placeholder="Display" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Graphics</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_graphics" value="<?php echo $product->graphics;?>" placeholder="Graphics" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Audio</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_audio" value="<?php echo $product->audio;?>" placeholder="Audio" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Optical Disk Drive</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_optical_disk_drive" value="<?php echo $product->optical_disk_drive;?>" placeholder="Optical Disk Drive" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Mouse</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_mouse" value="<?php echo $product->mouse;?>" placeholder="Mouse" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Keyboard</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_keyboard" value="<?php echo $product->keyboard;?>" placeholder="Keyboard" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Operating System</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_operating_system" value="<?php echo $product->operating_system;?>" placeholder="Operating System" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Warranty</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="desktop_warranty" value="<?php echo $product->warranty;?>" placeholder="Warranty"  />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Others</label>
												</div>
												<div class="col-sm-10 ">
													<textarea class="form-control" name="desktop_others" placeholder="Others"><?php echo $product->others;?></textarea>
												</div>
											</div>
														
										</div>
									</div>
<?php

				break;
			case 'laptop':
?>
<div id="Notebook_description" class="col-sm-12 description no-padding product_description" style="display:none">
										<h3>Laptop Description : </h3>
										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Processor</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="processor" placeholder="Processor" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Chipset</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="chipset" placeholder="Chipset" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>RAM</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="RAM" placeholder="RAM" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Hard Disk</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="hard_disk" placeholder="Hard Disk" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Display</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="display" placeholder="Display" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Graphics</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="graphics" placeholder="Graphics" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Audio</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="audio" placeholder="Audio" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Optical Disk Drive</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="optical_disk_drive" placeholder="Optical Disk Drive" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Mouse</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="mouse" placeholder="Mouse" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Keyboard</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="keyboard" placeholder="Keyboard" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Operating System</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="operating_system" placeholder="Operating System" />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Warranty</label>
												</div>
												<div class="col-sm-10 ">
													<input type="text" class="form-control" name="warranty" placeholder="Warranty"  />
												</div>
											</div>
														
										</div>

										<div class="col-sm-12 post_label" style="margin-top:10px;">
											<div class="row">
												<div class="col-sm-2">
													<label>Others</label>
												</div>
												<div class="col-sm-10 ">
													<textarea class="form-control" name="others" placeholder="Others"></textarea>
												</div>
											</div>
														
										</div>
									</div>

<?php

				break;
			}
		}
	}
?>



