<?php

namespace FizzBuzz; //Apellido especifico

class Kata 
{   
        private $divisor3 = 3;
        private $divisor5 = 5;
        private $fizz = 'Fizz';
        private $buzz = 'Buzz';
        private $fizzbuzz = 'FizzBuzz';
    function devolverNumero($num) //Funcion que ejecuta la logica
    {   
        
        if ($num % $this->divisor3 == 0 and $num % $this->divisor5 == 0)
        {
            return $this->fizzbuzz;
        }
        if ($num % $this->divisor5 == 0)
        {
            return $this->buzz;
        }
        if ($num % $this->divisor3 == 0) 
        {
            return $this->fizz;
        }
        return $num;
    }
}