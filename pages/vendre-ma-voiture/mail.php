<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Nous rachetons votre voiture à Toulouse et ses environs.
    Voiture particulière, collection, accidentée, en panne et utilitaire." />
    <title>Rachat de votre voiture à Toulouse et ses environs</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/icons/favicon-16x16.png">
    <link rel="manifest" href="../../assets/icons/site.webmanifest">
    <link rel="stylesheet" href="mail.css" />
</head>

<body>
    <div class="confirmation">
        <h1>Votre formulaire a bien été envoyé</h1>

        <!-- Placez le bloc de script JavaScript ici -->
        <script>
            // Fonction pour mettre à jour le compte à rebours
            function mettreAJourCompteARebours() {
                var compteARebours = document.getElementById("compteARebours");
                var secondesRestantes = document.getElementById("secondesRestantes");

                var secondes = parseInt(secondesRestantes.innerText);
                if (secondes > 0) {
                    secondesRestantes.innerText = secondes - 1;
                    setTimeout(mettreAJourCompteARebours, 1000); // Appeler la fonction toutes les 1 seconde
                } else {
                    // Rediriger l'utilisateur après 10 secondes (vous pouvez changer l'URL)
                    window.location.href = "../../index.html";
                }
            }

            // Démarrer le compte à rebours lorsque la page est chargée
            window.addEventListener("load", function() {
                setTimeout(mettreAJourCompteARebours, 1000); // Appeler la fonction toutes les 1 seconde
            });
        </script>
        <p id="compteARebours">Vous serez redirigé dans <span id="secondesRestantes"> 10</span> secondes...</p>
        <div class="previous">
            <a href="javascript:history.back()" class="retour">Retour</a>
        </div>

        <?php
        session_start();

        // Vérifier si le formulaire a été soumis et toutes les données sont présentes
        if (
            isset($_POST['nom'])
            && isset($_POST['prenom'])
            && isset($_POST['mail'])
            && isset($_POST['telephone'])
            && isset($_POST['marque'])
            && isset($_POST['annee'])
        ) {

            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From: ' . $_POST['mail'] . "\r\n";
            $entete .= 'Reply-to: ' . $_POST['mail'];

            $message = '<h2>Message envoyé depuis la page Vendre ma voiture de
            <a href="https://omaaar31.github.io/site-vitrine/">lesbourdettes.fr</a></h2>
            <p><b>Nom : </b>' . $_POST['nom'] . '<br>
            <b>Prénom : </b>' . $_POST['prenom'] . '<br>
            <p><b>Mail : </b>' . $_POST['mail'] . '<br>
            <b>Téléphone : </b>' . $_POST['telephone'] . '<br>
            <b>Marque : </b>' . $_POST['marque'] . '<br>
            <b>Année : </b>' . $_POST['annee'] . '<br>';

            $retour = mail('omarboulahbal@gmail.com', 'Envoi depuis page Vendre ma voiture', $message, $entete);

            // Si le formulaire a été soumis avec succès, enregistrez la soumission dans une variable de session
            if ($retour) {
                $_SESSION['formulaire_envoye'] = true;
            }
        }

        // Rediriger l'utilisateur si la variable de session n'est pas définie ou si elle est égale à false
        if (!isset($_SESSION['formulaire_envoye']) || $_SESSION['formulaire_envoye'] !== true) {
            header('Location: ../../index.html');
            exit();
        } else {
            unset($_SESSION['formulaire_envoye']);
            header('refresh:10;url=../../index.html');
            exit();
        }
        ?>

    </div>
</body>
</html>