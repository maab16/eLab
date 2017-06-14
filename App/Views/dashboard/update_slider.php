<div class="col-sm-12">
					
	<div class="col-sm-8 content">
						
		<form action="" method="post" enctype="multipart/form-data">
			<?php
				if (!empty($data->slider_data)) {
					
					$data = $data->slider_data;
			?>

			<div class="form-group" style="margin-top:50px;">
				<div class="col-sm-3">
					<label>Slider Image :</label>
				</div>
				<div class="col-sm-9" style="margin-bottom:15px;">
					<input type="file" name="update_image" class="btn btn-default" required/>
				</div>
			</div>

			<div class="form-group" style="margin-top:50px;">
				<div class="col-sm-3">
					<label for="link">Link : </label>
				</div>
			<div class="col-sm-9">
				<input type="text" id="link" name="link" class="form-control" value="<?= $data->link;?>" placeholder="Link" required />
			</div>
		</div>
	<?php
		}
	?>					
		<input type="submit" name="update_slider" class="btn btn-success btn-lg" value="UPDATE SLIDER" style="margin-top:20px;float: right;" />
								
		</form>
	</div>
	<div class="col-sm-4 widget"></div>
</div>