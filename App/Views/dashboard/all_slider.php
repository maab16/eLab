<div class="col-sm-12">
	<div class="col-sm-10 main_content">
					
		<div class="col-sm-8 content">
						
			<table border="2" class="all_slider">
				<thead>
					<th>Slider Image</th>
					<th>Link</th>
					<th>Update</th>
					<th>Delete</th>
				</thead>
				<tbody>
					<?php
								
						if (!empty($data->pagination)) {
									
							foreach($data->pagination as $get){
							
					?>
					<tr>
						<td>
							<img src="/images/slider/<?= $get->slider_image?>" />
						</td>
						<td>
							<a href="/dashboard/update_slider/<?= $get->slider_id;?>"><?= $get->link?></a>
						</td>
						<td>
							<a href="/dashboard/update_slider/<?= $get->slider_id;?>">edit</a>
						</td>
						<td>
							<a href="/dashboard/delete_slider/<?= $get->slider_id;?>" onclick="return confirm('Are you sure you want to delete?')">delete</a>
						</td>
					</tr>

					<?php }}?><!--End while statement-->
				</tbody>
			</table>
			<div id='pagination_controls'>
				<?php

					if (!empty($data->pagination_controll)){
								
						echo $data->pagination_controll;
					}
				?>
			</div>			
		</div>

	</div>

	<div class="col-sm-4 widget"></div>
</div>
