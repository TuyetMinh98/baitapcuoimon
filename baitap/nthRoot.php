
<?php

function NRoot($num, $n) { 
    if ($n<1) return 0; 
    if ($num<=0) return 0;
    if ($num<2) return 1; 
 
    $g=2; 

    while (bccomp(bcpow($g,$n),$num)==-1) { 
        $g=bcmul($g,"2"); 
    } 

    if (bccomp(bcpow($g,$n),$num)==0) { 
        return $g; 
    } 

    $og=$g; 
    $g=bcdiv($g,"2"); 
    $step=bcdiv(bcsub($og,$g),"2"); 
    $g=bcadd($g,$step); 

    // while step!=1 

    while (bccomp($step,"1")==1) { 
        $guess=bcpow($g,$n); 
        $step=bcdiv($step,"2"); 
        $comp=bccomp($guess,$num); 
        if ($comp==-1) { 
            $g=bcadd($g,$step); 
        } else if ($comp==1) { 
            $g=bcsub($g,$step); 
        } else { 
            return $g; 
        } 
    } 

    return $g; 
}

?>