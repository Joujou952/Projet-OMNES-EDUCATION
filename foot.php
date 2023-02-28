<?php
  session_start();
?>

<?php
   // Se connecter à la BDD et récupérer l'utilisateur actuel de la session
  $Client = $_SESSION['username'];
  $mysqli = new mysqli("localhost:8889","root","root","projetweb");

  if ($mysqli -> connect_errno){
      echo "Connexion : ".$mysqli -> connect_error;
      exit();
  }
  // Stock tous les coachs de Foot
  else {
      $sql = "SELECT username FROM users WHERE spe = 'Foot';";
      $Coachs = array();

      if($result = $mysqli->query($sql))
      {   if($result->num_rows > 0){
              while($row = $result -> fetch_row())
              {
                  $Coachs[]=$row[0];
              }
         }       
          else {
          }  
      } 
      $sql7 = "SELECT username FROM users WHERE specialite = 'coach';";
      $Coachs7 = array();

      if($result7 = $mysqli->query($sql7))
      {   if($result7->num_rows > 0){
              while($row7 = $result7 -> fetch_row())
              {
                  $Coachs7[]=$row7[0];
              }
         }       
          else {
          }  
      }
      $ClientEstCoach = false;
      if (in_array($Client,$Coachs7)) {
        $ClientEstCoach = true;
      } 
  }

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
    height : 1400px;
}

