<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Site d'experimentation" />
    <meta
      name="author"
      content="Team Simplon Mikail Aurore Clarisse Benjamin"
    />

    <!-- ----------------_Bootstrap CSS_---------------- -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <!-- ----------------_Flickty CSS_---------------- -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />

    <!-- -----------------_Custom CSS_---------------- -->
    <link rel="stylesheet" href="style.css" />

    <title>Montlhery Flickty</title>
    
  </head>

  <!-- **$$**--------------------------_START <BODY>_--------------------------**$$** -->
  <body>
    <h1>Hello, world!</h1>

    <div class="container-fluid">
      <h1>Formateur</h1>

      <!-- Flickity HTML init -->
      <div class="carousel custom-div" data-flickity='{ "groupCells": true }'>
        <div class="carousel-cell">
          <div class="d-flex">
            <div class="col">
              <img src="cedric.jpg" alt="cedric" />
              <p class="text-center custom-color">Cedric</p>
            </div>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="dimitri.jpg" alt="dimitri" />
            <p class="text-center custom-color">Dimitri</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="floriane.jpg" alt="floriane" />
            <p class="text-center custom-color">Floriane</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="gary.jpg" alt="gary" />
            <p class="text-center custom-color">Gary</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="nicolas.jpg" alt="nicolas" />
            <p class="text-center custom-color">Nicolas</p>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="col">
            <img src="patrick.jpg" alt="patrick" />
            <p class="text-center custom-color">Patrick</p>
          </div>
        </div>
      </div>
    </div>

    <?php  
    include "testfooter.php"; 
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <!-- ----------------_Flickty JS_---------------- -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- ----------------_Custom JS_---------------- -->
    <script src="script.js"></script>
  </body>
  <!-- **$$**--------------------------_End </BODY>_--------------------------**$$** -->
</html>
