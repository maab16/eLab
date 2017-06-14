	<?php
		$user = \Blab\Libs\BLAB_User::getUserInstance();
		if ($user->isLoggedIn()) {
	?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="header_fixed dashboard_header">

							<div class="col-sm-9 main_site">
								
								<a href="/">Visit Site</a>
							</div>
							<div class="col-sm-3" id="settings">
								<div class="col-sm-12 no-padding">
									<div class="col-sm-3 no-padding">
										<?php
											if (!empty($user->data()->image)) {
												echo '<img src="/images/users/'.$user->data()->image.'"/>';
											}else{

												$name = $user->data()->fname .' '. $user->data()->lname;
	
												$shortName = "";
												//$words = preg_split("/\s+/", $name);
												$words = explode(" ", $name);

												foreach ($words as $w) {
												
													$shortName .= ucfirst($w[0]);

												}

												echo '<p class="short_name">'.$shortName.'</p>';
											}
										?>
									</div>
									<div class="col-sm-9 no-padding">
										<ul class="parent no-padding">
											<li><a href="/dashboard/settings/"><?php echo ucwords($user->data()->fname . " ".$user->data()->lname) ;?></a>
											
												<div class="child_div">
													<ul class="child">
														<li><a href="/dashboard/update/">Update</a></li>
														<li><a href="/dashboard/">Admin</a></li>
														<li><a href="/users/logout/">LogOut</a></li>
													</ul>
													
												</div>

											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	<?php }?>