<?php require_once 'includes/header.php';
require_once 'bootstrap.php';
require_once 'includes/admin_nav.php';
?>
<div class="container">
<!--place for error message flashing-->
<div>
                <?php
                  //this will display any kind of error/success message
                  flash();
                ?>
                </div>
                <!--end flashing-->
                <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="img img-responsive">
  <div class="carousel-inner" >
    <div class="item active">
      <img  src="assets/images/1.jpg" alt="Los Angeles" >
    </div>

    <div class="item">
      <img src="assets/images/2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="assets/images/3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="col-md-2"></div>

<?php require_once 'includes/footer.php'?>
