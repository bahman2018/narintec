<?php include 'parts/header-top.php'; ?>

<meta name="description" content="Simple Page - CreaTec Responsive Multipurpose HTML5 Bootstrap Startup Business Website Template">

<title>Portfolio Single Item 1 - CreaTec Responsive Multipurpose HTML5 Bootstrap Startup Business Website Template</title>

<?php include 'parts/header-bottom.php'; ?>
<?php include 'parts/header-nav.php'; ?>


<!-- =========================================================================================== -->
<!-- =================== Begin page content ==================================================== -->
<!-- =========================================================================================== -->

<section class="qt-page-wrapper">
  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="qt-page-header">
          <h2>Portfolio Single Item 1<small> - Subheading</small></h2>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="active">Portfolio Item</li>
          </ol>
        </div>

        <div class="qt-page-body qt-portfolio-item qt-portfolio-item-1">


<!-- =========================================================================================== -->
<!-- =========================== Portfolio Item Row ============================================ -->
<!-- =========================================================================================== -->

          <div class="row">

<!-- =============================== Slider ==================================================== -->

            <div class="col-md-8">
              <div id="qt_portfolio_item_carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#qt_portfolio_item_carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#qt_portfolio_item_carousel" data-slide-to="1"></li>
                  <li data-target="#qt_portfolio_item_carousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img class="img-responsive" src="resources/img/portfolio/1.jpg" alt="">
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="resources/img/portfolio/2.jpg" alt="">
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="resources/img/portfolio/3.jpg" alt="">
                  </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#qt_portfolio_item_carousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#qt_portfolio_item_carousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
            </div>

<!-- =============================== Details / Description ===================================== -->

            <div class="col-md-4">

              <h3>Project Description</h3>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

              <h3>Project Details</h3>

              <ul>
                <li>Lorem Ipsum</li>
                <li>Dolor Sit Amet</li>
                <li>Consectetur</li>
                <li>Adipiscing Elit</li>
              </ul>

              <hr>

              <a class="btn btn-primary btn-lg btn-block" href="#"><i class="fa fa-eye"></i> Launch Project</a>

            </div>

<!-- =========================================================================================== -->

          </div><!-- /.row -->


<!-- =========================================================================================== -->
<!-- =========================== Related Projects Row ========================================== -->
<!-- =========================================================================================== -->

          <div class="row">

            <div class="col-lg-12">
              <h2 class="qt-page-header-2">Related Projects</h2>
            </div>

          </div>

          <?php include 'parts/recent-projects.php'; ?>

        </div>

      </div>

    </div>

  </div>
</section>


<?php include 'parts/footer-testimonial.php'; ?>
<?php include 'parts/footer.php'; ?>

