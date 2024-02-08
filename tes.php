<?php

include 'conexao.php';

// Zerar as contagens
$visitante = 0;
$recrutador = 0;
$estudante = 0;

function contarVotos(){
    global $con;

    // Consultar o banco de dados para obter as contagens atualizadas
    $sql = "SELECT COUNT(*) AS total, indentificacao FROM tbl_post GROUP BY indentificacao";
    $result = mysqli_query($con, $sql);

    // Inicializar um array para armazenar as contagens
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

    // Retornar o array com as contagens
    return $contagens;
}

// Chamar a função para atualizar as contagens
$contagens = contarVotos();

// Atribuir as contagens às variáveis globais, evitando os warnings
$visitante = isset($contagens['visitante']) ? $contagens['visitante'] : 0;
$recrutador = isset($contagens['recrutador']) ? $contagens['recrutador'] : 0;
$estudante = isset($contagens['estudante']) ? $contagens['estudante'] : 0;

?>

<div> 
    <h3> Recrutador </h3>
    <?php echo "$recrutador "; ?> 
</div>

<div>
    <h3>Estudante</h3>
    <?php echo "$estudante";?>
</div>

<div>
    <h3>Visitante</h3>
    <?php echo "$visitante";?>
</div>
