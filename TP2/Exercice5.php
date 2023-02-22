<html>
<link rel="stylesheet" href="Exercice5.css">
<div class="big">
    Tableau
    <div class="small">
        <div class="first">
        
            <div class= "yellow"></div>
            <div class="blue"></div>
            <div class="red"></div>
           <div class="purple"></div>
            <div class = "black"></div>

        </div>
        <div class="second">
            <div class= "orange"></div>
            <div class="cian"></div>
            <div class="aqua"></div>
            <div class="bisque"></div>
            <div class = "blueviolet"></div>
        </div>
            

    </div>
</div>
    
    
</html>

<?php
$colors = array("yellow","blue","red","purple","black","orange","cian","aqua","bisque","blueviolet");
echo '
    
<div class="big">
    Tableau
    <div class="small">
        <div class="first">
        
            <div class= "yellow"></div>
            <div class="blue"></div>
            <div class="red"></div>
           <div class="purple"></div>
            <div class = "black"></div>

        </div>
        <div class="second">
            <div class= "orange"></div>
            <div class="cian"></div>
            <div class="aqua"></div>
            <div class="bisque"></div>
            <div class = "blueviolet"></div>
        </div>
            

    </div>
</div>';
$len = count($colors);
$c = 0;

if (in_array("green",$colors) ){
    echo 'The color exists <br/>';
}
else{
    echo 'Color does not exist <br/>';

}
echo 'Other way: <br/> ';
if ( array_search("red",$colors) == null){
    echo 'Color does not exist <br/>';

}
else{
    echo 'The color exists <br/>';

}
    
    

?>