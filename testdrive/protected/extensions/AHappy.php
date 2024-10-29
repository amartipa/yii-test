<?php

class AHappy extends CApplicationComponent{

    
    public $trato;
    public function init(){
        echo "Inicializando";
    }

    public function hi(){
        if($this->trato===null){
            return "Hola mundo!";
        }else if($this->trato==1){
            return "Hola compa!";
        }
    }
}