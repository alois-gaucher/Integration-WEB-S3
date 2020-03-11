<?php
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    if (empty($email)) {
        $erreur['email'] = 'Veuillez rentrer un email!';
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erreur['email'] = "L'adresse email '$email' est considérée comme invalide.<br>";
        }

    if (empty($prenom)) {
        $erreur['prenom'] = 'Veuillez rentrer votre prénom !';
    }
    elseif (!filter_var($prenom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Zàâäéèêëçùûüôöï]+[-']?[a-zA-Zàâäéèêëçùûüôöï]+$/"))))
        {
            $erreur['prenom'] = 'Le prénom '.$prenom.' est invalide.<br>';
        }

    if(isset($erreur)){
        echo json_encode($erreur);
    }
    else {
        echo json_encode(true);
    }

?>
