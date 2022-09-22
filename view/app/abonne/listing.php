<h2>liste des abonnées</h2>
<p><a href="<?= $view->path('add') ?>">Ajouter un abonné</a></p>
<p>Nombre d'abonnées :
    <?= $count ?>
</p>
<section class=" abonne">
    <table>
        <?php foreach ($abonnes as $abonne) { ?>
        <thead>
            <th>nom</th>
            <th>prenom</th>
            <th>age</th>
            <th>Afficher</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <td> <?= $abonne->nom; ?></td>
            <td><?= $abonne->prenom; ?></td>
            <td><?= $abonne->age; ?></td>
            <td> <a href="<?= $view->path('detail', [$abonne->id]); ?>">show</a></td>
            <td> <a href="<?= $view->path('edit', [$abonne->id]); ?>">Edit</a></td>
            <td>
                <a onClick="return confirm ('do you realy want to delete this persone')"
                    href="<?= $view->path('delete', [$abonne->id]); ?>"> Delete</a>
            </td>
        </tbody>


        <?php
        } ?>
    </table>
</section>