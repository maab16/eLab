<div class="container-fluid slider_div">
	<div class="header_bottom">
		<div class="container">
			<div class="col-md-12 no-padding">
				<div class="col-md-3 no-padding slider_sidebar_menu">
					
					<?php include_once VIEWS_PATH.DS.'includes'.DS.'sidebar_menu.php';?>
					
				</div>
				<div class="col-md-9 no-padding">
					<div class="col-md-12 no-padding-left">
						<div id="header_slider">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
							
								<!-- Indicators -->
							    <ol class="carousel-indicators">
							    <?php
								if (!empty($data->slider)) {

									$i=0;
									foreach ($data->slider as $slider) {

								?>

							      <li data-target="#myCarousel" data-slide-to="<?= $i?>" <?php if($i==0) echo "class='active'"?>"></li>
							<?php
								$i++;
									}
								}
							?>
							 </ol>

							    <!-- Wrapper for slides -->
							    <div class="carousel-inner" role="listbox">
							    <?php
								if (!empty($data->slider)) {
									$i=1;
									foreach ($data->slider as $carousel) {

								?>
							      <div class="item <?php if ($i==1) echo "active"?>">
							        <a href="<?= $carousel->link?>"><img src="/images/slider/<?php echo $carousel->slider_image?>" /></a>
							      </div>

							   <?php
							   	$i++;
							   	}
							   }
							   ?>   
							    </div>

							    <div class="link">
							    	<a id="slider_prev" class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								      <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a id="slider_next" class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								      <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
								      <span class="sr-only">Next</span>
								    </a>
							    </div>
							    
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>