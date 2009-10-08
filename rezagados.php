<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("template/header.php");?>
/head>
<body>
<!--TOP-->
<?php include("template/top.php");?>
<!--END OF TOP-->
<!--CONTAINER-->
<div id="container">
  <!--HEADER-->
  <?php include("template/header2.php");?>
  <!--END OF HEADER-->
  <!--MAINBOX-->
  <div id="main_box">
    <div class="clsBottom">
      <div class="clsTop">
        <div class="clsCenter">
        <!--SELSUBHEADER-->
          <?php include("template/selsubheader.php");?>
				<!--END OF SELSUBHEADER-->
          <!--CLSCENTERBOX-->
          <div class="clsCenter_box">
            <div class="clscenter_boxBottom">
              <div class="clscenter_boxTop">
                <div class="clscenter_boxCenter">
                  <div class="clsBanner"></div>
                    <!--CONTENT-->
                    <div class="content clearfix">
                    <!--SIDEBAR1-->
                     <?php include("template/leftRezagados.php");?>
                    <!--END OF SIDEBAR1-->
                    <!-- SIDEBAR2-->
                     <?php include("template/rightRezagados.php");?>
                    <!--END OF SIDEBAR2-->
                    <!--MAIN-->
                      <?php include("template/centerRezagados.php");?>
			              <!--END OF MAIN-->
                    </div>
                <!--END OF CONTENT-->
              </div>
              <!--END OF CLSCENTERBOX-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END OF MAINBOX-->
<!--FOOTER-->
<?php include("template/footer.php");?>
<!--END OF FOOTER-->
<!--END OF CONTAINER-->
</body>
</html>
