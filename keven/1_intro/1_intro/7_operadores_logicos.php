<?php

 $idade = 23 ;
 $cnh = true;
 $infra = true;
 $quitacao = true;
 
 if($idade > 18 && $cnh == true){
	 echo '<hr> pode dirigir!';
 } else{
 echo '<hr>  você não pode dirigir, cavalo!';
 }
 
 if(($idade >= 23 && $infra == false) || ($idade >= 23 && $quitacao == true)){
	 echo "<hr> pode fazer cnh D!";
 } else{ " <hr> você não pode fazer a cnh D";
 }
 /*
 exercicio 
 o motorista pode ter infrações , porém caso esteja quitado ele podera realizar a cnh D
 */
?>
  
