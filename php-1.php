<?php

class Pipeline
{
    function make(...$functions) {
        return function($param) use ($functions) {
            foreach ($functions as $func) {
                $param = $func($param);
            }
            return $param;
        };
    }
}

$pl = new Pipeline();
$Funkcja = $pl->make(function($var){return $var*3;}, function($var){return $var+1;}, function($var){return $var/2;});
echo $Funkcja(3);

?>