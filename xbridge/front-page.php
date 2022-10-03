<?php /* Front Page */ ?>

<?php
get_header();
?>



    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="first-slide" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-mountain-pool-slide.png' ?>" alt="Vacation Ownership Reflecting Sky">
            <div class="container">
                <div class="carousel-caption text-left">
                <h1>Vacation Ownership</h1>
                <p><a class="btn btn-lg btn-outline" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img class="second-slide" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-pool-sunset-slide.png' ?>" alt="Vacation Ownership Relaxation">
            <div class="container">
                <div class="carousel-caption">
                <h1>Adventure Investment</h1>
                <p><a class="btn btn-lg btn-outline" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img class="third-slide" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-scenery-slide.png' ?>" alt="Vacation Ownership Mountain Scene">
            <div class="container">
                <div class="carousel-caption text-right">
                <h1>Discover New Luxury</h1>
                <p><a class="btn btn-lg btn-outline" href="#" role="button">Browse Locations</a></p>
                </div>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

 

  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-night-palms-slide.png' ?>" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-pool-peace-slide.png' ?>" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-reflecting-sky-slide.png' ?>" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->




<?php
get_footer();
?>
        
