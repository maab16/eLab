<div class="col-sm-12">
<div class="col-sm-10 main_content">
					
	<div class="col-sm-8 content">

					<table border="2" class="all_brands">
						<thead>
							<th>Availability Id</th>
							<th>Availability Name</th>
							<th>Update</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
								
								if (!empty($data->availabilities)) {
									
									foreach($data->availabilities as $get){
									
							
							?>
						
							<tr>
								<td><?=$get->availability_id;?></td>
								<td><?=$get->availability_name;?></td>
								<td><a href="/dashboard/update_availability/<?= $get->id;?>">Edit</td>
								<td><a href="/dashboard/delete_availability/<?= $get->id;?>" onclick="return confirm('Are you sure you want to delete?')">Trash</td>
							</tr>
							<?php }}?><!--End while statement-->
						</tbody>
					</table>		

					</div>

					<div class="col-sm-4 widget">
						
						
					</div>
				</div>
			</div>
