<?php require_once('dashboard/dashboard_head.php');?>

<?php require_once('dashboard/dashboard_header.php');?>
  <div class="container-fluid" style="margin-top: 51px">
    <div class="col-sm-12">
      <div class="col-sm-2" style="padding:0px">
        
        <?php require_once('dashboard/dashboard_left.php');?>

      </div>

      <div class="col-sm-10" id="content">

        <?=$data['content']?> <!--This line output action Data-->

      </div><!-- /.container -->
    </div>
  </div>
    
<?php require_once('dashboard/dashboard_footer.php')?>