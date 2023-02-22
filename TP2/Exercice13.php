<?php
$stu = array(
    "Et123" => array( "Nom" => "AB", "Prenom" => "AC", "Moyenne"=>17),
    "Et676" => array( "Nom" => "BC", "Prenom" => "BD", "Moyenne"=>1),
    "Et998" => array( "Nom" => "CD", "Prenom" => "CE", "Moyenne"=>19),
    "Et764" => array( "Nom" => "DE", "Prenom" => "DF", "Moyenne"=>16.5),

);
foreach ($stu as $code => $infos){
    echo $code,':<br/>';
    foreach($infos as $what => $values){
        echo $what,':',$values,'/<br/>';
    }
}
$max = $stu["Et123"]["Moyenne"];

$whoN =  $stu["Et123"]["Nom"];
$whoP =  $stu["Et123"]["Prenom"];

foreach ($stu as $code => $infos){
    
    foreach($infos as $what => $values){
        
        if ($what == "Moyenne"){
            if($max < $infos["Moyenne"]){
                $max = $infos["Moyenne"];
                $whoN = $infos["Nom"];
                $whoP =  $infos["Prenom"];
            }
        }  
    }
}
echo "Max is $max, Name: $whoN, Prenom: $whoP <br/>";
$min = $stu["Et123"]["Moyenne"];

$whoM=  $stu["Et123"]["Nom"];
$whoS =  $stu["Et123"]["Prenom"];

foreach ($stu as $code => $infos){
    
    foreach($infos as $what => $values){
        
        if ($what == "Moyenne"){
            if($infos["Moyenne"] < $min  && $infos["Moyenne"] >=10 ){
                $min = $infos["Moyenne"];
                $whoM = $infos["Nom"];
                $whoS =  $infos["Prenom"];
            }
        }  
    }
}
echo "Min is $min, Name: $whoM, Prenom: $whoS <br/>";
echo "List of students who did't pass the year: <br/>";
foreach ($stu as $code => $infos){
    
    foreach($infos as $what => $values){
        
        if ($what == "Moyenne"){
            if($infos["Moyenne"] < 10){
                echo 'Name:',$infos["Nom"].',Prenom: ', $infos["Prenom"],' failed with the grade: ',$infos["Moyenne"],'<br/>';
                
            }
        }  
    }
}

?>