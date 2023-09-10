<?php
    if (isset($_POST['nom'])
        && isset($_POST['prenom'])
        && isset($_POST['mail'])
        && isset($_POST['telephone'])
        && isset($_POST['marque'])
        && isset($_POST['annee'])) {

        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' .$_POST['mail'] . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['mail'];

        $message = '<h1>Message envoyé depuis la page Vendre ma voiture de
        <a href="https://omaaar31.github.io/site-vitrine/">lesbourdettes.fr</a></h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Prénom : </b>' . $_POST['prenom'] . '<br>
        <p><b>mail : </b>' . $_POST['mail'] . '<br>
        <b>Téléphone : </b>' . $_POST['telephone'] . '<br>
        <b>Marque : </b>' . $_POST['marque'] . '<br>
        <b>Année : </b>' . $_POST['annee'] . '<br>';

        $retour = mail('omarboulahbal@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour){
             echo 'Votre message a bien été envoyé.';
        } else {
            echo 'Erreur.';
        }
    }
    
