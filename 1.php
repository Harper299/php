<?php 
function row_sum($arr, $m, $n) { 
    echo "<br> Sum of each row:<br>"; 
    for ($i = 0; $i < $m; ++$i) { 
        $sum = 0; 
        for ($j = 0; $j < $n; ++$j) { 
            $sum += $arr[$i][$j]; 
        } 
        echo "Sum of row $i = $sum <br>"; 
 } } 
 
function column_sum($arr, $m, $n) { 
    echo "<br> Sum of each column: <br>"; 
    for ($i = 0; $i < $n; ++$i) { 
        $sum = 0; 
        for ($j = 0; $j < $m; ++$j) { 
            $sum += $arr[$j][$i]; 
        } 
        echo "Sum of column $i = $sum <br>"; 
    } 
} 

$m = 4; 
$n = 4; 

$x = 1; 
for ($i = 0; $i < $m; $i++) { 
    for ($j = 0; $j < $n; $j++) { 
        $arr[$i][$j] = $x++; 
    } 
} 

echo "<br> Matrix:<br>"; 
for ($i = 0; $i < $m; $i++) { 
    for ($j = 0; $j < $n; $j++) { 
        echo $arr[$i][$j] . " "; 
    } 
    echo "<br>"; 
} 
row_sum($arr, $m, $n); 
column_sum($arr, $m, $n); 
?>
