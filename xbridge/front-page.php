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
        <img class="second-slide" src="<?php echo get_template_directory_uri() . '/img/vacation-ownership-pool-scene-slide.png' ?>" alt="Vacation Ownership Relaxation">
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
      <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6">
              <div class="text-center">
                  <h2 class="fw-bolder">Hot Properties</h2>
                  <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
              </div>
          </div>
      </div>
      <div class="row gx-5">
          <div class="col-lg-4 mb-6">
              <div class="card h-100 shadow border-0">
                  <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/vacation-palm-trees-sunset-orange.png'; ?>" alt="..." />
                  <div class="card-body p-4">
                      <div class="badge bg-primary bg-gradient rounded-pill mb-2">Florida</div>
                      <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Location Highlights</h5></a>
                      <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                      <div class="d-flex align-items-end justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="small">
                                  <div class="fw-bold">Kelly Rowan</div>
                                  <div class="text-muted">March 12, 2022 &middot; 6 min read</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-6">
              <div class="card h-100 shadow border-0">
                  <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/rustic-luxury-vacation-home-access.png'; ?>" alt="..." />
                  <div class="card-body p-4">
                      <div class="badge bg-primary bg-gradient rounded-pill mb-2">South Carolina</div>
                      <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Location Highlights</h5></a>
                      <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                      <div class="d-flex align-items-end justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="small">
                                  <div class="fw-bold">Josiah Barclay</div>
                                  <div class="text-muted">March 23, 2022 &middot; 4 min read</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-6">
              <div class="card h-100 shadow border-0">
                  <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/img/orange-sunset-skyline-vacation.png'; ?>" alt="..." />
                  <div class="card-body p-4">
                      <div class="badge bg-primary bg-gradient rounded-pill mb-2">California</div>
                      <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">The last blog post title is a little bit longer than the others</h5></a>
                      <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                      <div class="d-flex align-items-end justify-content-between">
                          <div class="d-flex align-items-center">
                              <div class="small">
                                  <div class="fw-bold">Evelyn Martinez</div>
                                  <div class="text-muted">April 2, 2022 &middot; 10 min read</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

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
        
