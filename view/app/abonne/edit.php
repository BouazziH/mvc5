<div class="editAbonne">
    <form action="" method="post" novalidate>
        <?php echo $form->label('nom'); ?>
        <?php echo $form->input('nom','text',$abonne->nom); ?>
        <?php echo $form->error('nom'); ?>

        <?php echo $form->label('prenom'); ?>
        <?php echo $form->input('prenom','text',$abonne->prenom); ?>
        <?php echo $form->error('prenom'); ?>

        <?php echo $form->label('email'); ?>
        <?php echo $form->input('email','email',$abonne->email); ?>
        <?php echo $form->error('email'); ?>

        <?php echo $form->label('age'); ?>
        <?php echo $form->input('age','number',$abonne->age); ?>
        <?php echo $form->error('age'); ?>

        <?php echo $form->submit(); ?>

    </form>
</div>