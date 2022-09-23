<h2>liste des Produits</h2>
<p><a href="<?= $view->path('addP') ?>">Ajouter un produit</a></p>
<p>Nombre de produits :
    <?= $count ?>
</p>
<section class=" produit">
    <table>
        <?php foreach ($produits as $produit) { ?>
        <thead>
            <th>titre</th>
            <th>reference</th>
            <th>description</th>
            <th>Afficher</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <td> <?= $produit->titre; ?></td>
            <td><?= $produit->reference; ?></td>
            <td><?= $produit->description; ?></td>
            <td> <a href="<?= $view->path('detailP', [$produit->id]); ?>">show</a></td>
            <td> <a href="<?= $view->path('editP', [$produit->id]); ?>">Edit</a></td>
            <td>
                <a onClick="return confirm ('do you realy want to delete this product')"
                    href="<?= $view->path('deleteP', [$produit->id]); ?>"> Delete</a>
            </td>
        </tbody>


        <?php
        } ?>
    </table>
</section>