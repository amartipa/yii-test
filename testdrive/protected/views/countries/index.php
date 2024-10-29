<h1>Countries</h1>
<?php echo CHtml::link('Crear',array('create'));?>
<?php foreach($countries as $country) : ?>
    <h3><?php echo $country->name;?><small><?php echo $country->status==1?" Enabled":" Disabled";?></small>
        <a href="<?php echo $this->createUrl('enabled',array('id'=>$country->id));?>">
            <span class="label label-<?php echo $country->status==1?"success":"warning";?>">
                <?php echo $country->status==1?"Enabled":"Disabled";?>
            </span>
        </a>
    </h3>
    <?php echo CHtml::link('Actualizar ',array('update','id'=>$country->id));?>
    <?php echo CHtml::link('| Borrar',array('delete','id'=>$country->id),array('confirm'=>'Estas seguro?' ));?>
    <?php echo CHtml::link('| Ver',array('view','id'=>$country->id));?>

    <p>_______________</p>
<?php endforeach; ?>