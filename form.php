<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>
    <form action="/thanks.php" method="post">
        <div>
            <div>
                <label for="prénom">Prénom :</label>
                <input type="text" id="prénom" name="user_firstname" required>
            </div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name" required>
        </div>
        <div>
            <label for="sujet">Choisissez un sujet :</label>
            <select name="subject" id="sujet" required>
                <option value="pauvreté">La pauvreté dans le monde</option>
                <option value="climat">Le réchauffement climatique</option>
                <option value="data">La surveillance de masse</option>
                <option value="corruption">La corruption des gouvernements</option>
            </select>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_mail" required>
        </div>
        <div>
            <label for="phone">Entrez votre numéro de téléphone :</label>
            <input type="tel" id="phone" name="user_phone" minlength="10" maxlength="10" pattern="[0-9]{10}" required />
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit" name="submit">Envoyer votre message</button>
        </div>
    </form>


</body>

</html>