<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Aloïs GAUCHER - TP Final</title>
</head>
<body>
<nav class="nav nav-pills flex-column flex-sm-row">
    <a class="flex-sm-fill text-sm-center nav-link" href="#">Accueil</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="#realisations">Réalisations</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="#contact">Contact</a>
</nav>

<div id="#">
    <!-- Jumbo -->
    <div class="row m-0 justify-content-center">
        <div class="col-sm-auto">
            <div class="container-fluid">
                <img class="img-fluid" src="img/woody_main.png" alt="">
            </div>
        </div>
        <div class="col-lg-auto">
            <div class="jumbotron jumbotron-fluid">
                <div class="container fluid">
                    <h1 class="display-4">Aloïs GAUCHER</h1>
                    <p class="lead">Étudiant en DUT MMI à l'IUT de Troyes.</p>
                    <hr class="my-4">
                    <p>Découvrez dès maintenant mes réalisations !</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-md" href="#realisations" role="button">Réalisations</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="realisations">
    <!-- Tchat -->
    <div class="row m-0 justify-content-center">
        <div class="container pt-lg-3">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <table class="table mx-auto">
                        <thead>
                        <tr>
                            <th scope="col"><p class="h4 mb-4">Pseudo</p></th>
                            <th scope="col"><p class="h4 mb-4">Message</p></th>
                        </tr>
                        </thead>
                        <tbody id="chat">
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-sm-12">
                    <form id="formulaire" method="POST" action="chat/dire.php" class="border border-light p-5 mx-auto">
                        <p class="h4 mb-4 text-center">Envoyer un message</p>
                        <div class="md-form">
                            <label for="pseudo">Pseudo</label>
                            <input name="pseudo" type="text" id="pseudo" class="form-control">
                        </div>
                        <div class="md-form">
                            <label for="message">Message</label>
                            <textarea name="message" type="text" id="message" class="md-textarea form-control"></textarea>
                        </div>
                        <button class="btn btn-info btn-block my-4" id="envoi" type="submit">Envoyer le message</button>
                        <button class="btn btn-info btn-block my-4" id="wizz">Wizz!</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Separator -->
    <hr class="mt-3 mb-3">
    <!---->

    <!-- Jeu JS -->
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-left">Ce jeu entièrement codé en Jquery utilise la touche "5" de votre pavé numérique pour fonctionner.
                    Il utilise le principe des canvas, qui sont à voir comme une toile de peinture, sur laquelle on rajouterait des éléments (le décor, la balle...)</p>
                <p class="text-left">Ah, et il est aussi totalement open-source, il est disponible à cette adresse: <a href="https://github.com/couquino/Integration-WEB-S3/tree/master/TP%20Jeu%20JS">Github</a>.</p>
            </div>
            <div class="col">
                <div class="row m-0 justify-content-center d-none d-xl-block">
                    <div class="container pt-lg-3">
                        <canvas class="" width='500' height='500' id="monCanvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->

    <!-- Separator -->
    <hr class="mt-3 mb-3">
    <!---->

    <!-- Logo Animé -->
    <div class="container">
        <div class="row">
            <div class="col">
                <style>
                    #ellipse {
                        fill: #7FDD4C;
                    }
                    #texte {
                        fill: white;
                        z-index: 1000;
                        margin-left: auto;
                        margin-right: auto;
                        text-anchor: middle;
                    }
                    svg {
                        background-color: #051149;
                        margin-left: auto;
                        margin-right: auto;
                        display: table-cell;
                        vertical-align: middle
                    }
                    #line1 {
                        fill: black;
                    }
                </style>
                <svg width="400" height="300">
                    <circle id="ellipse" cx="200" cy="150" r="100" stroke="white" stroke-width="20px"></circle>
                    <text id="texte" font-size="3rem" text-anchor="middle" x="200" y="150">MMI</text>
                    <animate id="animCircle" xlink:href="#ellipse" attributeName="r" from="0" to="35%" dur="1s" repeatCount="indefinite"/>
                    <animate id="animStroke" xlink:href="#ellipse" attributeName="stroke-width" from="1px" to="20px" dur="0.5s" repeatCount="indefinite" begin="animCircle.end"/>
                    <animate id="animTexte" xlink:href="#texte" attributeName="font-size" from="0" to="3rem" dur="1s" repeatCount="indefinite"/>
                </svg>
            </div>
            <div class="col">
                <p class="text-left">Ce logo a été dessiné avec du code SVG. L'animation, elle, a été faite en CSS 3.</p>
                <p class="text-left">Lui aussi est totalement open-source, et il est disponible à cette adresse: <a href="https://github.com/couquino/Integration-WEB-S3/tree/master/TD_SVG/Exercice%201">Github</a>.</p>
            </div>
        </div>
    </div>
    <!---->

