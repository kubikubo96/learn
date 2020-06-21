<?php
function myFunction($value,$key)
{
    echo "<h1>" . $key . ' => ' . $value . "</h1>";
}
$a=array("a"=>1,"b"=>2,3);
array_walk($a,"myFunction");
?>