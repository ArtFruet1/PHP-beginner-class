/**7. Peça ao usuário um número inteiro e calcule o seu fatorial. Exemplo: 5! = 5 × 4 × 3 × 2 × 1 = 120*/
<?php
$n=readline("digite um numero:");
$i;
$f=1;
for($i=1; $i<=$n; $i++){

 $f=$i*$f;

}

echo"o fatorial do numero:$n é $f";

/**8. Crie um programa que exiba um menu de opções, permitindo que o usuário escolha uma ação até que ele opte por sair.

	Menu de Opções:
    		1 - Exibir 'Olá, Mundo!'
    		2 - Exibir a data atual
    		3 - Calcular a soma de dois números
    		4 - Sair

	Escolha uma opção (1-4):

	8.1 $data_atual = date('d/m/Y');
*/

$i=readline("
	Menu de Opções:
    		1 -Exibir 'Olá, Mundo!'
    		2 -Exibir a data atual
    		3 -Calcular a soma de dois números
    		4 -Sair");




switch ($i) {
    case 1:
        echo "Olá, Mundo!";
        break;
    case 2:
        echo "a data atual corresponde a 27/01/2025";
        break;
    case 3:
      $v1=readline("digite um numero:");
      $v2=readline("digite outro numero:");
        $s=$v1+$v2;
        echo "a soma corresponde a $s";
        break;
      
       default:
        echo "saindo";
} 





?>