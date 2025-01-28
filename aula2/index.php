<?php

/**1 – Somar dois números e multiplicar o resultado pelo primeiro número.
Escreva um algoritmo que leia dois números, calcule a soma e depois multiplique o resultado pela variável que contém o primeiro número. */

$a=1;
$b=3;
$s;

$s=($a+$b)*$a;

echo"resultado:$s";

/**2 – Média de três números.
Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado.*/
$x=3;
$y=3;
$z=3;
$m;

$m=($x+$y+$z)/3;

echo"resultado:$m";


/**3 – Calcular 15% de um valor.
Escreva um algoritmo que receba um valor e calcule 15% deste valor, exibindo o resultado para o usuário.*/
$v=15.00;
$c=0.00;

$c=$v*0.15;

echo"resultado:$c";

/**4 – Calcular 5% e 50% de um valor.
Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.*/
$va=17;
$ci;
$ce;

echo"valor:$va";

$ci=$va*0.05;
$ce=$va*0.50;

echo"cinco:$ci";
echo"cinquenta:$ce";

/**5 – Somar os quadrados de dois números.
Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.*/
$q=4;
$u=5;
$so;

$so=($q*$q)+($u*$u);

echo"soma:$so";

/**6 – Converter a velocidade de m/s para km/h.
Escreva um algoritmo que leia a velocidade de um objeto em metros por segundo (m/s), calcule e exiba para o usuário a velocidade em quilômetros por hora (km/h).*/

$ve=36;
$con;

$con=$ve*3.6;

echo"conversão:$con";

/**8 – Calcular o desconto de 7% em um produto.
Escreva um algoritmo que receba o valor de um produto, calcule um desconto de 7%, e exiba para o usuário o valor original, o valor do desconto e o valor com o desconto.*/
$val;
$des;
$valdes;

$val=readline("digite o valor:");

$des=$val*0.07;

$valdes=$val-$des;

echo"valornormal:$val";
echo"desconto:$des";
echo"valorcomdesconto:$valdes";


/**9 – Calcular o volume de uma caixa retangular.
Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular utilizando a fórmula: volume = comprimento x largura x altura.*/

$compri=30;
$largura=20;
$altura=10;
$volume;

$volume=$compri*$largura*$altura;

echo"volume:$volume";

/***10 – Parcelar uma compra com 16% de acréscimo.
Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.*/
$parceladiv;
$compra=readline("digite o valor do produto:");
$compra=$compra+($compra*0.16);

$parceladiv=$compra/10;

echo"valor da parcela:$parceladiv";

echo"valor total:$compra";


/**Desafio – Calculadora Simples:
Crie uma calculadora simples no terminal que permita ao usuário escolher uma operação (soma, subtração, multiplicação ou divisão) e, em seguida, insira dois números para realizar a operação escolhida. Depois de calcular o resultado, verifique e exiba:
  - Se o resultado é positivo ou negativo.
  - Se o resultado é ímpar ou par.*/

$operador=readline("digite a operação desejada:1-soma,2-subtração,3-divisão,4-multiplicação:");
$somas;
$subtração;
$multiplicacao;
$divisao;

switch ($operador) {
    case 1:
        $v1=readline("digite um numero:");
        $v2=readline("digite mais um numero:");
        $somas=$v1+$v2;
     echo"o resultado da soma:$somas";
      if($somas>0){
      echo"o numero e positivo";
        if($somas%2==0){
         echo"o numero e par";
        }
        else{
       echo"o numero e impar";
      }
}
    else{
      echo"o numero e negativo";
}
        break;
    case 2:
        $v1=readline("digite um numero:");
        $v2=readline("digite mais um numero:");
        $subtracao=$v1-$v2;
     echo"o resultado da subtracao:$subtracao";
      if($subtracao>0){
      echo"o numero e positivo";
        if($subtracao%2==0){
         echo"o numero e par";
        }
        else{
       echo"o numero e impar";
      }
}
else{
      echo"o numero e negativo";
}

        break;
    case 3:
       $v1=readline("digite um numero:");
        $v2=readline("digite mais um numero:");
        $divisao=$v1/$v2;
     echo"o resultado da divisao:$divisao";
      if($divisao>0){
      echo"o numero e positivo";
        if($divisao%2==0){
         echo"o numero e par";
        }
        else{
       echo"o numero e impar";
      }
}
else{
      echo"o numero e negativo";
}

        break;
case 4: 
        $v1=readline("digite um numero:");
        $v2=readline("digite mais um numero:");
        $multiplicacao=$v1*$v2;
     echo"o resultado da multiplicacao:$multiplicacao";
      if($multiplicacao>0){
      echo"o numero e positivo\n";
        if($multiplicacao%2==0){
         echo"o numero e par";
        }
        else{
       echo"o numero e impar";
      }
}
else{
      echo"o numero e negativo";
}
  break;
     
    default:
        echo "operação invalida";
} 





?>