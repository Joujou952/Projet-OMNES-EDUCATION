
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
                        <h1 class="text-capitalize py-3 redressed">Notre equipement <br>  </h1><h1>
                    </h1></div>
                </div>
            </div>
        </section>


<div class="card-group">
  <div class="card">
    <img src="https://media.istockphoto.com/photos/gym-picture-id516320356?k=20&m=516320356&s=612x612&w=0&h=9oIE1qW3ERAqytUn7IEiYrnzHBpBXxv_B5IvHXjv4hc=" class="card-img-top" alt="les Alteres"/>
    <div class="card-body">
      <h5 class="card-title"> Les haltères</h5>
      <p class="card-text">
      Selon vos besoins, vous pouvez adapter les haltères selon vos préférences. Si vous êtes débutant, commencer par des légers pour faciliter la prise en mains puis commencer à augmenter la charges de ceux-ci. Si vous voulez vous concentrer sur l’endurance, prenez en vous permettant de faire une série de 12 à 20 sans être extenué et pour vraiment vous muscler, limitez votre série a 8 sur des encore plus lourds.
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
  <div class="card">
    <img src="https://media.gettyimages.com/photos/woman-running-on-treadmill-at-fitness-center-picture-id1162929426?k=20&m=1162929426&s=612x612&w=0&h=yAdXOvWxcASd1y1AzDdci6zUg3fyL0gpEhgQZSiEUoQ=" class="card-img-top" alt="Palm Springs Road"/>
    <div class="card-body">
      <h5 class="card-title">Les tapis de course</h5>
      <p class="card-text">Le tapis de course est la machine idéale pour simuler d’innombrables sports : course à pied, sprint ou même jogging, les sports sont légion. C’est une machine qui va vous faire travailler vos jambes en priorité mais aussi les fessiers et le dos tous en étant facilement réglable pour mieux subvenir à vos besoins. N
        ous vous conseillions donc de commencer à une faible vitesse pour bien vous approprier le tapis.</p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
  <div class="card">
    <img src="https://media.gettyimages.com/photos/treadmills-in-a-row-picture-id80488814?k=20&m=80488814&s=612x612&w=0&h=H7j0PxGxvpgQeHZ76QOW90RZVlCPzI2Iqrsi_rxdfNg=" class="card-img-top" alt="L'elliptique"/>
    <div class="card-body">
      <h5 class="card-title">L'elliptique</h5>
      <p class="card-text">
      L’elliptique est une machine se basant sur la reproduction du maniement des skies, permettant de s’entrainer sur son cardio, muscler le haut et bas de votre corps. Vous n’avez qu’installer vos pied au centre des pédales et vous pouvez commencer à skier.
       N’oubliez pas de garder un dos droit pour éviter toutes blessures et tous votre corps face a la machine et bien tenir les poignées.
      </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
</div>


