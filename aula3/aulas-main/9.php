/**9. Faça um programa que leia um nome de usuário e a sua senha e não aceite a senha igual ao nome do usuário, mostrando uma mensagem de erro e voltando a pedir as informações.*/

<?php
  
$usuario="Jonas";
$senha="98797";
do{
    $nome=readline("digite seu nome:");
    $senha=readline("digite a senha:");

 if($nome==$senha){
   echo"senha e nome iguais digite novamente";

}
}while($senha==$nome && ($usuario==$nome && $senhaa==$senha));

echo"logado com sucesso, seja bem vindo $nome";

?>