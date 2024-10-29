<h1>Create countries</h1>

<?php $form=$this->beginWidget('CActiveForm'); ?>   
<b>Nombre</b><br>
<?php echo $form->textField($model,"name");?>
<?php echo $form->error($model,"name");?>
<br>
<b>Status</b><br>
<?php echo $form->textField($model,"status");?>
<?php echo $form->error($model,"status");?>
<br><br>
<?php echo CHtml::submitButton('Crear',array('class'=>'btn btn-primary')); ?>
<?php $this->endWidget(); ?>