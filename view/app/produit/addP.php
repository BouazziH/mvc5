<div class="ajouterP">
    <form action="" method="post" novalidate>

        <?= $form->label('titre');?>
        <?= $form->input('titre');?>
        <?= $form->error('titre');?>

        <?= $form->label('reference');?>
        <?= $form->input('reference');?>
        <?= $form->error('reference');?>




        <?= $form->label('description');?>
        <?= $form->textarea('description');?>
        <?= $form->error('description');?>



        <?= $form->submit();?>

    </form>
</div>