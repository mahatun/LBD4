<?php
$people = array(
    "Ahmed" => 14,
    "Joudia" => 19,
    "Samir" => 14,
    "Yasser" => 14.5,
    "Aya" => 12,
    "Ilham" => 16,
    "Yassine" => 17,
);
foreach ($people as $key => $value){
    echo "Nom: $key, note = $value <br/>";

}
$max = $people["Ahmed"];
$nom="";
foreach ($people as $key => $value){
    if ($max < $value){
        $max=$value;
        $nom = $key;
    }
    
    
    
}
echo 'The student with the highest mark (',$max,') is ',$nom,'<br/>';
$min = $people["Ahmed"];
$nom2="";
foreach ($people as $key => $value){
    if ($value < $min){
        $min=$value;
        $nom2 = $key;
    }
    
}
echo 'The student with the lowest mark (',$min,') is ',$nom2,'<br/>';
$sum=0;
$number = count($people);
foreach ($people as $key => $value){
    $sum = $sum + $value;

}
echo 'The mean is:' ,$sum/$number;
?>
<html>`
    <table>
        <tr>
            <td style="border: 1px solid black;">Clef</td>
            <td style="border: 1px solid black;">Valeur</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Ahmed</td>
            <td style="border: 1px solid black;">14</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Joudia</td>
            <td style="border: 1px solid black;">19</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Samir</td>
            <td style="border: 1px solid black;">14</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Yasser</td>
            <td style="border: 1px solid black;">14.5</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Aya</td>
            <td style="border: 1px solid black;">12</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Ilham</td>
            <td style="border: 1px solid black;">16</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Yassine</td>
            <td style="border: 1px solid black;">17</td>
        </tr>
        

    </table>
</html>