<?php
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    if (empty($email)) {
        $erreur['email'] = 'Veuillez rentrer un email!';
    }
    else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erreur['email'] = "L'adresse email '$email' est considérée comme valide.<br>";
        } else {
            $erreur['email'] = "L'adresse email '$email' est considérée comme invalide.<br>";
        }
    }

    if (empty($prenom)) {
        $erreur['prenom'] = 'Veuillez rentrer votre prénom !';
    }
    else {
        if (filter_var($prenom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Zàâäéèêëçùûüôöï]+[-']?[a-zA-Zàâäéèêëçùûüôöï]+$/"))))
        {
            $erreur['prenom'] = 'Le prénom '.$prenom.' est valide.<br>';
        }
        else {
            $erreur['prenom'] = 'Le prénom '.$prenom.' est invalide.<br>';
        }
    }

    if(isset($erreur)){
        echo json_encode($erreur);
    }
    else {
        echo json_encode(true);
    }

?>
