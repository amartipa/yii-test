<?php

class CountriesController extends Controller{

    
   
    
    public function actionIndex(){

        // $model = new Countries();
        // $model->name="Colombia";
        // $model->status=1;
        // $model->save();

        
        //COMPONTENTES
        //Yii::import("application.Test");//application es la carpeta protected
        // include(dirname(__FILE__)."/Test.php"); Esta es otra forma pero no usa el yii
        //include(Yii::getPathOfAlias("application")."/Test.php"); Esta es otra forma
        //$me = new Test();
        //echo $me->hi();

        //REQUEST
        //echo Yii::app()->happy->hi()."<br>"; Esto s un componente creado en la carpeta extensions
        //echo Yii::app()->happy->hi()."<br>";

        //Yii::app()->request->isAjaxRequest;//verifica si es una peticion ajax
        //Yii::app()->request->isPostRequest;//verifica si es una peticion post
        //Yii::app()->request->getPost("test","default");//$_POST["test"]
        //Yii::app()->request->getQuery("test","default");//$_GET["test"]
        //Yii::app()->request->getParam("test","default");//$_POST["test"] o $_GET["test"]

        //Yii::app()->request->baseUrl;//url base
        //Yii::app()->request->hostInfo;//host info
        //Yii::app()->request->pathInfo;//path info
        //Yii::app()->request->userHostAddress;//ip


        //USER
        //Yii::app()->user->isGuest;//verifica si el usuario es guest
        //Yii::app()->user->setFlash("error","mensaje");//crea una notificacion
        //Yii::app()->user->getFlashes;//obtiene todas las notificaciones
        //Yii::app()->user->id;//id del usuario
        //Yii::app()->user->setState("apellido","martinez");//crea una variable de session
        //Yii::app()->user->getState("apellido");//obtiene una variable de session
        //Yii::app()->user->hasState("apellido");//verifica si existe una variable de session
        //Yii::app()->user->login(UserIdentity,30*24*3600);//login
        //Yii::app()->user->logout();//logout
        //Yii::app()->user->checkAccess("admin");//verifica permisos

        //AUTHMANAGER
        //Yii::app()->authManager->createRole("admin");//crea rol
        //Yii::app()->authManager->assign("admin",1);//asigna rol
        //Yii::app()->authManager->getRoles();//obtiene roles
        //Yii::app()->authManager->getPermissions();//obtiene permisos

        //ROLES
        //Yii::app()->authManager->createRole("admin");//crea rol
        //Yii::app()->authManager->createRole("user");//crea rol
        //Yii::app()->authManager->assign("admin",1);//asigna rol
        //Yii::app()->authManager->assign("user",2);//asigna rol
        //Yii::app()->authManager->getRoles();//obtiene roles
        //Yii::app()->authManager->getPermissions();//obtiene permisos
        //get specific role from he loegged user
        //Yii::app()->authManager->getRolesByUser(Yii::app()->user->id);



        
        $countries=Countries::model()->findAll();
        $this->render("index",array("countries"=>$countries));

    }

    public function actionCreate(){
    
        $model = new Countries();

        if(isset($_POST["Countries"])){
            // $model->name=$_POST["Countries"]["name"];
            // $model->status=$_POST["Countries"]["status"];
            // $model->save();

            $model->attributes = $_POST["Countries"];

            if($model->save()){
                Yii::app()->user->setflash("success","Se inserto correctamente");
                $this->redirect(array("index"));
            }else{
                Yii::app()->user->setflash("error","Error al insertar");
            }
        }

        $this->render("create",array("model"=>$model));
        
    }

    public function actionUpdate($id){
       $model = Countries::model()->findByPk($id);
       if (isset($_POST["Countries"])) {

        $model->attributes = $_POST["Countries"];
        if ($model->save()) {

            Yii::app()->user->setflash("success","Se modificado correctamente");
            $this->redirect(array("index"));
        }else{
            Yii::app()->user->setflash("error","Error al modificar");
        }
       }

       $this->render("update",array("model"=>$model)); 
    }

    public function actionDelete($id){
        $model = Countries::model()->deleteByPk($id);
        $this->redirect(array("index"));
    }

    public function actionView($id){
        $model = Countries::model()->findByPk($id);

        $this->render("view",array("model"=>$model));
    }

    public function actionEnabled($id){
        $model = Countries::model()->findByPk($id);
        if($model->status==1){
            $model->status=0;
        }else{
            $model->status=1;
        }
        $model->save();
        $this->redirect(array("index"));
    }


    

}
