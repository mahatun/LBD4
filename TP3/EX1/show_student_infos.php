<?php
$stu =array(
    "Et123" => array( "Nom" => "AB", "Prenom" => "AC", "note"=> array("module1" => 1, "module2" => 13,"module3"=>10)),
    "Et676" => array( "Nom" => "BC", "Prenom" => "BD", "note"=> array("module1" => 11, "module2" => 15,"module3"=>19)),
    "Et998" => array( "Nom" => "CD", "Prenom" => "CE", "note"=> array("module1" => 19, "module2" => 18,"module3"=>17)),
    "Et764" => array( "Nom" => "DE", "Prenom" => "DF", "note"=> array("module1" => 10, "module2" => 12,"module3"=>17.5)),


);
?>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

<p class="lead" style="text-align: center; color:blueviolet">Welcome <?php echo $stu[$_POST["code"]]["Nom"]; ?><br></p>
<table class="table">
    <tr class="table-danger">
        <td>Name</td>
        <td><?php echo $stu[$_POST["code"]]["Nom"]; ?></td>
    </tr>
    
<?php 
$sum=0;
foreach($stu[$_POST["code"]]["note"] as $modu => $grade){
    $sum = $sum+$grade;
    echo '<tr class="table-info">';
    echo '<td>',$modu,'</td>';
    echo '<td>',$grade,'</td>';
    echo '</tr>';
    
    


}

?>
    <tr class="table-active">
        <td>Average</td>
        <td><?php echo $sum/3 ?></td>
    </tr>

</table>
</body>
</html>