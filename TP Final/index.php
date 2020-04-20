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
<!-- Smooth Scroll -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        // Function. Custom easing pattern
        // If this is set to anything other than null, will override the easing option above
        customEasing: function (time) {
            // easeInOut Quad
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

        }
    });
</script>
<!-- Tchat -->
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
</body>
</html>
