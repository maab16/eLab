<div class="col-sm-12">
<div class="col-sm-10 main_content">
					
	<div class="col-sm-8 content">

					<table border="2" class="all_brands">
						<thead>
							<th>Menu Name</th>
							<th>Parent ID</th>
							<th>Child Parent ID</th>
							<th>Child ID</th>
							<th>Sub ID</th>
							<th>Link</th>
							<th>Update</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
								
								if (!empty($data->menus)) {
									
									foreach($data->menus as $get){
									
							
							?>
						
							<tr>
								<td><?=$get->menu;?></td>
								<td><?=$get->parent;?></td>
								<td><?=$get->child_parent;?></td>
								<td><?=$get->child;?></td>
								<td><?=$get->sub_id;?></td>
								<td><?=$get->link;?></td>
								<td><a href="/dashboard/update_menu/<?= $get->id;?>">Edit</td>
								<td><a href="/dashboard/delete_menu/<?= $get->id;?>" onclick="return confirm('Are you sure you want to delete?')">Trash</td>
							</tr>
							<?php }}?><!--End while statement-->
						</tbody>
					</table>		

					</div>

					<div class="col-sm-4 widget">
						
						
					</div>
				</div>
			</div>
