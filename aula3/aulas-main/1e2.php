<?php

$v=readline("digite o numero que voce gostaria de saber a tabuada:");

$i=1;
for($i=1; $i<11; $i++){
$n=$v*$i;
echo"numero:$n";

}

$m=0;
$va;
$j;

for($j=0; $j<5; $j++){
  $va=readline("digite o numero:");
if($va>$m){
$m=$va;
}
}
echo"o maior numero:$m";
?>