<div class="card-group">
  <div class="card">
    <img src="https://media.istockphoto.com/photos/asian-woman-cyclist-she-is-exercising-in-the-houseby-cycling-on-the-picture-id1215844115?k=20&m=1215844115&s=612x612&w=0&h=G6QC4Tc5b7Z9vkNhCY6841zY-izIJoNvYs3gSqW7ock=" class="card-img-top" alt=""/>
    <div class="card-body">
      <h5 class="card-title">Le vélo</h5>
      <p class="card-text">
      Comme vous avez pu peut-être le voir, le vélo offre une multitude de résultats sur les jambes et les fesses. Pour l’utilisation du vélo, commencer par régler la hauteur de la selle et du guidon pour éviter des 
      problèmes lors de l’effort puis vous pouvez commencer à pédaler et même commencer à augmenter l’intensité.
      </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
  <div class="card">
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUUFBcVFBUYFxcYGxsaGxoaGxsdGxobGxodHRcaGxobICwkHR4pHhsYJTYmKS4wMzMzGiI5PjkyPSwyMzABCwsLEA4QHRISHTIgIiIyMjIyMjIyMjIyMjIyMDIyMjIyMjIyMjIyMjIyMjIyMjIwMjIyMjIyMjIyMjIyMjIyMv/AABEIALcBEwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAMEBgcCAQj/xABLEAACAAQDBQMIBwQIBQQDAAABAgADESEEEjEFBkFRYRMicQcyQlKBkaGxFCNyssHR8DNic+EkQ4KSoqOz8RU0U2PCFkRU4nSDk//EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACIRAQEAAgEEAwEBAQAAAAAAAAABAhEhAxIxQRMiUWEEcf/aAAwDAQACEQMRAD8AzrEJURBFVMFZoiHMl1iGtjwGsemPEQgQiIoijhhHRjkwAyyQytjEoiGXl8oCOgRywjtRaOWEBm6Qise0j2kANlYsW4yf0h/4Z++kV8iLLuMPr5n8P/zWAgXbK/XTaCpMx9dPOMb3tP8A5eb/AA2+7GE7Ras6b1mPbn3zG1b2mmBxP8F/uwCsg26KYlv7H3ViPJ/YTftyx/hm/lEaVcr4r8xBHCy64dz/ANyT8UxH5Q8Md1n1c+2bHN7BTCYfxT/Tijuf174vW+a0w8gdR8JcUOfoYTQQ26PrUHKVL+5X8Ya2ctZsof8AcT7wiXvOtMTTkkv/AElP4wxsrDtMmIiWJIAPImwPvpATdt1pPbAYpq5cuSQp0WWtnmU9Z2H91V5mprEzGLdnLNG1d6VCA6AA2LnhWwFzwB6wUpZEsKo7kpAo6Ki0+QhzASD2dT5799vtNcjwFgOgECUeVh1TS5OrG7MepNzDsN4mestS7mij21JsAANTAqXvDLNyrhbd6xF9LgkEdQSIYEMVgw/eU5H9YceQcekOhvyI1gLNQ3BGVlNGGtDSoIPFSLg/iCBYJcwEAg1B4xB2nLqQw+wfAgla+DgAfxDBKVjId6Nl9hOqookypA4BvSXwuCPHpAuWIv2/EgHClz/VsG+ND8GPujMHxx9EU6nWFlOV4XgYzhRViAOsQ522VWuQZjzNh+Z+ECMQ5NyST1hoLUxOlWpOIx0yYe8xp6osPcPxhkodIcly7gAEk2AFySdABxMWbA7kYyYMxRZQpbtGpX2KCR7YolX7IQoK4rYOJluyPhpxZTQlVZlPKjLYilNIUBJM9IhssEJ4tENhENKbywiseTpJalGI8I8lyiDdiYaSKxwVh4iPCIAYKx4Vh6kckQA2FjlhDwEcEQA3SFSO8se5YAZKxZNyF+tmfw//ACEAGWLHuUPrJn2B96KADj1riT1mP9+Nq3z/AORxX8Nh8IxmctcWB/3G++I2XfRv6Dif4Z+YEIqxLDi6eK/MQZwq0wkw/wDck/CXP/OBMnVPFfmIm7MamBmlj/7hf8MqYfxjTp3lj18d4rBvt+ww/t+4Io+JXun2xet+R9Vh/wC19xYpU1agD9XiG0T96iyYxyljkliv2sOgPtoSPbDu6VPpUrNoGQnwDpX4CFviP6bNHISh/ky4jbEB7eWBauYf4GgGn0bjVrJmga9m/wB0xIw7goKcoibExImSkennL3h+8LOPeDHmBcpWVS8uw6p6DdbWPUGBAHv1hHmYYqhpcipNAMyMq5jSwLEKTwzV0gJL2uzyhLmYeZKIUBy6FVTKtCVY91xawUk3FuMXnGTtFA8+oJIqulSCOJIBsaaG/MGmDlKomCUFIPcVACcwsxVWqqitQKAcL1IEMkvYqMslFYUNBbl09mkOY1u6ftS/hMUn4KYk4ZyQa2ZTQ000BBp4Efz1gdtOZfKPRu32itAPYjGv215GD2PEVnfD/kZxPq099AIx0LGneUXHZMMkkazWBP2UIYn+9l98ZqohZeVYTg26VhBaQ4RF/wBy9zcwGJxQyy17yq1tOLcvw8dBRncjc4zCMTiKpLQ5lBsSVvUnhSmvDx801tveQzmWXh6iUrZVKefOcehL5ILZn4V5kAs7f24cVSXKDLhgcihLPiGFskumksGlWpbqSBBfYuxuxAmTAO1IyilMstRoksAmgFfiTUkkkiLUnCnF5FzBa0vQmg6C/DT2QokdrHsMmUYkwPnPlBY8InTjA7G+Y3hGcb1z9JHIwvpI5H4fnDB8w+B+UDFMOTabdDX0hevw/OPDPX9CIeAWqueWnuMRRiH5/AQ9F3Cpnrz+BjrWBSTWY0OnhBVBYeA+UKw5dugI5IjsRyYQcgR1SFHQEAMM45j3xY9zCO0mX9EfOKlKHdEWbcElps4H1V+8YsbDTLJximop2wHX9pce2Nf34b+g4n7I++sY9glzYoE//JUf5q/nGt7/AJH/AA7Ec+6D4Z0pAlkEla5R9n8IkGgwjILVnBz1+rYfjEbZKB5iKBeo5fOLFgdkS1lqkx1mOL5FzUBAy3b0vAQvB+RPfnDu0uUVUkSw7OQLKKIAW5RSAtWQc2HzEawm0A+HmThLzLLQ9vLUVOWlGNCbIwvW5s1u6DGXOymapQFU7QUBOgzC1YYh3fKb/TZ1q3T4S0H4RxuzfESupb7jRxvca4yf9ofBVESd00P0iR4n4o35xJtmwG1JcnGTMOsxGD1corAtLegzVXUKQQelvbYcRIWYAynK481wK0rqCPSU8R04EAxku/GwjhMW2NlTGV2DTVI1SYCC5qNRlJoDzvUWJLYXlRlMFXEp2cyoGdAezc2uBqjdLr1EUzXjFtNFMyZcpPeCl0NVK1GW60rxAhqZMQMDLZWI0BVmK1u1ApqRWppSoqaG9Im4Ha0uegeUc4I85e8P7y1X4w7iXalcrcfRMPZaD+2YKctVqSS7AZiTrlQ6chn0oLNAjH4mXKRpkxgqIKkk1411NyST4knmYJtJmTDRVoPWeqj3an3RTvKVupOaUk6VMd0lXmS6Dn+0QDWg1BqQLjjD3oa3VA2/tc4uaZhqop3FPoqDZfHUnqYGKIdmygCKDXTj7o0Tczc9Za/SsZRQozKrWCgekxjPlrdTwZ3M3OAAxWL7qL3lVrUp6Tcvw8dHtu7bOLISWGGGrklolnxTCwC082WDqfx0W3ttNjGVEVvo5NJcpah8UwNKml0lAjXjSmtcta23trsS0uXMVpxGSZNWyy107CRTRQLFh4DiYpHk7tbapk1ly2UziMjulkkroZMimhGhcaXAvUxxurjsXnWVJrMQnKEapUGlsp1QDU8AKmh4hdi7Nm4lwkpAxJoAKCvtrYDi1KD3A7puxu3LwUuwDTSKM9BYVJ7NTSuQEnW51MB2wLlbhCYA87EYntGu3ZTCssHkg4AaeyFFwrCgS+cExquaAEeMM4xgUfprHc6QJbsoUVFL14EAgdNR7ojYs0z9VB9xofwiWuyPmHwPygSYOPhWVKvSWGFsxoTXkvnHXlAzspY1cn+z/wDaHE5Q9s7zJn64GB4gtgpYyNlYFmsAQQTalibV6VgYZRBKkUI1HhDTY6w/nD2/KDI4eA+UBVqD3RDoxMwf7CCnKLiOTEfC4nNY2OviIkRC9lHdNIadqRDnY0iwEOFSk+aIsG4c0LOmVPnZQOpqx+QJ9kVZZ7CwHwgvu3jllOXYE1ZRQU1YOOJ5kRWk7P7LFcQv/wCUn+ssarv+QcFOBNBVKnkO1SsZTsX/AJiX1xSf6yRp/lJI/wCHzurJ/qpAGd7NeVKMtpSZ5gZndZlQQiHMmQUyiqitTW56UHe3t5Q7Ay5eQFR3m8699Ft7ekCthS6NMNvMbS48xj+NPERDxWLzKsvKoCE0b0qkKCCfV7ooKcTzgG/YzurvTMwmLWa5Ly37k1bUZCe93dKjUeEWvG+T+e+JV8EizMI5SbLmZ0ChGIbJQnMaCoFjanGsZ1NQGuVaUpcGo8TWNU8jm9ZqcDOa4qZNfe8v/wAh/a5iHYmZGsb5Lp8/EzWfEyJfaMXCAs75LCpXu/OkWXYvkvkyGR3xE12TTKqoulNDmPxiFvVvngMHjGmy5TYjFquRmVyqJS2ViagsLiymlTcEkRG2b5SMViZ8qWsuVKRyK0zO1CRoxIHH1YnhXK+4rYSTDVjmtTvcuVBQRmEjZ+Hwm18QmIyLIKEoXAyIX7N0pbu3zqPGLH5T8fNl4B2lzJiNnQZkdlNC1xVTWhjEDjpsxlEyZMcZgaO7MK11oTDJscreTZkiZlE0VYEVRHOWuhzAU+MN7T36wuHmNNkGdiJjLlozlJK1pWimprYcPaIyLEn6wf2YedojK2NMMZl5anuv5RHnTuzxARCx+ryiiGvoEsSQx4Gtza1q6ZJIcZhp8uh6xiu5e5xmlZ+IUiVWqofT5M37vIceNrHWUxSowVTw08OvOHjbrlOet8AGI3Pwkme+Maiy1BcoaBEIu7DkvGnC9LGkVvbm1nxhHdYYev1cu69sVP7SYRdJQPDU0oL1KaY09XFFPd48z06CB2A3elrNMw3Faoh0TqeZrpy8dKQA7L3PLyprTHZJs2XkDqKMg4UX0FsBkFO7Y9Mum7l4o4xsMZfeTLoaKynRlY+hSprwykaikfQsyaVfKNCNR6J1uONRbpxhtJIBzUBalK8aVrSvKsA2DbsbtysFLogBmMAHcDl6K10X5m8GmMJjGSeUHfoTUm4fCP8AVjuzJinz70KIfU4FvS4W1As2P8pWBlTGl/WTMpoWRcyk8crVuAbV6QowasKGB/aMwCdMroAh/wAtIaXEqg7TLVh3VVl7uYkHMRxAp74Zx3enOKkWXT7CiI2JQ5Aak5WK/AEfCJ0024dpkxjMcsSbljc/GJmB2S00kC1PjEfBC4r0+cXjYZl5KtS3DwFL/rWJyulYY78n9m7rIssCYgaomKzA3oSpR0OgYAUrT1ga1EA9+dhDCGSVNQ6EZrHMFp3h7yD7I0jBTUmSh2dwLe3jcRF2psoz5RE9FeWhFAKqUJGUZSPdUm9bxlM9Xlvl0+7HU4YpLSpp4/CHvop5/CJu1sGkrEPLlszItqsBUNlGdCRYlWqtRyjhtBG+3Lr9RJaFXUV/24wQZ+URH89PbEvjBTiPiGND0ERZMpmBIpr7axKxPpfZMN4LzT4/hDK+UcSzStYMTNmPI7HMyN2ow81crVyq5eityaxqIHLp7Ite6cqTML/VqSqS81QCM4z94V0MGy0DbvsTi5Y4fSZR/wA5axp/lJNNnzftS/8AUX8ozDda+MldZ8v/AFBGo+UpK4BxzmSx/ihex6ZJsWawZxw7OafdJmN+AhnEYNhKlz6grMZ1HMMmWtelHWntjvZVmf8Ahzfc2HmfnE7HEjASF4GbiG62EoD5mGXoMwWJKm9x8+kSpwaS0udLYhgQ6MK2IvY8Cp+FIHyGpXlav4RPwzkq0uo5qDzGnwioVi173omPwqbUkrR+7LxaD0ZgACzPstYf3eRiNuNmbGSrGgK1NLDvLSp639xiBuZt5cJiGWaM+FnAy5yEGhRqjNTmp+GYDWLTsXYIwe1FltMY0yvJJWqzZTOmRw4PnDvA21FtYmxUvC2+UmVnwbS8juWdaBAS1QGYGgBqBSvgIwYe4/KN634ekmV9YZVZ8sZ/VqkznzpS/OMe2rs+XLmuqzM4BrmqpuRVqsLGhJFRyghaQHU9oteS19140zcfcQzMuIxSkJqksi55M4PDkvtPAGZuNuIrFcTiVzNZklkUC00LA6t0Nh46aWxpaJs3dqmVk1EVpYUUUUA0iFjsUstatrwA1Y8hErH4tZa5m8ABqx5CIGzZBeYZkyjTRQhK1WUD5tR6xpFIEdk4R/PmWLaJ6vj1/XgRmvSy6849dyBQWPH+UcKtIA4RKeMeO0eu1Lmw+AjFvKPv8Z+bC4RqSdHcazearyl9fS8NQO/KFv725bCYRj2NcsyYv9Ze6IR/V8z6X2fOzZiKnkSfnEnZo7x8PxhsD6onmfygNHrCjmFDIUnk9qzcCae4U/CPJYzCatdQrD7SAn7pYeJER5ykzHvTvGJEuSqCpN/W5Gtj76RNXHGCNxxuO76wqKgHqLe2NbwOIlTR3JaulcroQoKrTunK3mG91NNLdckkL3gw0zUNNATpToaH3GNP2OiHIxRXIFiQCQOVTeMer6dP+fmWJiuJEwylNEY1Xp0g5g8esxezYi5BOmqGosbaga84i7R2ek9AR3WFwwsaxWsVinw9a+dpnpYDryjPbXW1V3nwsxZ0yY8ppSTnd1q4eprVyHAv3jWhAIDDxIZtIuG8+3pWIwYD92bKeqKps+egeoPABain4xRvpY5H3x0Y7sceepXUz9okSydIhdoGdCIISpRmOiIKs7BVHVjQfOKKIuJOv2THGEPcPiY0XAbnyqVZTNYekxIQ88qKbjxJg1hd2paqaypQHLIuvWI+SNPivmsfZQOP698Wbc3umaaa5L018+NFw+wpSGoSUp/cloPjSsEJezhzhfJ/B8U/WNboyHXFyC0tgO1lkkqQBR61JItGneUaapwVFIb6yXZSCaVJJoIO/wDDUOpr4kxwdgSW1lofZB338L45+sOw6kEgL/VutaEVPYso+PziNjcZmkypQH7MuSeLF2FAfAC32mjcpu6WFbWTLP8AZho7oYMf+3ln+wv4iK7/AOF8c9Vhq4YhTzN/5Dr7YlSZYYBgwBFKHhXkTwiTvLsw4LFTJakhPOSvFH014i615rWBWGnOhqhpzBuD0IMayysbLOD+Nkk3ymvK1rEt+Yp1jS/JptoYqWmEmN9dhyJkljq0sEZpVTe2o9nARnpxAdcwGUHUDQHpyuPlETCYmZImS58piroQytyIJqDzBobcjDsTK2rfzZk/EYZBIliaUnJMZAwqyKkzMouCT3hZb+2I+6m5qTZoxk2QJK0Uy5ApRSP6xwFAzaUWlqVPe092Ztk4kJiZSEGYaqqVYrMWnaSyo4hr1axVlPdqa6BKfurVchIFVtY0uKjWIWfIVRQQMx+MWWKm5NlUaseQgLtza0zDTCxR3z1CE1KLQVFQNKmgqePUiAE3e0y6vMlpMxDDLJRKjmSzVNFVRUlrUoa6waTtP3h2wuDTtZtHxLg9lKHofvHlTifYKmKp5OZ2Kn7QGImNNIKsuYUuBorBtJYNRQekRqamIuz9jPtKcGc9qxbO845gHIsFQejIS96ZnOlOGwbH2VLw0sJLHKrUAJoKCw0UcFFh8YDEQI5YwiYhPnZwQ1JYB7uXvMeBLE2XpStePCAMn8o++rzZjYOTVJSsyTG0aYyGjJ0QEEfvU5a572SMSTWteBi0+UvZzS9ozGCnLMVZgoD6S5W0/eRj7YqqVHDn84FaOSFVWNK3tr1hiZQIFB4x2H7w9kMsdOhrANF9F61hQ41R5swU4XP5QoaTM5++xHEk/GPDNJFDGl7Z3UkYmrSlWRNN6C0tjyK+geq+4xQdo4OZJcy5qGWy8Dx5EEWIPMcoiZzLw0ywuN5M4WeFZeXpe3j7LH2RoG7uILHkRYjqIzhRU0AqTYDiTwEahhpkqW4KuDkADkDVtCOprGfVx3G3Qy1VxluCANLQA302ecRhTKFpkthMl3pU0IZCeoNQeai4BMertQzDkSUbasTSnshmfg3N3q3WtaRlMrLtvcZlNVk0/Z82WKvKdBzZWX5iI6joY10YQUgJtPd4PVpYyN080+zh7I2x6u/LDP8Az68VQFJqDpSLDuwjtOL8Ja19r/VgDrRmPsiNicPMltlmUU9QQPfpBXduZQTTmBoZelfWbnFZX6owx+0lalg5gJVRpaJGJxAQ5G46daRG2UgIBiRtaTmAPEGv5xz8ybdHFy0iNilzWaCOHmW86Mz2jinw00iY2XMzZc1qitRcW0Kn2iCWz95hSxDAa0NflBLfw8pjfbQhPA4j3Ry2KXUsIqEneiXMdZcshpjmiqCKnj7BQGIm+k6dhsOkzOuZ5gSgBIUFXYmpIqe6OUXO6+Iyvbj5q4zdrS19NffATG77SEIXOrMxACr3jUmg009sZeJjzf2j5hyJFPdnEdDDIlCFWouOY42pM53jSYX3Wd6k9Qf34xgxUssRlaQA9TqyzHyZelwD7IouBKGYgmA5CwDZfOy1vTrBTF40nMpNQ1A1cxzBSWUGrGwN4HOy6hQD0r+cXJqaZZZbuz2AmpmRJhKS65S41AI84i/Gh98MYiWVJ7wYVYVBsaG5Xpx9sPYHtC4SSO+aiwFqijGp821b8IvuxsLLwCUoDNcd5vSPJQD5q14anU8AtWlIBeTzec4HEjOfqJhVZg9Ug91x4cehMbrjSDLs4fNXKdbMaitDelaDnaMaxmzsPOaip9YRmZwQiqurO9qdmLUJGZqV0IrI2fvucEhlS3E1UUrLLKVatsrNzAHdHQAeCFi07z7QXBIq5jNxTiiIzVCKty7EmgUXJJoBToTFV2BsebjphZiZnaXmTGqO0AOg4phwRYWLkcAKK1u5sbEbRmmZNuswhiWF2UVoXYUPZ1pRNGKClhWNl2Zs+XIlhJY8WOrGlKmnuA0AsIZFsrZ0vDywkseJoKsR4aDkBYCJhaG589UVndgqqCzMxoFAuSSdBGezPKR2s1peGwkycq1IKsQzAav2YQkLXnzFaG0I9NBL5vD9XgfjMfLwys0xjrUDVmJ4KOOngIo6+Uxs2T6HRq0IM2hHOo7O0Q8Xtxpr9rMpU95RX9nL9Gh4V/GvGxOSvBzeOccXMEx0Vci5QoOik1+sfnWvdArqNYHLIKnKFv6oUVHU5jVR1ZwekEMOoaykqVAJ/crrT988zcU4UNHpzqi00Gvj1J4nrGkiLQ6ZglIpMCeB7/zAFfaYH4jYOHb0APsgr8jEubivVFeukNHENyHvP5Q9Qu6hLbrSvWaFBT6QfVb4fnChdsPvqzqocW1isb5YMvLDMScmlSTTqK6R1u7vCrAJMOVxxOjeHXpEnePHiYnZS6GYwvyVeZp8OfsMcElxyejbMsWcYR8kxT6pr7RdfjSLRstzKWW+YGbMqVGvZr61PXbUcgesA5uHWW2VhVlIuaj+VIl4CZVmA5mngDaN8rww6c1dVo2xhao1OvWDyS8wiq7v4xbAxc8gC5hoY58Y6s74Bnw31mX2xJOzaDSImNmsJgI5e+CeGxpIoRBJNjK3UsDpW6i45JqTQEZWIRheoyggkcqn4GM62VhezM2WRRlmLLe9e8jODfThGs/8QEhs9SANaRl+++Klpie1wrELMZ2cVB77NmrQ8LmNsZudsYZ2zLurQ9iTKKvhBXFiojJNmb9zpdnlS5g6FkPvuPhFownlDwz2mJNlniaB196nN/hh/FlpPyY272f392MMTgDMUfW4Vs55tKegf+7RT0CdYz7dw5Zc3r+CmNZ2PtiQ7FpbpMlsCrqDXuMKMGXUWvQjhFB2tsF8HMnIAWl2eW4vmluD2bHlxUk6lTFYeNfiep53+gG4grj8OP3j9xo0byiS6ycMKVrPFqE6S5nAXjP9xlpj8Oc1e81v/wBbxd/KXiaSpFOE08v+m3MU4xXtn6U7FEr6wP7oYfNYEYiab99vefyjifiidaHwoPkIiMwPP3/yhk8dv1b8odwuFeY4RLsfhzJNLU5/yh3AYB50wS5S1Y89FHFmPAD9XNI0LD7HlYGXmPemEec1qc2I9EDgPmTBaJEfZ2FlYKXoDNIzMzdNCfVUcBrXmaUgBZmJmhVWrmhCtoin05o+SceNte57MzGpAZe+xfzZY/6k39/1ZfDjfQZh952kzK4daqocgvrMdgVM2YeQqaL+MEOiO+mEEhJOHlzMzvnmT6sKsRl7Nph4KDnIGlud4b3Q3TbFzEfJWWLlmqQ1/Pda2Xgq6txtWHt192Z2OmZ5hJViHZnF25O/7vqpx6C8bPs/Ay5EsS5YoBqeLHizHif9tICLZ+BSQgSWOpY+cx5mny0AsLQ9iMQktGeYwRFBZmY0CgakmOMTiUlozuwREBZmY0AA1JMYdv3vq2NbspRKYdTZdGmEaO45cl4am+gSTvrvq2NcypRK4dTYXBmEEUd+Q4hfab0ChtibWn4KYXlHKzqBUEXGtCPwqNIrjtXSJmFnVAzHzbCvKn+0Cv4t21N65mMEtJySwytmaYEAmMqqarmA0pU8bgXiDLxh886ijkfvEnslpyAq1OQpAh3pnI/6dva4U/AmJ+z+9Olpw7U+6Uqlfx98VE5Lbg2MtAp11Y82Ovu09kRp0wua6jgPxjrFPy/VY5w4F4tltHMKJfcWrTDQC/8AM+0gUFyWGmsCcdtiQrUGa/HUAcCeXheHsaqXSFDXax7CD2TOwL4R50mWBOUd5Ce8pPEHivUfCAuwcesuYe00fjyPLwitSprIcymh/VR4RMkzg3Q8vyjHLHc06MMtXax727OsJiXHHwgBsuf3gIL4Pa57Mypl1pQHiOhiuv3HNOB/2iMZdarTLKb3F9wWGJoytfiOcXnZDPlAew8YzLYm06sFPKL5hZ+ZbG8YZfWurHWWPArOQFga6cYkooBoaQNw4IuYcm4gggHlY+H8qQSlZ6O4vDhlYG+aojEdsymlTZkpq916626W8DrG5h6rGW+UjAhJ6TB/WKQfFafnGvT4yY9Xdx/4qimHUP8AvEdD+v5Q4rUuB4jn4R1xxWHySpDoSrDiCQfEEXB8ImY3a06essTZnadmGCMSQyhqVGZaEio41MQle1eESNmSkM6WkwlZcx1UkU7pY0BvwrSvSsGoJb4H9hSpY2mpRgMruMgpQZUdTp4Vgr5Szmkyv4hP+ExWN1CTtNSRTvzSRy7j2ixeUo9yQBxd/uimnjGN8tZ4Z9l6/CJeAwTzXEuWMzt7lvQkkcP5AVJjvB4GZMmCXLGZzrSpCDThx8PARq2xtkSdmSc70M0i541pThxuRawqQNSWZOdmbJlbNk5moZhFSTqT+AFbDhXiSSQeOxLu7FmCsvedm8zDrwZ+cz1U9E/vVKyMfjHmOzM4RkGZ3Pm4deBPrTTwUaE+tdaNtra3aUlygUkqahT5ztxmTDxY8BoBYQaPbna+1A47OUCsoGt/PmN68zmeQ0EWPcfdJsUyvMQBF719DXzS4OvReOptq3uVug+KcO4IRaHvXA41I4seC+0212zA4RJMsS5Yoo95PFmPEmAnWDwqSkCIKAa8yeJJ4mFi8UkpGeYwREGZmawAEcY3GS5UtpkxwiIKsx0A/XDjGFb775TMc+RKph0PdTi5Hpv15Dh43gJJ3335bG1ly1KyFaq1PeemjMOF704WimZxrSOIUMHQitpY8o6WVSI8OJNI6+P5wj2nYUecvrIy+2lV/wAQHvglsr9tLNf6x/8AMljL8QRAeVNB0ND1iajkEFbEEEdGU1X/ABVHgwhwrFvn1rCZqUhgYoTFDjQiv8o9EznGjI3tZS8sgcqU9qsD7Co+MVKRgZjtQqVHE8h06xcXxBAIFKHU8eoryhvtSwzE5RoqildOXBeZ4n2kFhy6MLMy2Gg0hQoUAUasdoCSAK1ramteFI5gxu9M7N2cKrPkIl5qBRMJW5JsO7mpWlTaM2judhJksL2gox1HLx6xFmyQ19DBra2JIlqMQ6GbclUykgejXLYGkAExQJoRQc/zhK29w8xpbA+78ovm7m0qkVvFImJmFI9wONaW/Ua9f5xn1MNxt0+p23+Nkn4oABhoYiYyeSotWhrb4/rpFbl7YzyQQa8+kFNm4kTFGVgfbHNduua0K4XGimtYAeUBFfCZyLo6kdKmh+EGBgW1HvF4Cb3SpszD9miZjmUtTXKL2B41pF4X7RHUx+t0zZT1qPiPyh3NQ8wYbyEGlDUGnUHlTUeEe5qWOkd0ebTinLfUHWHlBINKmgr7Ofvp74ji3URIw0zIaj9VFCIcTRiQk3D40zRKLs2eZLQXzI4Y5+7Wiha+0EUsaT9oSMZiEQTGl5gWN6BkDgVVcooaAa63I8ZmD2qsqRLzkTJrIAtFAZUrmRGbUgEk0PE9BEeRjGZ6n3DhGGVu3RjjNLFh1wux5IMwh57CoQEFzW1fjSuguBxJH4ja/b1ndoFVRmaYfNkKdAB6U46BRp4xXd5sC6zDOVWYzBW9TkyjvkdAPdFbae2TJmOXNnpW2alMxHOloqczabuXQltjbBnAS5YySEOZUPnM2naTG9JzU9BoOZP7kboPinDuCstSCSRpyqOL00XhqeAK3J3PfEuHmAqimpJGnHjq9NB6Op4CNnweFSUiy5ahVXQD4kniTxMBO8FhElIJctcqr8eZJ4k84cmzAoLMaARF2jtGXIltNmuEloKsx+AA4kmwAuTGd7H3pm7Qxjm6SURxLT+0nfemrkHwANBxJCCvKztaZMmSpeYiXlLZK2LZqBm5mnurGeRcfKY39KljlKHxd/yinQ4ChQo8gBQoQj2APIelYgjW4+PvhmFAFi2XjgLZqqb9VPUdYKmZFIiXhtozEtXMOTX9x1EVMk3Ha2F1PMfL3R4gTUknoLfnAeTtdTqpB5W+cdttEcFPtpD7ontov9KHCWPaT+cKAf09uQ+MKDuh9lBZS110h4T2S6sQeFCR8o8WWTWgrTlQa9I4Mhz6J+EQ0cOxJJJJJuSdSTqSY5h0YV/VPwj36K/qn4fnAWnUjEZbG4+Xh+US3lhxWvgRET6JM9U+8fnDsiRMXRSRxFR+esI5tL2XjjKchtDryPWLNKMqYA8thLmDlTK32l/GKvOkVHeFOXSIRLIfkf5xnl093cb4dXtmrNtT2Vth1pnynqIPdpLmDheMcwu0yurMOoP4HWC2F3gK+mp96n8RGfZY1nUxq57T3ZkTTVkBPrCx94ufbFbxW4hFTLm25MK/EflD8jeb94HpUROlbyp6Ry+MEuePgXHDLyqc/dXEpcIHHJW/BqQ3I3fxDGnZ5ftED5VMX9NqKwBqL+2JcplZgRT8/CK+bIr/AJsPPKjf+msQmmRgBWxv7iPxg9u9s2lJkzQXvxh/eqVNCpMkPlZTdSQFYHmDa2vhXpAbeLbvZp2anvlaUB8wEat15D29IPtlwVmOHKTvPvUZZaXIK5iCCxAOSnED1qEjl3jELcrc2ZiHEyYCktaGp4cgK6v8F1N6CJ26W5kyZNDzZby0yoSXuzVAaoB0ZrGnoClamNVkSllqEQBVFgBGuOPbNOfLLuu3WFw6S0WXLUKiigA/Vyda8Y7mzQqlmNAP1QdYhbT2lKw8tps1gqLqeJPBVHFjwEZpjfKM8xiRhu6CcoMyhpzICaw0JW9uzMbtBwWYS5Sn6uWCpp++xzDM5Hu0HEn3c7YD4OaTMYHtFZRSlz3TSxPBTAz/ANfzP/ij/wDp/wDSPcLvPNxU6VLEgKQ2az1NARU+aIDGt7dly3mCa6ZqIF4W7zG9dBeKdtXZqtKYy5SgihqovqK38I1jEpmBBFa1EYNipc1SUmZwym6uTY86H5woe0aPI6Kx5FJeQoUKAFChQoAUKFCgBQ4k4jqORhqFAEv6SvWFESFC0e1gaUmdjKTKrMSATUqtbCpjqkKFAt6Y8IrChRIe5o6VoUKAHCARQ3EQMTIprdTChQQ6aw+DVzSJE3YJIqp98KFEZWyrxks5CZmEZWCmlSQB4k0jnEYdpZo4ofEH5QoUa+mN9ie72MysVJN9Ohi5StohEzMCBUgjUBhxHGhhQozzk26Olle1XNs7wPNmDsyyZSDroRcW0POLF5Ot3Emk4uae0YMcoNwpF+0avnNrQaDW5pChReM1GGdtvLVFsKCIu09oJIlvNmEhEFWoKn2AcSaCFChoYlvPvFNx0zM3dlr5iVso1qebkan2CAeaFChm7V46L6G4I0IJB94hQoQdtPf/AKkz++35xFdiTcknmSSfeYUKGHMdKsKFAHpk6cjp7NRHDS4UKAOCseUhQoCeUhQoUAeQoUKAFChQoA//2Q==" class="card-img-top" alt="Le presse à cuisse"/>
    <div class="card-body">
      <h5 class="card-title">Le presse à cuisse</h5>
      <p class="card-text">Le presse a cuisse peut sembler difficile à pratiquer mais enfaite relève d’une grande simplicité. 
Pour commencer, vous devez régler le poids que vous allez pousser puis vous commencez quelques séries, en étant allongé avec les pieds à plat et le dos sur la plaque et vous recommencer. Veiller à commencer par de petites charges pour votre sécurité.

 </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
  <div class="card">
    <img src="https://media.gettyimages.com/photos/gritty-women-picture-id700915444?k=20&m=700915444&s=612x612&w=0&h=WvYG1BaVn7OLZ8XUbA6LRdK0Wk2RMGtFehbpnAZaXbI=" class="card-img-top" alt="Los Angeles Skyscrapers"/>
    <div class="card-body">
      <h5 class="card-title">Le banc développé-couché</h5>
      <p class="card-text">
      Le banc développé-couché sert à perfectionner vos pectoraux ainsi que vos épaules mais reste une machine difficile pour les novices. Commencer par vous allonger sur le siège puis de sélectionner un poids. Enfin on soulève la barre juste au-dessus puis on 
      répète le processus. Nous vous conseillons d’ailleurs de commencer avec la barre vide avant d’entamer.
      </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
</div>

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