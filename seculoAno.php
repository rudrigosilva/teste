<?php
$a = 1905;
$b = 1700;

    function seculoAno($ano){
    
        $seculo = ceil(($ano)/100) +1;
        echo "o seculo que esse ano está é ".$seculo -1  ;
    }
        
        echo seculoAno($a);
        echo seculoAno($b);


?>