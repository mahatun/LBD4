<?php
$capitales = array(
    "Maroc" => "Rabat",
    "Allemagne" => "Berlin",
    "Serbie" => "Belgrade",
    "Bresil" => "Brasilia",
    "Slovaquie" => "Bratislava",
    "Italie" => "Rome",
    "Venezuela" => "Caracas",
    "Moldavie" => "Chisinau",   
    "Guyana" => "Georgetown", 
    "Viêt Nam" => "Hanoï",  
    "Zimbabwe" => "Harare",
    "Cuba" => "La Havane",  
    "Pays-Bas" =>"  La Haye",
    "Finlande" => "Helsinki", 

);
foreach($capitales as $key => $value){
    echo "$key : $value <br/>";

}
echo '<table style="border: 1px solid black;">';
echo '<tr>
        <td style="border: 1px solid black;">Pays</td>
        <td style="border: 1px solid black;">Capitale</td>
    </tr>';
foreach($capitales as $key => $value){
    echo '<tr>';
    echo '<td  style="border: 1px solid black;">', $key ,'</td>';
    echo '<td  style="border: 1px solid black;">', $value,'</td>';
    
}
$want = "Maroc";
foreach($capitales as $key => $value){
    if ( $key == $want){
        echo 'The capital of ',$want,' is ',$value;

    }
    
}





?>