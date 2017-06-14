<div class="col-sm-12">
					
	<div class="col-sm-8 content">
						
		<form action="" method="post">

			<?php
				if (!empty($data->single_menu)) {
					
					$single = $data->single_menu;
			?>

			<div class="form-group" style="margin-top:50px;">
				<div class="col-sm-3" style="margin-top: 15px;">
					<label>Parent:</label>
				</div>
				<div class="col-sm-9" style="margin-top: 15px;">
					<select id="menus" name="menus" class="form-control">
					<?php
						if ($single->sub_id !=0) {
							
							echo '<option value="child">Child</option>';
						}
					?>
					<?php
						if (!empty($data->sidebar_menu_parent)) {
							
							$get = $data->sidebar_menu_parent;
							echo '<option value="'.$get->parent.'">'.$get->menu.'</option>';
						}
					?>
						
						<option value="0">Parent</option>
						<option value="child">Child</option>
					</select>
				</div>	
			</div>
					<div class="form-group"  id="parent" style="display:none;margin-top: 15px;">
						<div class="col-sm-3" style="margin-top: 15px;">
							<label>Select Parent :</label>
						</div>
						<div class="col-sm-9" style="margin-top: 15px;">
							<select name="parent_id" class="form-control">
								<?php
									if (!empty($data->parent_name)) {
											
										echo '<option value="'.$data->parent_name->id.'">'.$data->parent_name->menu.'</option>';
									}
			
								?>
								<option value="0">Select Parent</option>
								<?php
									if (!empty($data->sidebar_menus)) {
										
										foreach ($data->sidebar_menus as $sidebar) {
											
											echo '<option value="'.$sidebar->id.'">'.$sidebar->menu.'</option>';
										}
									}
								?>
								
							</select>
						</div>
					</div>

			<div class="form-group"  id="child_parent">
				<div class="col-sm-3">
					<label>Select Child Parent :</label>
				</div>
				<div class="col-sm-9" style="margin-top: 15px;">
					<select name="child_id" class="form-control">
						<?php
							if ($single->child!=0) {

								if (!empty($data->child_name)) {
									
									echo '<option value="'.$single->child.'">'.$data->child_name->menu.'</option>';
								}
							}
						?>
						<option value="">Select Child Parent</option>
						<?php
							if (!empty($data->child_parent)) {
										
								foreach ($data->child_parent as $sidebar) {
											
									echo '<option value="'.$sidebar->id.'">'.$sidebar->menu.'</option>';
								}
							}
						?>
								
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-3" style="margin-top: 15px;">
					<label for="change_value">Change Value</label>
				</div>
				<div class="col-sm-9" style="margin-top: 15px;">
				<?php

					if (!empty($data->single_menu)) {
						
						$single = $data->single_menu;
					}
				?>
					<input type="text" name="change_name" id="change_value" class="form-control" value="<?= $single->menu?>" />
				</div>	
				
			</div>

			<div class="form-group" ">
				<div class="col-sm-3">
					<label for="link">Create a Link :</label>
				</div>
				<div class="col-sm-9" style="margin-top: 15px;">
					<input type="text" id="link" name="link" class="form-control" value="<?= $single->link?>" required />
				</div>
			</div>
		<?php
			}
		?>
			<input type="submit" name="change" class="btn btn-success btn-lg float-right" value="Change" style="margin-top: 15px;">
								
		</form>
	</div>
	<div class="col-sm-4 widget"></div>
</div>