<?php

function myFunction($v)
{
    if($v==="Dog")
    {
        return "Monkey";
    }
    return $v;
}

function myFunctionTwo($v)
{
    return $v * 5;
}

$a = array("Horse", "Dog", "Cat");
$b = range(1,5);
var_dump(array_map("myFunction", $a));
var_dump(array_map("myFunctionTwo", $b));