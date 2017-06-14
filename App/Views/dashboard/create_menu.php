<div class="col-sm-12">

	<div class="col-sm-8">
		<div class="cat_form" class="col-sm-12">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group" style="margin-top:50px;">
						<div class="col-sm-3">
							<label>Select Menu :</label>
						</div>
						<div class="col-sm-9" style="margin-top: 15px;">
							<select id="menus" name="menus" class="form-control">
								<option value="">Select Parent</option>
								<option value="0">Parent</option>
								<option value="child">Child</option>
							</select>
						</div>	
					</div>
					<div class="form-group"  id="parent" style="display:none;margin-top: 15px;">
						<div class="col-sm-3">
							<label>Select Parent :</label>
						</div>
						<div class="col-sm-9" style="margin-top: 15px;">
							<select id="parent_menu" name="parent_id" class="form-control">
								<option value="">Select Parent</option>
								
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

					<div class="form-group" ">
						<div class="col-sm-3">
							<label for="menu_item">Create a Menu :</label>
						</div>
						<div class="col-sm-9" style="margin-top: 15px;">
							<input type="text" id="menu_item" name="menu_name" class="form-control" placeholder="Category name" required />
						</div>
					</div>

					<div class="form-group" ">
						<div class="col-sm-3">
							<label for="link">Create a Link :</label>
						</div>
						<div class="col-sm-9" style="margin-top: 15px;">
							<input type="text" id="link" name="link" class="form-control" placeholder="Menu Link" required />
						</div>
					</div>
								
					<input type="submit" name="insert_menu" class="btn btn-success btn-lg" value="CREATE CATEGORY" style="margin-top:20px;float: right;" />

				</form>
		</div>
	</div>
	<div class="col-sm-4 widget"></div>
</div>