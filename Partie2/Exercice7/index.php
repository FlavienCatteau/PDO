<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>PDO Exercice 7 Partie 1</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">PDO Exercice 7 Partie 1</h1>
                <p class="lead text-center">Exercice 7 : Afficher tous les clients comme ceci :</p>
                <ul>
                  <li>Nom : Nom de famille du client</li>
                  <li>Prénom : Prénom du client</li>
                  <li>Date de naissance : Date de naissance du client</li>
                  <li>Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</li>
                  <li>Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</li>
                </ul>
            </div>
            <div class="text-center">
                <a href="../exercice1P1PDO/index.php" class="btn btn-secondary">Exo1</a>
                <a href="../Exercice2/index.php" class="btn btn-secondary">Exo2</a>
                <a href="../Exercice3/index.php" class="btn btn-secondary">Exo3</a>
                <a href="../Exercice4/index.php" class="btn btn-secondary">Exo4</a>
                <a href="../Exercice5/index.php" class="btn btn-secondary">Exo5</a>
                <a href="../Exercice6/index.php" class="btn btn-secondary">Exo6</a>
                <a href="../Exercice7/index.php" class="btn btn-secondary">Exo7</a>
            </div>
        </header>
        <main>
            <div class="text-center">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8','flavien','Gwendo80135#');
                $customers = $bdd->query('SELECT * FROM clients');
                while ($data = $customers->fetch())
                {
                ?>
                    <p>Nom : <?= $data['lastName'] ?></p>
                    <p>Prénom : <?= $data['firstName'] ?></p>
                    <p>Date de naissance : <?= $data['birthDate'] ?></p>
                    <p>Carte : <?= $result = ($data['card'] == 1) ? 'Oui' : 'Non' ?></p>
                <?php
                  if($data['card'] == 1){
                ?>
                    <p>Numéro de carte : <?= $data['cardNumber'] ?></p>
                <?php
                  }
                ?>
                <?php
                  }
                ?>
            </div>
        </main>
    </body>
</html>