<?php
  session_start();
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');

.redressed {
    font-family: 'Redressed', cursive;
}

.merriweather {
    font-family: 'Merriweather', serif;
}
.cc-navbar {
    background-color: rgba(0,0,0,0.55);
    font-family: 'Merriweather', serif;
    box-shadow: 1px 1px 3px rgba (255,255,255,0.54);
    z-index: 99; 
}

.cc-menu {
    background : #000;
    background-attachment: fixed;
    background-position: center;
    background-size: cover  ;
    height : 1600px;
}

.cc-menu1 {
    background : rgb(20, 76, 150);
    background-attachment: fixed;
    background-position: center;
    background-size: cover  ;
    height : 2500px;
}

.btn-order {
    color: var(--bs-teal);
    border-color : var(--bs-teal);
    transition: 0.5s;
}

.cc-navbar .nav-link {
    border-bottom: 1px solid transparent;
    transition: padding-bottom 0.4s ease-in-out, border-color .3s ease;
}

.cc-navbar .nav-link:hover {
    padding-bottom : 20px;
    border-bottom-color: var(--bs-teal);
}

.banner {
    background-image:url(image1.png);
    background-attachment: fixed;
    background-position: center;
    background-size: cover  ;
    height : 600px;
}

.banner .banner-desc { /* Modifie la couleur du texte au milieu */
    font-size : 48px;
    font-weight: 400;
    color : #fff;
}
.btn-order:hover,

.btn-order:active {
    color : #fff;
    background-color: var(--bs-teal);
}
</style>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OMNES SPORT EDUCATION</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    </head>
    <body>
        <nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
        <div class="container-fluid">
          <a class="navbar-brand text-uppercase mx-4 py-3 fw-bolder" href="#">OMNES SPORT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item pe-2">
                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link active" href="parcourir.php">Tout Parcourir</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link active" href="rendezvous.php">Rendez-vous</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link active" href="boutique.php">Boutique</a>
              </li>
              <?php
              if (isset($_SESSION["loggedin"])&& $_SESSION["loggedin"]===true) {
                echo '<li class="nav-item pe-2">
                  <a href="reset-password.php" class="nav-link" aria-current="page">Changer votre mot de passe</a>
                </li>';
                echo '<li class="nav-item pe-2">
                <a href="logout.php" class="nav-link" aria-current="page">Se deconnecter</a>
                </li>';
              } 
              else {
                echo '<li class="nav-item pe-2">
                <a class="btn btn-outline-info rounded-0 merriweather" href="login.php">Votre compte</a>
                </li>';
              }
              ?> 
              <li class="nav-item pe-2">
              </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="rechercher" aria-label="Rec" id ="search" onchange="rechercher()">
              <button class="btn btn-outline-info rounded-0 merriweather" type="submit" onclick="rechercher()" value="rechercher">Rechercher</button>
              <script>
                function rechercher() {
                  
                  var entree = document.getElementById("search").value;

                  if (entree==="tennis") {
                    window.open("tennis.php");
                  }
                  else if(entree==="basket"){
                    window.open("basket.php");
                  }
                  else if(entree==="foot" || entree==="football"){
                    window.open("foot.php");
                  }
                  else if(entree==="toutparcourir" || entree==="parcourir"){
                    window.open("parcourir.php");
                  }
                  else if(entree==="fitness"){
                    window.open("fitness.php");
                  }
                  else if(entree==="horaires" || entree==="horaire"){
                    window.open("horaires.php");
                  }
                  else if(entree==="equipement"){
                    window.open("equipement.php");
                  }
                  else if(entree==="musculation"){
                    window.open("musculation.php");
                  }
                  else if(entree==="natation"){
                    window.open("natation.php");
                  }
                  else if(entree==="coach"){
                    window.open("coach.php");
                  }
                  else if(entree==="cardio"){
                    window.open("cardio.php");
                  }
                  else if(entree==="salle" || entree==="salledesport" || entree==="salle de sport"){
                    window.open("salledesport.php");
                  }
                  else if(entree==="rendez-vous" || entree==="rendezvous" || entree==="rdv"){
                    window.open("rendezvous.php");
                  }
                  else if(entree==="rugby"){
                    window.open("rugby.php");
                  }
                  else if(entree==="sportcompetition" || entree==="sport de competition"){
                    window.open("sportcompetition.php");
                  }
                  else if(entree==="callisthenie" || entree==="street workout" || entree ==="street"){
                    window.open("callisthenie.php");
                  }
                  else if(entree==="biking" || entree==="velo"){
                    window.open("biking.php");
                  }
                  else if(entree==="collectif" || entree==="cours collecitfs"){
                    window.open("collectif.php");
                  }
                  else if(entree==="plongeon"){
                    window.open("plongeon.php");
                  }
                  else if(entree==="activités sportives" || entree==="activitesportives" || entree=="activite"){
                    window.open("activitesportive.php");
                  }                 
                }
              </script>
            </form>
          </div>
        </div>
        </nav>

        <section class="banner d-flex justify-content-center alig-items-center pt-5">
            <div class="container my-5 py-5 banner-desc">
                <div class="row">
                <div class="col-md-6"></div>
                    <div class="col-me-6">
                        <h1 class="text-capitalize py-3 redressed">Selon 3 catégories <br> sportives <h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="available merriweather py-5">
            <div class="container">
                <div class="row">
                  <div class="card mb-3">
                    <img src="assets/css/activite.jpg" class="card-img-top py-3" height="400px" width="px">
                    <div class="card-body">
                      <h2 class="card-title">Activités Sportives</h2>
                      <p class="card-text">
                        Comment pratiquer des activités physiques et connaître leurs effets afin de mieux comprendre quels sports nous conviennent.                      </p>
                        <a class="btn btn-outline-success" type="button" href="activitesportive.php">Parcourir</a>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <img src="assets/css/competition.jpg" class="card-img-top py-3" height="400px" width="px">
                    <div class="card-body">
                      <h2 class="card-title">Sport de Compétition</h2>
                      <p class="card-text">
                        Les sports de compétition sont définis comme un entraînement orienté vers la compétition et ciblé sur l’objectif de la réussite sportive. La différence avec le sport populaire est une dépense de temps beaucoup plus importante en raison d’un entraînement essentiellement quotidien.    
                      </p>
                      <a class="btn btn-outline-success" href="sportcompetition.php">Parcourir</a>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <img src="assets/css/salledesport.jpg" class="card-img-top py-3" height="400px" width="px">
                    <div class="card-body">
                      <h2 class="card-title">Salle de sport OMNES</h2>
                      <p class="card-text">
                        Profitez d'une salle de sport avec du matériel de qualité et des installations modernes. Venez rencontrez nos coach et découvrir nos installations avec du matériel de professionnel.                      </p>
                        <a class="btn btn-outline-success"  href ="salledesport.php" type="submit">Parcourir</a>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-light text-center text-dark">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-dar, btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Inscrivez-vous à notre newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-dark mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Adresse Email</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-dark mb-4">
                S'abonner
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Adresse :</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a class="text-dark">43 Quai de Grenelle,</a>
              </li>
              <li>
                <a class="text-dark">75015 Paris</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Coordonnées</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a class="text-dark">TEL : 01 47 20 75 82</a>
              </li>
              <li>
                <a class="text-dark"> MAIL : omnessport@omneseducation.com</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
    <section class="d-flex justify-content-center alig-items-center pt-1">
        <div class="mapouter my-5"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=OMNES%20EDUCATION&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps widget</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
    </section>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022, Créé par Joseph YALAP. Utilisation de :
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
        </footer>
        <!-- Footer -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>