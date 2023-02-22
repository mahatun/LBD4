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
echo 'Without taking rating into consideration:<br/>';
foreach ($ev as $key => $value){
    echo $key,':<br/>';
    foreach($value as $key2 => $value2){
        foreach($value2 as $key3 => $value3){
            $rate = strlen($value3);
            echo $key3,',<br/>';

        }

    }

}
?>