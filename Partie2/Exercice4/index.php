<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>PDO Exercice 4 Partie 1</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">PDO Exercice 4 Partie 1</h1>
                <p class="lead text-center">Exercice 4 : N'afficher que les clients possédant une carte de fidélité.</p>
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
                  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8','flavien','Gwendo80135#'); // On crée un nouvel objet PDO('Localisation du serveur mysql, nom de la base de donnée, identifiant, mot de passe')
                  $fidelityCardCustomers = $bdd->query('SELECT lastName,firstName,card FROM clients HAVING card'); // On appelle les colonnes nom, prénom et carte de la table client puis on sélectionne uniquement les clients qui ont une carte.
                  while ($data = $fidelityCardCustomers->fetch())
                  {
                ?>
                <p><?= $data['firstName'] . ' ' . $data['lastName'] ?></p>
                <?php
                  }
                ?>
            </div>
        </main>
    </body>
</html>