<?php
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

    if (empty($nom)) {
        $erreur['nom'] = 'Veuillez rentrer un nom !';
    }
    elseif (!filter_var($nom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Zàâäéèêëçùûüôöï]+[-']?[a-zA-Zàâäéèêëçùûüôöï]+$/")))) {
            $erreur['nom'] = "Le nom $nom est considéré comme invalide.<br>";
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
