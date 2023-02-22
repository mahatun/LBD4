<?php
$note = array(1, 20, 17, 8, 10, 11, 15);
echo '1-<br/>';
$len = count($note);
for ($i=0; $i<$len;$i++){
    echo $note[$i],', ';
}
echo '<br/>';
echo '2-<br/>';
function mean ($tab){
    $lenght = count($tab);
    $sum = 0;
    for ($i=0; $i<$lenght;$i++){
        $sum = $sum + $tab[$i];
        
    }
    return $sum/$lenght;

}
echo 'The mean is: ',mean($note),'<br/>';
echo '3-<br/>';
function numVal ($tab){
    $lenght = count($tab);
    $count = 0;
    for ($i=0; $i<$lenght;$i++){
        if ($tab[$i] > 10){
            $count = $count +1;
        }
        
    }
    return $count;


}
echo 'The number of students who got above 10: ',numVal($note),'<br/>';
echo '4-<br/>';
function numPerf ($tab){
    $lenght = count($tab);
    $count = 0;
    for ($i=0; $i<$lenght;$i++){
        if ($tab[$i] == 20){
            $count = $count +1;
        }
        
    }
    return $count;


}
echo 'The number of students who got above 20: ',numPerf($note),'<br/>';
echo '5-<br/>';
function sortn($tab){
    $len = count($tab);

    for($i=0;$i < $len; $i++){
    
        for ($j = 0; $j <$len; $j++){
            if ($tab[$i] < $tab[$j]){
            
                $inte=$tab[$i];
                $tab[$i]=$tab[$j];
                $tab[$j] = $inte; 
        }

    }
    
    
    }   
    foreach( $tab as $in){
        echo $in.'<b>-</b>';
    }
}
echo 'Grades sorted are: ';
sortn($note);
echo '<br/>';

echo '6-<br/>';
function find($tab,$val){
    $len = count($tab);
    $c = 0;
    
    for($i=0;$i<$len;$i++){
        if ($tab[$i] == $val){
            $c = $i;

            
            
        }
        

        
    }
    if ( $c != 0 ){
        echo 'La valeur existe, son indice est ',$c,'<br/>';

    }
    else{
        echo 'Value not found <br/>';

    }
    
    
}
echo "Let's try searching 2 for example:";
find($note,2);
echo "Let's try searching 10 for example:";
find($note,10);

?>