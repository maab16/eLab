<div class="col-sm-12">
					
	<div class="col-sm-8 content">
						
		<form action="" method="post">
			<?php
				if (!empty($data->availability)) {
					
					$get = $data->availability;
			?>
			
			<div class="form-group">
				<label>Change ID</label>
				<input type="text" name="availability_id" id="change_value" class="form-control" value="<?= $get->availability_id?>" />
			</div>

			<div class="form-group">
				<label>Change Name</label>
				<input type="text" name="availability_name" id="change_value" class="form-control" value="<?= $get->availability_name?>" />
			</div>
			<?php
				}
			?>
			<input type="submit" name="change" class="btn btn-success btn-large" value="Change">
								
		</form>
	</div>
	<div class="col-sm-4 widget"></div>
</div>