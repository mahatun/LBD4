<?php
$arra = array(9,7,21,0,2,10,1);
$in = $arra;

$len = count($arra);
echo 'Tableau avant: <br/>';
var_dump($in);



for($i=0;$i < $len; $i++){
    
    for ($j = 0; $j <$len; $j++){
        if ($in[$i] < $in[$j]){
            
            $inte=$in[$i];
            $in[$i]=$in[$j];
            $in[$j] = $inte; 
        }

    }
    
    }
$other = array(0,0,0,0,0,0,0);
for($i=$len-1;$i >=0; $i--){
    
    $other[$len-1-$i] = $in[$i];
    
    
    
    }
echo 'Tableau apres: <br/>';
var_dump($other);


?>