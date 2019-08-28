<?php

namespace FizzBuzz; //Apellido especifico

class Kata 
{
    function devolverNumero($num) //Funcion que ejecuta la logica
    {   
        $divisor3 = 3;
        $divisor5 = 5;
        $fizz = 'Fizz';
        $buzz = 'Buzz';
        $fizzbuzz = 'FizzBuzz' ;

        if ($num % $divisor3 == 0 and $num % $divisor5 == 0)
        {
            return $fizzbuzz;
        }
        if ($num % $divisor5 == 0)
        {
            return $buzz;
        }
        if ($num % $divisor3 == 0) 
        {
            return $fizz;
            
        }
        return $num;
    }
}