<?php

namespace Faker\Provider\bn_BD;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    static $operatorPrefix = ['+88019','+88017','+88016','+88015','+88018'];
        
    public function phoneNumber()
    {
        $number = static::$operatorPrefix[rand(0, count(static::$operatorPrefix)-1)];
        $number .= static::randomNumber(8);

        return Utils::getBanglaNumber($number);
    }
}
