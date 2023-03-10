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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OMNES SPORT EDUCATION</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
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
                <a class="nav-link active" href="#">Rendez-vous</a>
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
                  else if(entree==="activit??s sportives" || entree==="activitesportives" || entree=="activite"){
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
                        <h1 class="text-capitalize py-3 redressed">Nos Coachs sportifs <br>  </h1><h1>
                    </h1></div>
                </div>
            </div>
        </section>
        <div class="row row-cols-1 row-cols-md-2 g-4">
  
  
  <div class="col">
    <div class="card">
      <img src="https://frontdeseine.net/wp-content/uploads/COACHS-WEBSITEPlan-de-travail-16.png" class="card-img-top" alt="Agathe"/>
      <div class="card-body">
        <h5 class="card-title">Agathe, sp??cialit?? Danse, Plong??e</h5>
        <p class="card-text">
        Dipl??m??e en h??tellerie et ??galement passionn??e de danse depuis son plus jeune ??ge, Agathe obtient son CQP Animateur Sportif en 2019.

Elle a d??couvert l???exp??rience fitness de Front de Seine en tant que cliente, et travailler au club a ??t?? pour elle une ??vidence. Elle y donne des cours de BALANCE et de RPM.

?? Je suis tomb??e sous le charme de cette salle qui propose des cours en petit comit??, ce qui permet aux adh??rents d???avoir un meilleur suivi. ??
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://frontdeseine.net/wp-content/uploads/COACHS-WEBSITEPlan-de-travail-14.png" class="card-img-top" alt=""/>
      <div class="card-body">
        <h5 class="card-title">Charly, sp??cialit?? Judo</h5>
        <p class="card-text">
        Apr??s 8 ans d???exp??rience au sein des plus belles cuisines de Paris, Charly est ??galement passionn?? par la di??t??tique et la remise en forme. Il d??cide donc de devenir coach sportif et obtient son dipl??me en 2018.

Jeune dipl??m??, il aime donner le meilleur de lui-m??me pour aider les gens ?? atteindre leurs objectifs.

??tre coach ?? Front de Seine lui permet de continuer ?? se former et de profiter de l???exp??rience d???une ??quipe de coachs confirm??s. Il appr??cie particuli??rement le dialogue qui s???op??re entre coach et membres durant les Team Trainings en petits groupes de 10 participants.

?? Le sport am??liore la vie des gens. Amusant, relaxant ou avec l???esprit de comp??tition, je veux les aider ?? atteindre leurs objectifs. ??
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://frontdeseine.net/wp-content/uploads/COACHS-WEBSITEPlan-de-travail-19.png" class="card-img-top" alt=""/>
      <div class="card-body">
        <h5 class="card-title">Clement, specialit?? Rugby, Functional Training</h5>
        <p class="card-text">Passionn?? de sport et rugbyman, Cl??ment s???est tr??s vite tourn?? vers le coaching sportif en obtenant un Master en Pr??paration Physique et R??athl??tisation.

Il transmet aujourd???hui ses connaissances, sa p??dagogie et son amour pour le sport ?? Front de Seine, un lieu qui lui correspond du fait de son s??rieux, sa rigueur et sa bienveillance.

Front de Seine, avec ses Team Training en petit groupe et son service de Personal Training, lui donne la possibilit?? d???exprimer librement son envie de coacher et d???offrir ?? ses clients une exp??rience personnelle de grande qualit?? bas??e sur l?????coute et l???adaptation.

?? Avec les Team Training on peut individualiser un cours collectif et c???est un atout majeur que l???on ne retrouve nulle part ailleurs. ??</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://frontdeseine.net/wp-content/uploads/COACHS-WEBSITEPlan-de-travail-18-1.png" class="card-img-top" alt=""/>
      <div class="card-body">
        <h5 class="card-title">Maureen , specialit?? Aviron, Triathlon longue distance, V??lo de route</h5>
        <p class="card-text">
        Maureen est triathl??te et pratique ??galement l???aviron et le v??lo de route. Apr??s un master en Architecture et une br??ve exp??rience sur le terrain, elle d??cide de se tourner vers le fitness.

Elle transmet aujourd???hui sa passion pour le sport ?? Front de Seine, prenant appui sur l???innovation en termes d???exp??rience client et le mat??riel haut de gamme du club.

Les Team Training lui permettent de donner de l???attention ?? chacun donnant une dimension humaine au fitness.

Au travers des Personal Training, elle exprime ??galement sa fa??on de coacher, et appr??cie observer la rapidit?? de la progression de ses clients.

?? Sportive depuis toujours, donner du sport aux gens me semble ??tre le meilleur moyen de leur offrir une plus belle fa??on de vivre, et de me sentir plus efficace aupr??s d???eux. ??
        </p>
      </div>
    </div>
  </div>
</div>




  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://frontdeseine.net/wp-content/uploads/COACHS-WEBSITEPlan-de-travail-20.png" class="card-img-top" alt="James"/>
      <div class="card-body">
        <h5 class="card-title">Jame, sp??cialit?? Rugby,Basket-ball,musculation</h5>
        <p class="card-text">
        Sportif depuis toujours, James est venu du Portugal en 2012 pour passer son brevet d?????tat de coach sportif.

James est motiv?? par le contact humain, et par le fait d???aider les gens ?? atteindre leurs objectifs et partager avec eux ses connaissances.

Front de Seine lui offre la possibilit?? de se former en permanence, de travailler dans un environnement s??rieux, exigeant et qualitatif pour exercer son m??tier pleinement.

?? Au sein des Team Trainings, tout est personnalis??, chaque d??tail fait la diff??rence. Je peux vraiment aider les gens ?? progresser ??
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://frontdeseine.net/wp-content/uploads/COACHS-WEBSITEPlan-de-travail-22.png" class="card-img-top" alt="Chlo??"/>
      <div class="card-body">
        <h5 class="card-title">Chlo??, sp??calit?? Functional Training, Cardio Training</h5>
        <p class="card-text">
        Nageuse en comp??tition et triathl??te, le sport est une r??elle passion pour Chlo??.
Dipl??m??e d???une ??cole de commerce sp??cialis??e en Management du Sport, c???est ?? la suite d???un stage en salle de fitness qu???elle s???oriente finalement vers le m??tier de coach sportif.

Motiv??e par l???aspect humain et par la proximit?? permise avec le client, elle d??cide de rejoindre Front de Seine qui est ?? l???image des valeurs qu???elle d??fend.

Ses sp??cialit??s : l???entra??nement fonctionnel et le cardio training.

Le sport est pour elle un mode de vie qu???elle souhaite partager et inculquer ?? ses clients ?? travers une prise en charge globale et personnalis??e.

?? Les Team Training de 10 participants c???est avoir le temps et la possibilit?? de donner de l???importance ?? chaque client pour optimiser sa pratique sportive. ??

        </p>
      </div>
    </div>
  </div>
 