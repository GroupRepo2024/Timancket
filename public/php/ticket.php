<?php
include 'header.php';

require_once('config.php');
$requete = $bdd->query('SELECT id, titre, description, priorite FROM ticket;');
$requete->execute();
$resultats = $requete->fetchAll();
?>

<div class="container">
    <h2 class="mb-4 mt-5">Liste des tickets</h2>

    <table class="table table-hover table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Priorité</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            // On affiche chaque recette une à une
            foreach ($resultats as $res) {
            ?>
                <tr>
                    <th scope="row"><?php echo $res['id']; ?></th>
                    <td><?php echo $res['titre']; ?></td>
                    <td><?php echo $res['description']; ?></td>
                    <td><?php echo $res['priorite']; ?></td>
                </tr>
                <!-- <tr>
                <th scope="row">2</th>
                <td>retirer la carte</td>
                <td>Retirer la carte seulement sur la page de connexion</td>
                <td>difficile</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bug</td>
                <td>Impossible d'accéder la page d'accueil, car chargement sans arrêt</td>
                <td>moyen</td>
            </tr> -->
            <?php } ?>
        </tbody>
    </table>
</div>