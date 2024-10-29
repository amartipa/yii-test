<h1>ESTA APLICACION ES <?php echo $mensaje;?></h1>

<?php foreach ($model as $data): ?>
    <h1>
        <?php echo $data->username; ?>
    </h1>
<?php endforeach; ?>