.cc-menu1 {
    background : rgb(20, 76, 150);
    background-attachment: fixed;
    background-position: center;
    background-size: cover  ;
    height : 1600px;
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
    background-image:url(assets/css/Foot3.jpg);
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
        <script src="assets/js/calendar.js"></script>

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
                        <h1 class="text-capitalize py-3 redressed">LE FOOTBALL<h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="cc-menu py-5 merriweather"> <!--Explication du FootBall / Exercices -->
            <div class="container">
              <h1 class="text-center text-light merriweather">FOOTBALL : </h1>
                <div class="row py-2">
                  <div class="card mb-1 py2">
                    <img src="assets/css/Foot4.jpg" class="card-img-top py-2" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Qu'est ce que le Football ?</h5>
                      <p class="card-text">Le foot est un sport qui requiert une grande préparation physique qui ne doit pas être négligé et un mental d’acier pour perfectionner vos jeux de jambes et vos tirs. Pour ce faire, 
                        nous vous proposons quelques exercices d’entrainements pour perfectionner et améliorer vos compétences à ce sport.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Exercice Contrôles et finition :
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Exercices cardiovasculaire :
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Cet exercice est fait pour améliorer vos contrôles du ballon. Le contrôle du ballon est primordial dans différentes situations et reste un facteur clé pour vous faire devenir un meilleur joueur.
                                                Il est plutôt simple. Installez une zone en face du but qui représente la zone où vous êtes le plus souvent pour attaquer. Jonglez plusieurs fois avec le ballon et frappez-le pour l'envoyer dans les airs. Quand le ballon revient sur le sol, vous devez le contrôler et le sortir de la zone tout en vous mettant en position pour frapper vers le but.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Exercice dribbles
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Pour cet exercice, vous devez zigzaguer entre des cônes à grande vitesse pendant une série puis de terminer avec un sprint sur 15 m.</div>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <section class="cc-menu1 py-5 merriweather"> <!--Explication sur les coachs / Liste des coachs-->
          <div class="container">
            <h1 class="text-center text-light merriweather">NOS COACHS</h1>
              <div class="row py-2">
                <div class="card mb-1 py2">
                  <div class="card-body">
                    <h5 class="card-title">Qui sont nos coachs ?</h5>
                    <p class="card-text">Les coachs du groupe OMNES SPORT vous rejoignent et vous aident par cooptation et doivent à la fois correspondre à vos valeurs, et répondre à vos exigences. Au-delà de leurs qualités sportives et humaines indispensables, beaucoup sont issus du milieu des sportifs de haut niveau et anciens champions dans leur discipline, et tous sont des entraineurs qualifiés et familiers du monde de l’entreprise.
                     <br> <br> Plus que des sportifs qualifiés, ce sont de véritables passionnés du sport: ils adaptents leurs entraînements en fonction du niveau des inscrits . Le niveau de chacun et le temps disponible est pris en compte pour construire des séances sur-mesure, pour vous faire dépasser vos limites et accroître vos capacités sportives.
                    </p>
                    <p class="card-text"><small class="text-muted">Dernière modification : 27/05/2022</small></p>
                 </div>
                </div>
              </div>
          </div>
          <div class="container"> <!--Première carte de coach-->
            <?php 
                // QUAND ON CLIQUE SUR UN CRENEAU, ON LE RESERVE
                // Pour réserver un créneau du coach  
                $error = isset($_GET['error']) ? $_GET['error'] : '';
                $Rendezvous = explode("-",$error);
                $sql3 = "INSERT INTO rdv VALUES ('$Client','$Rendezvous[0]','$Rendezvous[1]','$Rendezvous[2]');";
                $sql4 ="SELECT * FROM rdv WHERE Client = '$Client' AND Coach ='$Rendezvous[0]' AND Jour='$Rendezvous[1]' AND Heure='$Rendezvous[2]';";
                if($result4 = $mysqli->query($sql4))
                {   
                  if($result4->num_rows > 0){
                    echo '<p class=text-light>Ce rendez-vous existe déjà</p>';     
                  }  
                  else {
                    $mysqli->query($sql3);
                    if ($error !='') {
                      echo '<script>alert("Votre rendez-vous est réservé")</script>';
                    }
                  }  
                } 
            ?>
            <?php
              
              $ccmenu = 1600;
              // On parcourt toute la liste des Coachs
              foreach ($Coachs as &$Coachactuel) {
              // On rajoute des pixels avec la variables ccmenu à chaque ajout de coach
              $ccmenu = $ccmenu + 800;
                // On créer le profil du coach avec ses créneaux
                echo '<div class="row d-flex justify-content-center">
                <div class="col-md-10 mt-5 pt-5">
                  <div class="row z-depth-3">
                    <div class="col-sm-4 bg-danger rounded-left">
                      <div class="card-block text-center text-white">
                        <!--<i class="fas fa-user-tie fa-7x mt-5"></i>-->
                        <img src="assets/css/Coach1.png" class="card-img-top py-2" alt="...">
                        <h2 class="font-weight-bold mt-4">'.$Coachactuel; echo'</h2>
                        <p>Coach sportif</p>
                        <a href="https://outlook.office.com/mail/">Ecrire au coach</a>
                        <i class="far fa-edit fa-2x mb-4"></i>
                      </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                      <h3 class ="mt-3 text-center">Information</h3>
                      <hr class="bg-primary">
                      <div class="row">
                        <div class="col-sm-6">
                          <p class="font-weight-bold">Email</p>
                          <h6 class ="text-muted">'.$Coachactuel; echo'@gmail.com</h6>
                        </div>
                        <div class="col-sm-6">
                          <p class="font-weight-bold">Numéro de téléphone :</p>
                          <h6 class ="text-muted">+92135412132</h6>
                        </div>
                      </div>
                      <h4 class="mt-3">CV</h4>
                      <hr class="bg-primary">
                      <div class="row">
                        <div class="col-sm-6">
                          <p class="font-weight-bold">Dîplome(s)</p>
                          <h6 class ="text-muted">STAPS</h6>
                        </div>
                        <div class="col-sm-6">
                          <p class="font-weight-bold">Spécialité(s)</p>
                          <h6 class ="text-muted">FootBall</h6>
                        </div>
                      </div>
                      '; if (!$ClientEstCoach) { echo'
                      <h4 class="mt-3">Planning de disponibilité : </h4>
                      <hr clas="bg-primary">
                      <p> Cliquez sur une heure pour réserver un créneau avec ce coach :</p>
                      <form method="post">
                      <table class="table table-sm table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Lundi</th>
                            <th scope="col">Mardi</th>
                            <th scope="col">Mercredi</th>
                            <th scope="col">Jeudi</th>
                            <th scope="col">Vendredi</th>
                            <th scope="col">Samedi</th>
                            <th scope="col">Dimanche</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi8" href="foot.php?error='.$Coachactuel; echo'-Lundi-8 " class="btn btn-primary">8:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi8" href="foot.php?error='.$Coachactuel; echo'-Mardi-8 " class="btn btn-primary">8:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi8" href="foot.php?error='.$Coachactuel; echo'-Mercredi-8 "class="btn btn-primary">8:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi8" href="foot.php?error='.$Coachactuel; echo'-Jeudi-8 "class="btn btn-primary">8:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi8" href="foot.php?error='.$Coachactuel; echo'-Vendredi-8 " class="btn btn-primary">8:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi8" href="foot.php?error='.$Coachactuel; echo'-Samedi-8 " class="btn btn-primary">8:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche8" href="foot.php?error='.$Coachactuel; echo'-Dimanche-8 " class="btn btn-primary">8:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi9" href="foot.php?error='.$Coachactuel; echo'-Lundi-9 " class="btn btn-primary">9:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi9" href="foot.php?error='.$Coachactuel; echo'-Mardi-9 " class="btn btn-primary">9:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi9" href="foot.php?error='.$Coachactuel; echo'-Mercredi-9 " class="btn btn-primary">9:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi9" href="foot.php?error='.$Coachactuel; echo'-Jeudi-9 " class="btn btn-primary">9:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi9" href="foot.php?error='.$Coachactuel; echo'-Vendredi-9 " class="btn btn-primary">9:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi9" href="foot.php?error='.$Coachactuel; echo'-Samedi-9 " class="btn btn-primary">9:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche9" href="foot.php?error='.$Coachactuel; echo'-Dimanche-9 " class="btn btn-primary">9:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi10" href="foot.php?error='.$Coachactuel; echo'-Lundi-10" class="btn btn-primary">10:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi10" href="foot.php?error='.$Coachactuel; echo'-Mardi-10" class="btn btn-primary">10:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi10" href="foot.php?error='.$Coachactuel; echo'-Mercredi-10" class="btn btn-primary">10:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi10" href="foot.php?error='.$Coachactuel; echo'-Jeudi-10" class="btn btn-primary">10:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi10" href="foot.php?error='.$Coachactuel; echo'-Vendredi-10" class="btn btn-primary">10:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi10" href="foot.php?error='.$Coachactuel; echo'-Samedi-10" class="btn btn-primary">10:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche10" href="foot.php?error='.$Coachactuel; echo'-Dimanche-10" class="btn btn-primary">10:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi11" href="foot.php?error='.$Coachactuel; echo'-Lundi-11" class="btn btn-primary">11:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi11" href="foot.php?error='.$Coachactuel; echo'-Mardi-11" class="btn btn-primary">11:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi11" href="foot.php?error='.$Coachactuel; echo'-Mercredi-11" class="btn btn-primary">11:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi11" href="foot.php?error='.$Coachactuel; echo'-Jeudi-11" class="btn btn-primary">11:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi11" href="foot.php?error='.$Coachactuel; echo'-Vendredi-11" class="btn btn-primary">11:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi11" href="foot.php?error='.$Coachactuel; echo'-Samedi-11" class="btn btn-primary">11:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche11" href="foot.php?error='.$Coachactuel; echo'-Dimanche-11" class="btn btn-primary">11:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi13" href="foot.php?error='.$Coachactuel; echo'-Lundi-13" class="btn btn-primary" class="btn btn-primary">13:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi13" href="foot.php?error='.$Coachactuel; echo'-Mardi-13" class="btn btn-primary">13;00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi13" href="foot.php?error='.$Coachactuel; echo'-Mercredi-13" class="btn btn-primary">13:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi13" href="foot.php?error='.$Coachactuel; echo'-Jeudi-13" class="btn btn-primary">13:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi13" href="foot.php?error='.$Coachactuel; echo'-Vendredi-13" class="btn btn-primary">13:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi13" href="foot.php?error='.$Coachactuel; echo'-Samedi-13" class="btn btn-primary">13:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche13" href="foot.php?error='.$Coachactuel; echo'-Dimanche-13" class="btn btn-primary">13:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi14" href="foot.php?error='.$Coachactuel; echo'-Lundi-14" class="btn btn-primary">14:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi14" href="foot.php?error='.$Coachactuel; echo'-Mardi-14" class="btn btn-primary">14:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi14" href="foot.php?error='.$Coachactuel; echo'-Mercredi-14" class="btn btn-primary">14:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi14" href="foot.php?error='.$Coachactuel; echo'-Jeudi-14" class="btn btn-primary">14:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi14" href="foot.php?error='.$Coachactuel; echo'-Vendredi-14" class="btn btn-primary">14:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi14" href="foot.php?error='.$Coachactuel; echo'-Samedi-14" class="btn btn-primary">14:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche14" href="foot.php?error='.$Coachactuel; echo'-Dimanche-14" class="btn btn-primary">14:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi15" href="foot.php?error='.$Coachactuel; echo'-Lundi-15" class="btn btn-primary">15:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi15" href="foot.php?error='.$Coachactuel; echo'-Mardi-15" class="btn btn-primary">15:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi15" href="foot.php?error='.$Coachactuel; echo'-Mercredi-15" class="btn btn-primary">15:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi15" href="foot.php?error='.$Coachactuel; echo'-Jeudi-15" class="btn btn-primary">15:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi15" href="foot.php?error='.$Coachactuel; echo'-Vendredi-15" class="btn btn-primary">15:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi15" href="foot.php?error='.$Coachactuel; echo'-Samedi-15" class="btn btn-primary">15:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche15" href="foot.php?error='.$Coachactuel; echo'-Dimanche-15" class="btn btn-primary">15:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi16" href="foot.php?error='.$Coachactuel; echo'-Lundi-16" class="btn btn-primary">16:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi16" href="foot.php?error='.$Coachactuel; echo'-Mardi-16" class="btn btn-primary">16:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi16" href="foot.php?error='.$Coachactuel; echo'-Mercredi-16" class="btn btn-primary">16:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi16" href="foot.php?error='.$Coachactuel; echo'-Jeudi-16" class="btn btn-primary">16:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi16" href="foot.php?error='.$Coachactuel; echo'-Vendredi-16" class="btn btn-primary">16:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi16" href="foot.php?error='.$Coachactuel; echo'-Samedi-16" class="btn btn-primary">16:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche16" href="foot.php?error='.$Coachactuel; echo'-Dimanche-16" class="btn btn-primary">16:00</a></th>
                          </tr>
                          <tr>
                            <th scope="row"><a id="'.$Coachactuel; echo'Lundi17" href="foot.php?error='.$Coachactuel; echo'-Lundi-17" class="btn btn-primary">17:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mardi17" href="foot.php?error='.$Coachactuel; echo'-Mardi-17" class="btn btn-primary">17:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Mercredi17" href="foot.php?error='.$Coachactuel; echo'-Mercredi-17" class="btn btn-primary">17:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Jeudi17" href="foot.php?error='.$Coachactuel; echo'-Jeudi-17" class="btn btn-primary">17:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Vendredi17" href="foot.php?error='.$Coachactuel; echo'-Vendredi-17" class="btn btn-primary">17:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Samedi17" href="foot.php?error='.$Coachactuel; echo'-Samedi-17" class="btn btn-primary">17:00</a></th>
                            <th scope="row"><a id="'.$Coachactuel; echo'Dimanche17" href="foot.php?error='.$Coachactuel; echo'-Dimanche-17" class="btn btn-primary">17:00</a></th>
                          </tr>
                        </tbody>
                      </form>
                      </table>';
                    }
                    echo'
                      <a class="btn btn-order rounded-0">Communiquer avec le coach</a>
                      <hr class="bg-primary">
                      <ul class="list-unstyled d-flex justify-content-center mt-4">
                        <li><a href="#"><i class ="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
                        <li><a href="#"><i class ="fab fa-youtube px-3 h4 text-info"></i></a></li>
                        <li><a href="#"><i class ="fab fa-twitter px-3 h4 text-info"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <style>
              .cc-menu1 {
                background : rgb(20, 76, 150);
                background-attachment: fixed;
                background-position: center;
                background-size: cover  ;
                height :' .$ccmenu;
              echo '}
              </style>';  
              
              // Cette partie permet de display none, donc de rendre invisible les boutons où il y a déjà une réservation
              $sql1 = "SELECT Jour,Heure FROM rdv WHERE Coach='$Coachactuel';";
              
              $RDV = array();

              if($result1 = $mysqli->query($sql1))
              {   if($result1->num_rows > 0){
                      while($row1 = $result1 -> fetch_row())
                      {
                          $RDV=$row1;
                          foreach ($RDV as &$RDVactuel) {
                            echo '<style>
                                  #'.$Coachactuel.$row1[0].$row1[1]; echo' {
                                    display:none;
                                  }
                                  </style>';
                          }      
                      }
                  }       
                  else {
                  }  
              }
            /*echo $Coachactuel.$RDV[0].$RDV[1]; */ 
              }
            ?>   
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
          <section class="d-flex justify-content-center alig-items-center pt-5">
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