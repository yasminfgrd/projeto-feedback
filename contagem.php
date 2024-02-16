<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/contstyle.css">
    <title>Total</title>
</head>

<?php 

include 'conexao.php';
include 'header.html';

// Zerar as contagens
$visitante = 0;
$recrutador = 0;
$estudante = 0;

function contarVotos(){
    global $con;


// Consultar o banco de dados para obter as contagens atualizadas
$sql = "SELECT COUNT(*) AS total, indentificacao FROM tbl_post GROUP BY indentificacao";
$result = mysqli_query($con, $sql);

//Iniciar um array para guardar os votos.
$contagens = array(
    'visitante' => 0,
    'recrutador' => 0,
    'estudante' => 0
);

// Atualizar as contagens baseadas nos resultados da consulta
while ($row = mysqli_fetch_assoc($result)) {
    switch ($row['indentificacao']) {
        case 'visitante':
            $contagens['visitante'] = $row['total'];
            break;

        case 'recrutador':
            $contagens['recrutador'] = $row['total'];
            break;

        case 'estudante':
            $contagens['estudante'] = $row['total'];
            break;

        default:
            echo "Erro ao computar a identificação.";
            break;
    }
}

//Chamar a função para atualizar as contagens.
return  $contagens;
}

// Chamar a função para atualizar as contagens após a inserção bem-sucedida
$contagens = contarVotos(); 

//Atribuir as contagens ás váriaveis globais
$visitante = isset($contagens['visitante']) ? $contagens['visitante'] : 0;
$recrutador = isset($contagens['recrutador']) ? $contagens['recrutador'] : 0;
$estudante = isset($contagens['estudante']) ? $contagens['estudante'] : 0;

?>
<div class="cor-container">
<div class="card"> 
    <h3> Recrutador </h3>
    <?php echo "$recrutador "; ?> 
</div>

<div class="card">
    <h3>Estudante</h3>
    <?php echo "$estudante";?>
</div>

<div class="card">
    <h3>Visitante</h3>
    <?php echo "$visitante";?>
</div>
</div>

<?php include 'footer.html'; ?>