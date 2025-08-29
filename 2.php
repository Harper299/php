<?php
function prime(int $n)
{
for ($i = 2; $i <= sqrt($n); $i++)
{
if ($n % $i == 0) return false;
}
return true;
}
//Driver code
$n = 100;
$m = 20;
$sum = 0;
$count = 0;
echo "Prime Numbers :<br>";
for($i = 2; $i <= $n; $i++)
{
if(prime($i))
{
echo $i . " ";
$sum += $i;
$count++;
if($count === $m) break;
}
}
echo "<br> Sum of $m Prime numbers : ",$sum;
?>
