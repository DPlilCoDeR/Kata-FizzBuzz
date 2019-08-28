<?php

use FizzBuzz\Kata; // Usando el Archivo Kata para poder instanciar un objeto de la clase Kata
use PHPUnit\Framework\TestCase; // Usando la libreria de PHPUnit

class Katatest extends TestCase //El extends es para que Katatest pueda Heredar de TestCase
{
    function testDevuelveElNumeroSiNoEsDivisiblePorTresNiPorCinco () //1 : preparar escenario, 2:
    {   //Creo un "escenario" que seria preparar los elementos necesarios
        $num = 1;
        $objkata = new Kata(); //Instanciando un objeto de la clase Kata
        //Ejecuto el "escenario"
        $resultado = $objkata->devolverNumero($num);//EL objeto  Ejecuta la funcion que esta en la clase Kata
        //Comprobar assertion (afirmacion)
        $this->assertIsNumeric($resultado);
    }
    function testDevuelveFizzSiElNumeroEsDivisiblPorTres ()
    {   //define el escenario
        $num = 6;
        $expected = 'Fizz';
        $objkata = new Kata();
        //Ejecuto el escenario
        $fizz = $objkata->devolverNumero($num);
        //Comprobar assertion
        $this->assertEquals($expected, $fizz);
    }
    function testDevuelveBuzzSiElNumeroEsDivisiblePorCinco ()
    {
        $num = 10;
        $expected = 'Buzz';
        $objkata = new Kata();
        $buzz = $objkata->devolverNumero($num);
        $this->assertEquals($expected, $buzz);
    }
    function testDevuelveFizzBuzzSiElNumeroEsDivisibleEntreTresYCinco ()
    {
        $num = 15;
        $expected = 'FizzBuzz';
        $objkata = new Kata();
        $fizzbuzz = $objkata->devolverNumero($num);
        $this->assertEquals($expected, $fizzbuzz);
    }
    function testCompruebaQueDevuelveUnString()
    {
        $num = 15;
        $objkata = new Kata();
        $string = $objkata->devolverNumero($num);
        $this->assertIsString($string);
    }

}
