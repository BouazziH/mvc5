<div class="editPoduit">
    <form action="" method="post" novalidate>
        <?php echo $form->label('titre'); ?>
        <?php echo $form->input('titre','text',$produit->titre); ?>
        <?php echo $form->error('titre'); ?>

        <?php echo $form->label('reference'); ?>
        <?php echo $form->input('reference','text',$produit->reference); ?>
        <?php echo $form->error('reference'); ?>

        <?php echo $form->label('description'); ?>
        <?php echo $form->input('description','textarea',$produit->description); ?>
        <?php echo $form->error('description'); ?>



        <?php echo $form->submit(); ?>

    </form>
</div>