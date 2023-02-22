<?php

$arra = array(9,7,21,0,2,10,1);
$in = $arra;
/*
var_dump($in);

foreach( $in as $int){
    echo $int.'<b>-</b>';
}
*/
$len = count($arra);
echo "<br/> Value of count ",$len,"<br/>";

for($i=0;$i < $len; $i++){
    
    for ($j = 0; $j <$len; $j++){
        if ($in[$i] < $in[$j]){
            
            $inte=$in[$i];
            $in[$i]=$in[$j];
            $in[$j] = $inte; 
        }

    }
    
    }

foreach( $in as $in){
    echo $in.'<b>-</b>';
}
$doub = array (1,2,2,3,3,3,4,5,5,22,1,0,22);
$lent = count($doub);
$simple = array();

for($i=0;$i < $lent; $i++){

            if (!in_array($doub[$i],$simple)){
                array_push($simple, $doub[$i]);
            }
        }
    
     
    
var_dump($simple);


?>