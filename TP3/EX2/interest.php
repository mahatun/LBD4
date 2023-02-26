<?php

$ev = array(
    "WEB" => array(
        "PHP" => array(
            "https://www.php.net/" => "*****",
        ),
        "HTML" => array(
            "https://www.w3schools.com/html/default.asp" => "****",
        ),
        "JavaScript" => array(
            "https://www.javascript.com/" => "**",
        ),
        "CSS" => array(
            "https://www.w3schools.com/css/ " => "****",
        ),
    ),
    "DB" => array(
        "MySQL" => array(
            "https://www.mysql.com/ " => "*****",
        ),
        "PostgreSQL" => array(
            "https://www.postgresql.org/ " => "*****",
        ),
        "Oracle" => array(
            "https://www.oracle.com/ " => "****",
        ),
        "DB2" => array(
            "https://www.ibm.com/products/db2 " => "****",
        ),
    ),

);

?>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <table class="table">
        <tr>
            <th>Language</th>
            <th>WEB Site</th>
            <th>Rating</th>
        </tr>
        <?php
        foreach($ev[$_POST["int"]] as $prob => $arr){
            echo '<tr>';
            echo '<td>',$prob,'</td>';
            foreach ($arr as $web => $rate){
                echo  '<td>',$web,'</td>';
                echo '<td>',$rate,'</td>';

            }
            
            echo '</tr>';
        }
        ?>

    </table>
</html>