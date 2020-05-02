<?php
namespace App;

final class Fizzbuzz {

    function dividir ($numero) {

        $condiçaoDeFizz = 3;
        $condiçaoDeBuzz = 5;

        
        
        if ($numero % $condiçaoDeFizz == 0 AND $numero % $condiçaoDeBuzz == 0)
        {
            return "FizzBuzz";
        }

        if ($numero % $condiçaoDeFizz !=0 AND $numero % $condiçaoDeBuzz != 0)
        {
            return "Nao é divisivel";
        }

        if ($numero % $condiçaoDeFizz == 0)
        {
            return "Fizz";
        }

        if ($numero % $condiçaoDeBuzz == 0)
        {
            return "Buzz";
        }

    }

}