</div>

<!-- Separator -->
<hr>
<!---->

<!-- Contact form-->
<div id="contact" class="row m-0 justify-content-center">
    <div class="container-fluid pt-5 p-3">
        <form>
            <div class="form-row pt-3 pb-3">
                <div class="col">
                    <input required type="text" class="form-control form-control-lg" placeholder="Nom">
                </div>
                <div class="col">
                    <input required type="text" class="form-control form-control-lg" placeholder="Prénom">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <textarea required class="form-control form-control-lg" placeholder="Message"></textarea>
                </div>
            </div>
            <div class="form-row pt-3 pb-3 justify-content-lg-center">
                <button type="submit" class="btn btn-lg btn-primary mb-2">Envoyer</button>
            </div>
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!---->
<!-- Jeu JS -->
<script type="text/javascript">


    var x = 250;
    var y = 250;
    var vity = 1.8;
    var vitx = 4;
    var sauter = 0;

    var oldsauter = 0;
    var xobs = 475;
    var yobs = 400;
    var compteur = 0;
    var niveau = 1;


    $(document).ready(function () {
            var canvas1 = document.getElementById('monCanvas');
            var context = canvas1.getContext('2d');

            // Texte score
            context.font = '20px calibri';

            // Prise en compte de l'appui sur la barre espace
            $('body').keydown(function (ev) {
                if (ev.keyCode == 101) sauter = 1;
            });

            $('body').keyup(function (ev) {
                if (ev.keyCode == 101) {
                    sauter = 0;
                    oldsauter = 0
                }
            });

            // Création du ballon
            var ballon = new Image();
            ballon.src = "jeujs/ballon.png";

            // Création d'une barre
            var barre = new Image();
            barre.src = "jeujs/barre.png";

            // Création d'un obstacle
            var obstacle = new Image();
            obstacle.src = "jeujs/obstacle.png";

            // Création du background
            var background = new Image();
            background.src = "jeujs/background.png";

            // Timer
            var montimer = setInterval(function () {

                // Déplacement du ballon
                // TODO: Modifier pour prendre en compte les niveaux
                x += vitx;
                vity += 0.05;
                y += vity;

                if (x > 475) { // Si le ballon touche le bord droit
                    vitx = -(vitx * 0.8);
                    x = 450;
                    compteur += 1;
                    // Et si je touche l'obstacle
                    if (y >= (yobs - 50) && y <= (yobs + 89)) {
                        compteur = 0;
                        niveau = 1;
                    }
                    xobs = -25; // Change l'obstacle de côté
                    yobs = Math.round(Math.random() * 330) + 20; // Déplace verticalement l'obstacle
                    console.log('Touche à droite x = ' + x); // Débogage
                }

                if (x < -25) { // Si le ballon touche le bord gauche
                    vitx = -(vitx * 0.8);
                    x = -25;
                    compteur += 1;
                    // Et si je touche l'obstacle
                    if (y >= (yobs - 50) && y <= (yobs + 89)) {
                        compteur = 0;
                        niveau = 1;
                    }
                    xobs = 475; // Change l'obstacle de côté
                    yobs = Math.round(Math.random() * 330) + 20; // Déplace verticalement l'obstacle
                    console.log('Touche à gauche x = ' + x); // Débogage
                }

                if (y > 450) { // La balle touche en bas
                    vity = (-vity * 0.8);
                    y = 450;
                    compteur = 0;
                    niveau = 1;
                    yobs = Math.round(Math.random() * 330) + 20; // Déplace verticalement l'obstacle
                    console.log('Touche en bas y = ' + y); // Débogage
                }

                if (y < 20) { // La balle touche en haut
                    vity = (-vity * 0.8);
                    y = 20;
                    compteur = 0;
                    niveau = 1;
                    yobs = Math.round(Math.random() * 330) + 20; // Déplace verticalement l'obstacle
                    console.log('Touche en haut y = ' + y); // Débogage
                }

                if (sauter == 1 && oldsauter == 0) { // Prise en compte de l'appui sur la barre espace
                    oldsauter = 1;
                    vity -= 4;
                    vitx *= 1.05;
                }

                // Mise en place des images dans le canvas
                context.drawImage(background, 0, 0);    // Background
                context.drawImage(ballon, x, y);    // Ballon
                context.drawImage(obstacle, xobs, yobs);   // Obstacle côté
                context.drawImage(barre, 0, -25);   // Obstacle haut
                context.drawImage(barre, 0, 475);   // Obstacle bas
                context.fillText("Score: " + compteur, 25, 50);
                context.fillText("Niveau: " + niveau, 25, 75)

                // Prise en compte des niveaux
                switch(compteur) {
                    case 3:
                        niveau = 2;
                        break;
                    case 5:
                        niveau = 3;
                        break;
                    case 10:
                        niveau = 4;
                        break;
                    case 15:
                        niveau = 5;
                        break;
                }
            }, 10); // La valeur du timer est de 10 ms, le canvas se rafraîchit toutes les 10 ms
        }
    );

