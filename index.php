<?php include 'includes/header.php'; ?>
<!--carousel-->
<!-- Carousel -->

<div id="carouselControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!--section première image-->
    <div class="carousel-item active">
      <img src="assets/img/slider/driver.jpg" class="d-block w-100" alt="First slide">
      <div class="carousel-caption d-none d-lg-block zonetextcarousel">
        <span class="titretextcarousel">Bienvenue</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt uta. Ut enim ad minim veniam,
        quis nostrud exercitation . </p>
      </div>
    </div>
    <!--section deuxième image-->
    <div class="carousel-item">
      <img src="assets/img/slider/driver.jpg" class="d-block w-100" alt="Second slide">
      <div class="carousel-caption d-none d-lg-block zonetextcarousel">
        <span class="titretextcarousel">Présentation</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut  aliqua. Ut eniniam,
        quis nostrud exercitation ullamco laboris nisi ut. </p>
      </div>
    </div>
        <!--section troisième image-->
    <div class="carousel-item">
      <img src="assets/img/slider/driver.jpg" class="d-block w-100" alt="Third slide">
      <div class="carousel-caption d-none d-lg-block zonetextcarousel">
        <span class="titretextcarousel">Une passion des notes</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna . </p>
      </div>
    </div>   
    </div>
  </div>
  <!--Flèches précédents et suivants-->

  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>
<!--historique-->
<!--statistiques-->
<!--formateurs-->
<!-- Flickity HTML init -->
	<div class="flickity">
      <div class="carousel custom-div" data-flickity='{ "groupCells": true }'>
        <div class="carousel-cell">
          <div class="d-flex">
            <div class="col">
              <img src="assets/img/slider/cedric.jpg" alt="cedric" />
              <p class="text-center custom-color">Cedric</p>
            </div>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="assets/img/slider/dimitri.jpg" alt="dimitri" />
            <p class="text-center custom-color">Dimitri</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="assets/img/slider/floriane.jpg" alt="floriane" />
            <p class="text-center custom-color">Floriane</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="assets/img/slider/gary.jpg" alt="gary" />
            <p class="text-center custom-color">Gary</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="assets/img/slider/nicolas.jpg" alt="nicolas" />
            <p class="text-center custom-color">Nicolas</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="assets/img/slider/patrick.jpg" alt="patrick" />
            <p class="text-center custom-color">Patrick</p>
          </div>
        </div>
      </div>
    </div>

<!--footer-->
<?php include 'includes/footer.php'; ?>

