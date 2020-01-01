<?php

function isequal($str) 
{ 
    $n = strlen($str); 
    $chu ='';
    $num = 0; 
    $t = 1; 
    $i = $n - 1; 
	$temp="";
    for ($i = $n - 1; $i >= 0; $i--)  
    { 
        if ('0' <= $str[$i] &&  $str[$i] <= '9')  
        { 
            $num = ($str[$i] - '0') * $t + $num; 
            $t = $t * 10; 
            //if($num > $n) 
                //echo $num;
              //  echo '<br>';
        } 
    } 
    for ($i = 0; $i < strlen($str); $i++)  
    {
        if ('a' <= $str[$i] &&  $str[$i] <= 'z')
        {
			$temp.=$str[$i];
            
        }
    }
	return $temp;

  
} 

?> 
