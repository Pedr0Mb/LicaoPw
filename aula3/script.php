<?php

$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$media = ($nota1 + $nota2) / 2;
 
if($media > 7){
    echo "aprovado, $media";
}elseif ($media >= 5) {
   echo "recuperação";
}else{
    echo "reprovado, $media";
}

?>