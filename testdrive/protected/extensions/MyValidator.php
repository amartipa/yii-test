<?php 

class MyValidator extends CValidator
{
    public $word = 'word';
    public function validateAttribute($object, $attribute)
    {
        if($object->attribute=="test"){
            $this->addError($object, $attribute, 'error message');
        }
    }
}