<div class="col-sm-12">
					
	<div class="col-sm-8 content">
						
		<form action="" method="post">
			<?php
				if (!empty($data->category)) {
					
					$get = $data->category;
			?>
			
			<div class="form-group">
				<label for="change_value">Change Vlue</label>
				<input type="text" name="change_name" id="change_value" class="form-control" value="<?= $get->cat_name?>" />
			</div>
			<?php
				}
			?>
			<input type="submit" name="change" class="btn btn-success btn-lg " value="Change">
								
		</form>
	</div>
	<div class="col-sm-4 widget"></div>
</div>