<?php
function test_filter($var)
{
    return($var > 3);
}

$a1=array(1,2,3,4,5,6);
print_r(array_filter($a1,"test_filter"));
?>