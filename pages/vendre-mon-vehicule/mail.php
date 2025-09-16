<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Nous rachetons votre voiture à Toulouse et ses environs.
    Voiture particulière, collection, accidentée, en panne et utilitaire." />
    <title>Rachat de votre voiture à Toulouse et ses environs</title>
    <meta property="og:title" content="Rachat de votre voiture à Toulouse et ses environs" />
    <meta property="og:description" content="Nous rachetons votre voiture à Toulouse et ses environs.
    Voiture particulière, collection, accidentée, en panne et utilitaire." />
    <meta property="og:image" content="../../assets/icons/favicon_charly_auto/favicon-32x32.png" />
    <meta property="og:url" content="https://charlyautomobiles31.fr/mail" />
    <meta property="og:type" content="website" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/icons/favicon_charly_auto/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/icons/favicon_charly_auto/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/icons/favicon_charly_auto/favicon-16x16.png">
    <link rel="manifest" href="../../assets/icons/favicon_charly_auto/site.webmanifest">
    <link rel="canonical" href="https://charlyautomobiles31.fr/mentions-legales">
    <link rel="stylesheet" href="mail.css" />
</head>

<body>
    <div class="confirmation">
        <h1>Votre formulaire a bien été envoyé</h1>
        <p id="compteARebours">Vous serez redirigé vers la page d'accueil dans
            <span id="secondesRestantes"> 10</span> secondes...</p>
        <div class="previous">
            <a href="javascript:history.back()" class="retour">Retour</a>
        </div>

        <?php
        ini_set('SMTP', 'smtp.gmail.com');
        ini_set('smtp_port', 587);
        ini_set('sendmail_from', 'charlyautomobiles31@gmail.com');
        session_start();

        // Check if the form has been submitted and all data are present
        if (
            isset($_POST['nom'])
            && isset($_POST['prenom'])
            && isset($_POST['mail'])
            && isset($_POST['telephone'])
            && isset($_POST['marque'])
            && isset($_POST['annee'])
            && isset($_POST['code-postal'])
            && isset($_POST['carburant'])
            && isset($_POST['vehicule'])
            && isset($_POST['immatriculation'])
            && isset($_POST['message'])
        ) {

            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From: Charly Automobiles <charlyautomobiles31@gmail.com>' . "\r\n";
            $entete .= 'Reply-To: ' . filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL) . "\r\n";
            $entete .= 'X-Mailer: PHP/' . phpversion() . "\r\n";

            $message = '
            <h2>Nouveau message depuis le formulaire de vente</h2>
            <p>Vous avez reçu un message depuis le site <a href="https://charlyautomobiles31.fr">charlyautomobiles31.fr</a>.</p>
            <b>Nom : </b>' . $_POST['nom'] . '<br>
            <b>Prénom : </b>' . $_POST['prenom'] . '<br>
            <br><b>Mail : </b>' . $_POST['mail'] . '<br>
            <b>Téléphone : </b>' . $_POST['telephone'] . '<br>
            <b>Code postale : </b>' . $_POST['code-postal'] . '<br>
            <b>Type de véhicule : </b>' . $_POST['vehicule'] . '<br>
            <b>Marque : </b>' . $_POST['marque'] . '<br>
            <b>Type de carburant : </b>' . $_POST['carburant'] . '<br>
            <b>Année : </b>' . $_POST['annee'] . '<br>
            <b>Immatriculation : </b>' . $_POST['immatriculation'] . '<br>
            <b>Message : </b>' . $_POST['message'] . '<br>
            <hr>
            <p>—<br>Charly Automobiles<br><a href="https://charlyautomobiles31.fr">charlyautomobiles31.fr</a></p>';

            $retour = mail('charlyautomobiles31@gmail.com', 'Envoi depuis page Vendre ma voiture', $message, $entete);

            // If the form has been submitted successfully, save the submission as a session variable
            if ($retour) {
                $_SESSION['formulaire_envoye'] = true;
            }
        }

        // Redirect the user if the session variable is not set or is equal to false
        if (!isset($_SESSION['formulaire_envoye']) || $_SESSION['formulaire_envoye'] !== true) {
            header('Location: ../../index.html');
            exit();
        } else {
            // Delete the session variable to avoid submitting the form a second time
            unset($_SESSION['formulaire_envoye']);
        }
        ?>

    </div>
    <script src="mail.js"></script>
</body>

</html>
