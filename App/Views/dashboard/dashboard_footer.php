	<div class="col-sm-12 ">
		<div class="footer_fixed footer">
			<p>All right reserved in Tunebd</p>
		</div>
	</div>

    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/jquery-ui.js"></script>
    <script src="/scripts/bootstrap.min.js"></script>
    <!--Control left sidebar admin Menu-->
    <script type="text/javascript" src="/scripts/control_dashboard_menu.js"></script>
    <script type="text/javascript" src="/scripts/control_tune_image.js"></script>

  <!--Fixed Dashboard Left when screen greater than 760 px-->
  <script type="text/javascript" src="/scripts/fixed-admin-bar.js"></script>
  <script type="text/javascript" src="/scripts/display_product_desc_field.js"></script>

  <script src="/scripts/carousel-multi-img.js"></script>

  <script src="/scripts/zoomImg.js"></script>
  <script src="/scripts/star-rating.js"></script>
  <!-- Control all script-->

  <script type="text/javascript">

    $(document).ready(function(){
        var menu = $('#menus').val();
        if (menu == "child") {

          $('#parent').css("display","block");
        }

        $('#menus').on("change",function(){

            var menu = $(this).val();

            var div = $("#parent", $(this));
            $("#parent").not(div).css("display","none");

            if (menu == "child") {

              $('#parent').css("display","block");
            } 
        });
    });
    
    if ($(window).width()<970 && $(window).width()>767) {

          $(".magnify").zoomImg({
            zoomDivPosition : "overLap"
          });
        }else if($(window).width()>=970){
          $(".magnify").zoomImg();
        }

  </script>
	</body>
</html>