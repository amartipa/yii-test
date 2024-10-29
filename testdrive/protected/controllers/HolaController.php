<?php

class Holacontroller extends CController
{
    public function actionIndex()
    {
        $model=Users::model()->findAll();
        $mensaje = "Aplicacion de prueba";
        $this->render('index', array("model"=>$model, "mensaje"=>$mensaje));
    }
}