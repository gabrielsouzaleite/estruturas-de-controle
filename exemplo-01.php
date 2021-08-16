<?php 

$qualSuaidade = 55;

$idadeCriança = 12;
$idadeAdolescente = 21;
$idadeAdulto = 40;

if($qualSuaidade < $idadeCriança){
    echo "É uma criança!!";
} elseif ($qualSuaidade < $idadeAdolescente) {
    echo "É um Adolescente";
}elseif ($qualSuaidade < $idadeAdulto) {
    echo "É um adulto!!";
} else {
    echo "É um Idoso";
    
}



?>