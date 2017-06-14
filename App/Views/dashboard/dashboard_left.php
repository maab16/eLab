<div class="col-md-12 select-box" style="padding:0px;">
    <div class="menu_fixed menu" style="top:60px;">
    
      <div class="btn-group-vertical" style="width:100% !important;">

        <?php 
        
          $user = new \Blab\Libs\Permission();
          if ($user->hasPermission('admin')) {
            
        ?>

            <div id="dropdown-1" class="drop_div">
              
                <button class="dropdown-item btn btn-primary" style="width:100% !important">
                 
                    <strong class="left">Table</strong>
                    <span id="database_navarrow" class="navarrow right" >&#9662</span> 
                </button>
                  <div id="database" class="dropdown-container" style="display:none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="#" class="btn btn-default" style="text-align:left;">Delete Table</a>
                        <a href="/dashboard/create_table/set_column" class="btn btn-default" style="text-align:left;">New Table</a>
                     </div>

                  </div>
              </div>

              <div id="dropdown-3" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Menus</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container" style="display:none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/create_menu/" class="btn btn-default" style="text-align:left;">New Menu</a>
                        <a href="/dashboard/all_menus/" class="btn btn-default" style="text-align:left;">All Menus</a>
                    </div>
                  </div>
              </div>

              <div id="dropdown-3" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Brand</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container" style="display:none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/create_brand/" class="btn btn-default" style="text-align:left;">New Brand</a>
                        <a href="/dashboard/all_brands/" class="btn btn-default" style="text-align:left;">All Brands</a>
                    </div>
                  </div>
              </div>

              <div id="dropdown-3" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Category</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container" style="display:none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/create_category/" class="btn btn-default" style="text-align:left;">New Category</a>
                        <a href="/dashboard/all_categories/" class="btn btn-default" style="text-align:left;">All Categories</a>
                    </div>
                  </div>
              </div>

              <div id="dropdown-3" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Abailability</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container" style="display:none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/create_availability/" class="btn btn-default" style="text-align:left;">New Abailability</a>
                        <a href="/dashboard/all_availabilities/" class="btn btn-default" style="text-align:left;">All Abailabilities</a>
                    </div>
                  </div>
              </div>

              <div id="dropdown-3" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Slider</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container" style="display:none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/insert_slider/" class="btn btn-default" style="text-align:left;">Insert</a>
                        <a href="/dashboard/all_slider/" class="btn btn-default" style="text-align:left;">All Slider Data</a>
                    </div>
                  </div>
              </div>

              <div id="dropdown-3" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Plugins</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container" style="display:none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/plugins/" class="btn btn-default" style="text-align:left;">Plugin List</a>
                        <a href="/dashboard/new_plugin/" class="btn btn-default" style="text-align:left;">New Plugin</a>
                    </div>
                  </div>
              </div>
        
              <div id="dropdown-2" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Products</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container " style="display: none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/insert_product/" class="btn btn-default" style="text-align:left;">Insert Product</a>
                        <a href="/dashboard/all_products/" class="btn btn-default" style="text-align:left;">All Products</a>
                    </div>
                  </div>
              </div>
            <?php }?>
            <div id="dropdown-2" class="drop_div">
                  <button class="dropdown-item btn btn-primary" style="width:100% !important">
                      <strong class="left">Settings</strong>
                      <span id="database_navarrow" class="navarrow right" >&#9662</span>   
                  </button>
                  <div class="dropdown-container " style="display: none;">
                    <div class="btn-group-vertical" style="width:100% !important">
                        <a href="/dashboard/profile/" class="btn btn-default" style="text-align:left;">Profile</a>
                        <a href="/dashboard/hidtory/" class="btn btn-default" style="text-align:left;">History</a>
                    </div>
                  </div>
              </div>
      </div>
    </div>
  </div>
