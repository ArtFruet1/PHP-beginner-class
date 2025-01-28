/**5. Escreva um algoritmo que permita ao usuário inserir vários números (até digitar 0 para parar). Calcule e exiba a média dos números digitados.*/
<?php
$i;
do {
    $i=readline("digite um numero:");
} while ($i!=0);

/**6. Escreva um algoritmo que gere um número aleatório entre 1 e 100 e permita ao usuário tentar adivinhar o número. O programa deve informar se o palpite é maior ou menor que o número secreto, até que o usuário acerte.
	6.1 $numeroAleatorio = rand(1, 100);*/
$numeroAleatorio = rand(1, 100);

do{
$na=readline("tente adivinhar o numero secreto:");
}while($numeroAleatorio!=$na);

echo"o numero secreto era:$numeroAleatorio";
?>