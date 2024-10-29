<?php

class Countries extends CActiveRecord{

    public static function model($ClassName = __CLASS__){
        return parent::model($ClassName);
    }

    public function tableName(){

        return 'tbl_countries';

    }

    public function rules(){

        return array(
            array("name,status","required"),
        );
    }
}