<?php
// wazyft al class dah any adylo al name o al valur o hwa yshyk lo al 7aga aly mab3ota dyh sa7 2o 8alt
//for each aly gawa al class htlaf 3la kol rule o t3ml mnaha object o b3d lama t3ml al object hanshof lo fy error y3ml push fy al errors array aly 3ndna

class Validator
{
    private $errors = [];
    //wazyft array al rules hya an ana abasy al rules aly m7tagha ll function o hya tshof ah al rule o t3ml create ll object o b3d kda lo fyh errors t3ml push fy array al errors

    public function validate(string $name , $value , array $rules) 
    {
        foreach($rules as $rule) {
            // dah a5tsar 3lasahn asm al classes zy asm al objects aly a7na 3mlnaha f3lashan kda ana a5t al $obj o sawatw bl asm al rule

            $obj = new $rule;

            // if($rule == "required") {
            //     $obj = new Required;
               
            // } elseif ($rule == "numeric") {
            //     $obj = new Numeric;
               
            // } elseif ($rule == "max") {
            //     $obj = new Max;
               
            // } elseif ($rule == "email") {
            //     $obj = new Email;
               
            // };

            //hn3ml al error property 3lashan al function dyh lo rg33t ay error n3ml push 3latol fy array al errors 
            $error = $obj->check($name  , $value); 
                if($error !== false) {
                    $this->errors[] = $error;
                    break; 
                }
            }
    }

    //function 3lashan ngyb al errors lo fyh mshakel fyh 

    public function getErrors() 
    {
        return $this->errors;
    }

    public function hasErrors() 
    {
        return ! empty($this->errors);
    }
}
    



?>