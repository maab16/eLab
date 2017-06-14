<div class="sidebar_menu">

		<?php

			if (!empty($data->sidebar_menu)) {
								
				
				echo '<ul class="parent">';
				$i=1;
				foreach ($data->sidebar_menu as $sidebar) {

					// Display all parent menu
					if ($sidebar->parent==0 && $sidebar->child_parent==0 && $sidebar->sub_id==0) {

						echo "<li><a href='".$sidebar->link."'>".$sidebar->menu."</a>";
						
						foreach ($data->sidebar_menu as $sidebar) {
							// Only Display if child menu available
							if ($sidebar->parent==$i && $sidebar->child_parent==1) {	
								echo '<ul class="child_parent">';
						
								$j=1;
								// Display all menu under parent menu
								foreach ($data->sidebar_menu as $sidebar) {

									if ($sidebar->parent==$i && $sidebar->child_parent==1) {
								
										echo "<li><a href='".$sidebar->link."'>".$sidebar->menu."</a>";
									
										foreach ($data->sidebar_menu as $sidebar) {

											// Only Display if Sub Child menu available
											if ($sidebar->child==$j) {
						
												echo'<ul class="child">';
												// Display all menu under SUB CHILD menu
												foreach ($data->sidebar_menu as $sidebar) {
													if ($sidebar->child==$j && $sidebar->sub_id==2) {
														echo "<li><a href='".$sidebar->link."'>".$sidebar->menu."</a>";
													}
												}
												echo 	'</ul>';
												
											}
								
										}

										echo '</li>';
									}

									$j++;
							
								}
								echo '</ul>';
							}
						}
						echo '</li>';

					}
					$i++;
				}
				echo '</ul>';
			}

		?>
</div>