
<?php
$people = array(
    "Ahmed" => 34,
    "Maha " => 19,
    "Hajar " => 23,

);

foreach( $people as $key => $value){
    echo $key,' a ',$value,'<br/>';
}
echo '<table style="border:1px solid black;">';
echo '<tr >
        <td style="border:1px solid black;">Nom</td>
        <td style="border:1px solid black;">Age</td>
    </tr>';
foreach( $people as $key => $value){
        echo '<tr>';
        echo '   <td style="border:1px solid black;">',$key,'</td>';
        echo '   <td style="border:1px solid black;">',$value,'</td>';
        echo '<tr/>';

}
echo '</table>';

?>