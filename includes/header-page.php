<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto-école Montlhery - Narbonne</title>
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

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="../assets/css/permis.css">

</head>
<body>
<!--Barre de navigation-->
<div class="font-weight-bold sticky-top">
  <header>
    <nav class=" nav navbar navbar-expand-lg navbar-light bg-white">
      <!--Logo-->
      <a class="navbar-brand" href="../index.php"><img src="../assets/img/logos/montlhery.png" alt="logo" class="logo" width="auto" height="80em"></a>
      <!--Bouton pour téléphone-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
      </button>
      <!--Liens ancres-->
       <div id="navbarContent" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="permis.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Permis
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <li><a class="dropdown-item" href="permis-accelere.php">Permis accéléré</a></li>
                      <li><a class="dropdown-item" href="permis-auto.php">Permis auto</a></li>
                      <li><a class="dropdown-item" href="permis-moto.php">Permis moto</a></li>
                      <li><a class="dropdown-item" href="permis-remorque.php">Permis remorque</a></li>
                      <li><a class="dropdown-item" href="permis-am-bsr.php">Permis AM(BSR)</a></li>
                      <li><a class="dropdown-item" href="scooter.php">125cm3</a></li>
                      <li><a class="dropdown-item" href="cours-de-code.php">Code de la route</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conduite-accompagnee.php">Conduite accompagnée</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recuperation-de-points.php">Récupération de points</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
  </header>
</div>
