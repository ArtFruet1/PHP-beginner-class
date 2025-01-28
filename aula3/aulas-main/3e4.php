/**3. Escreva um algoritmo que receba dois números representando os limites de um intervalo e exiba a quantidade de números pares entre eles (inclusive os limites).*/

<?php

$v1=readline("digite um numero:");
$v2=readline("digite um numero:");
$i;
$par=0;
if($v1<$v2){
 for($i=$v1; $i<=$v2; $i++){
   if($i%2==0){
    $par++;
     }
   }
echo"a quantidade de pares corresponde a:$par";
}
else if($v2<$v1){
for($i=$v2; $i<=$v1; $i++){
   if($i%2==0){
    $par++;
     }
}
echo"a quantidade de pares corresponde a:$par";
}

/**4. Escreva um algoritmo que receba dois números representando os limites de um intervalo e calcule a soma de todos os números ímpares dentro desse intervalo.*/

$n1=readline("escreva um numero:");
$n2=readline("escreva outro numero:");
$j;
$s=0;
if($n1<$n2){
 for($i=$n1; $i<=$n2; $i++){
   if($i%2!=0){
    $s=$s+$i;
     }
   }
echo"a soma dos numeros impares corresponde a:$s";
}
else if($n2<$n1){
for($i=$n2; $i<=$n1; $i++){
   if($i%2!=0){
    $s=$s+$i;
     
     }
}
echo"a soma dos numeros impares corresponde a:$s";
}

?>

   