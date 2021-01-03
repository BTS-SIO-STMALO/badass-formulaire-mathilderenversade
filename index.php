<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 

if(empty($_POST)) {
    echo "Aucune donnée transmise";
} else {

    echo "Bonjour " . $_POST["prenom"]."<br>";
    echo $_POST["nom"] ." est vraiment un nom charmant";
        if ($_POST["civilite"] == 2){
            echo "<br>Vous êtes un homme";
        }else {
            echo "<br> Vous êtes une femme";
        }
    if(!empty($_POST["info"])) {
        echo "<br>Vous avez bien vérifié vos informations et coché la case correspondante !";
    } else {
        echo "<br>Vous n'avez pas coché la case !!!";
    }
}
?>
<main class="right">
    <h2 class="right__title">Contact</h2>
    <section id="contact">
        <form id="form" action="" method="post">
            <fieldset>
                <legend>Identité</legend>
                <div class="form-row">
                    <label>Je suis</label>
                    <div class="input-group">
                        <input type="radio" name="civilite" value="1" checked>
                        <span>une femme /</span>
                        <input type="radio" name="civilite" value="2">
                        <span>un homme</span>
                    </div>
                </div>
                <div class="form-row">
                    <label for="password">Mot de passe </label>
                    <input type="password" id="password" placeholder="password" name="password" required>
                </div>
                <div class="form-row">
                    <label for="prenom">Mon prénom </label>
                    <input type="text" id="prenom" placeholder="Prenom" name="prenom" required>
                </div>
                <div class="form-row">
                    <label for="nom">Mon nom</label>
                    <input type="text" id="nom" placeholder="Nom" name="nom">
                </div>
                <div class="form-row">
                    <label for="source">J'ai connu ce site grâce à </label>
                    <select id="source" name="source">
                        <option value="">choisir</option>
                        <option value="fb">Facebook</option>
                        <option value="twitter">Twitter</option>
                        <option value="google">Google</option>
                        <option value="bouche-a-oreilles">Bouche à oreilles</option>
                        <option value="jpp">Ma maman m'en a parlé</option>
                        <option value="jpp">Mon chien</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
            </fieldset>
            <fieldset>
                <legend>Message</legend>
                <div class="form-row">
                    <label for="email">Pour me contacter, mon adresse mail</label>
                    <input type="email" id="email" placeholder="Adresse e-mail" name="email">
                </div>
                <div class="form-row">
                    <label for="message">Le message que je veux vous faire passer</label>
                    <textarea id="message" placeholder="Votre message" name="message"></textarea>
                </div>
                <div class="form-row">
                    <label for="file">Voici un document pour mieux comprendre</label>
                    <input type="file" id="file" name="file">
                </div>
            </fieldset>
            <fieldset>
                <div class="form-row">
                    <label for="info">Ces informations sont vraies et vérifiées</label>
                    <input id="info" type="checkbox" name="info" value="1">
                </div>
            </fieldset>
            <button id="submit-form" type="submit">Envoyer</button>
        </form>
    </section>
</main>
</body>
</html>