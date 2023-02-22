<?php
$numbers = array(2,3,4,5,6,7,8,9,10);
echo '<table style="border: 1px solid black;">';
echo '<tr>
<td style="border: 1px solid black;"></td>
<td style="border: 1px solid black;">2</td>
<td style="border: 1px solid black;">3</td>
<td style="border: 1px solid black;">4</td>
<td style="border: 1px solid black;">5</td>
<td style="border: 1px solid black;">6</td>
<td style="border: 1px solid black;">7</td>
<td style="border: 1px solid black;">8</td>

<td style="border: 1px solid black;">9</td>
<td style="border: 1px solid black;">10</td>
</tr>';
$len = count($numbers);
for ($i=0; $i<$len;$i++){
    echo '<tr>';
    echo '<td style="border: 1px solid black;">',$numbers[$i],'</td>';
    for($j=0;$j<$len;$j++){
        echo '<td style="border: 1px solid black;">',$numbers[$i]*$numbers[$j],'</td>';
    }
}





?>
