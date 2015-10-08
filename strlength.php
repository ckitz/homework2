<?php

$str ="Hi my name is";

$strlen=strlen($str);

for($i = 0; $i <= $strlen; $i++)
{
	$char =substr($str,$i,1);
}

print $strlen;

class stringbeans{
function stringbeans($string)
{
    $count = 0;
    for($i=0; $i<66000; $i++)
    {
       if(@$string[$i] != "")$count++;
       else break;
    }
    return $count;
}
}

$string="Waaaadup";
new string=$string;
print_r $string;

?>