</script>
<!---->
<!-- Tchat JS -->
<script>
    $('#wizz').click(function (e) {
        e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
        var pseudo = $('#pseudo').val();
        var message = 'A envoyé un Wizz !';

        if (pseudo != "") { // on vérifie que les variables ne sont pas vides
            $.ajax({
                url: "chat/dire.php", // on donne l'URL du fichier de traitement
                type: "POST", // la requête est de type POST
                data: "pseudo=" + pseudo + "&message=" + message // et on envoie nos données
            });

            $('#chat').prepend('<tr><td>' + pseudo + '</td><td>' + message + '</td></tr>'); // on ajoute le message dans la zone prévue
            var audio = new Audio('./chat/nudge.mp3');
            audio.play();
        }
        else (alert('Veuillez entrer un pseudo !'));
    });

</script>
<script>
    $('#envoi').click(function (e) {
        e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

        var pseudo = $('#pseudo').val();
        var message = $('#message').val();

        if (pseudo != "" && message != "") { // on vérifie que les variables ne sont pas vides
            $.ajax({
                url: "chat/dire.php", // on donne l'URL du fichier de traitement
                type: "POST", // la requête est de type POST
                data: "pseudo=" + pseudo + "&message=" + message // et on envoie nos données
            });
            $('#message').val('');
            $('#chat').prepend('<tr><td>' + pseudo + '</td><td>' + message + '</td></tr>'); // on ajoute le message dans la zone prévue
        }
        else alert('Veuillez écrire un pseudo et/ou un message !')
    });
</script>
<script>
    $(document).ready(function () {
        setInterval(function () {
            $.get("chat/affiche.php").done(function (donnees) {
                $("#chat").html(donnees);
            });
        }, 1000);
    });
</script>
<!---->
<!-- Smooth Scroll -->
<script src="js/zenscroll-min.js"></script>
<!---->
</body>
</html>
