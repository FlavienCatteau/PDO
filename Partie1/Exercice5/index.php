<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>PDO Exercice 5 Partie 1</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">PDO Exercice 5 Partie 1</h1>
                <p class="lead text-center">Exercice 5 : Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :</p>
                <ul>
                  <li>Nom : Nom du client</li>
                  <li>Prénom : Prénom du client</li>
                </ul>
                <p class="lead text-center">Trier les noms par ordre alphabétique.</p>
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
                      $sql  = 'SELECT `lastName`, `firstName` FROM clients WHERE lastName LIKE \'M%\' ORDER BY 1';
                      $customers = $bdd->query($sql); // On appelle le nom et le prénom des clients, on limite à 20 (donc les noms des 20 premiers clients)
                      if ($customers->execute()){
                          $customersList = $customers->fetchAll(PDO::FETCH_ASSOC);
                      }
                      foreach ($customersList as $customer)
                      {
                    ?>
                    <p>Nom : <?= $customer['lastName'] ?></p>
                    <p>Prénom : <?= $customer['firstName'] ?></p>
                    <?php
                      }
                    ?>
            </div>
        </main>
    </body>
</html>