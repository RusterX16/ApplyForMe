<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet"/>
    <title>ApplyForMe</title>
</head>
<body>
<header>

</header>
<main>
    <form class="flex-column center" action="index.php?action=generate" method="post">
        <div class="flex-row evenly">
            <div class="flex-column evenly">
                <h3>Expéditeur</h3>
                <div class="flex-row between align-item-center">
                    <label for="name">Nom</label>
                    <input id="name" name="name" type="text">
                </div>
                <div class="flex-row between align-item-center">
                    <label for="address-sender">Adresse</label>
                    <input id="address-sender" name="address-sender" type="text">
                </div>
                <div class="flex-row between align-item-center">
                    <label for="code-sender">Code Postal</label>
                    <input id="code-sender" name="code-sender" type="number" pattern="/\b\d{5}\b/g">
                </div>
                <div class="flex-row between align-item-center">
                    <label for="city-sender">Ville</label>
                    <input id="city-sender" name="city-sender" type="text"/>
                </div>
                <div class="flex-row between align-item-center">
                    <label for="mail">Email</label>
                    <input id="mail" name="email" type="email"/>
                </div>
                <div class="flex-row between align-item-center">
                    <label for="phone">Téléphone</label>
                    <input id="phone" name="phone" type="number"
                           pattern="^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$"/>
                </div>
            </div>
            <div>
                <h3>Destinataire</h3>
                <div class="flex-row between align-item-center">
                    <label for="company">Entreprise</label>
                    <input id="company" name="company" type="text">
                </div>
                <div class="flex-row between align-item-center">
                    <label for="address">Adresse</label>
                    <input id="address" name="address" type="text">
                </div>
                <div class="flex-row between align-item-center">
                    <label for="code">Code Postal</label>
                    <input id="code" name="code" type="number" pattern="/\b\d{5}\b/g">
                </div>
                <div class="flex-row between align-item-center">
                    <label for="city">Ville</label>
                    <input id="city" name="city" type="text">
                </div>
            </div>
        </div>
        <div class="flex-column" style="margin: auto">
            <div class="flex-row between align-item-center">
                <label for="subject">Objet</label>
                <input id="subject" name="subject" type="text"/>
            </div>
            <div class="flex-column between align-item-center">
                <label for="core">Core de lettre</label>
                <input id="core" name="core" type="file" accept="text/*,.txt,.doc,.docx,.odt">
            </div>
            <div style="margin: auto;">
                <input type="submit" value="Générer">
            </div>
        </div>
    </form>
</main>
<footer>

</footer>
</body>
</html>