<?php
$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 
'Octobre', 'Novembre', 'Décembre'); 
foreach($moisFr as $key => $val){
    echo $key,'-',$val,'<br/>';
    
}
$len = count($moisFr);
for ($i=1; $i<=$len;$i++){
    echo $i,'-',$moisFr[$i],'<br/>';
}

echo 'We are in the month: ',$moisFr[date('m')[1]],'<br/>';
echo 'Other way to show the month using intval: ',$moisFr[intval(date('m'))],'<br/>';
echo 'Trying 13=> Juillet:<br/>';
$moisFr[13]="Juillet";
$newlen = count($moisFr);
for ($i=1; $i<=$newlen;$i++){
    echo $i,'-',$moisFr[$i],'<br/>';
}
?>