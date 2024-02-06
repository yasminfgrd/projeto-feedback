<?php

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $indentificacao = $_POST['indentificacao'];
    $mensagem = $_POST['mensagem'];

    //Proteger contra sql injection
    $nome = mysqli_real_escape_string($con, $nome);
    $email = mysqli_real_escape_string($con, $email);
    $indentificacao = mysqli_real_escape_string($con, $indentificacao);
    $mensagem = mysqli_real_escape_string($con, $mensagem);


    // Inserir no banco de dados 
    $sql = "INSERT INTO tbl_post (nm_nome, nm_email, indentificacao, mensagem) VALUES( '$nome', '$email', '$indentificacao', '$mensagem')";
    
    if(mysqli_query($con, $sql)){
        echo "Mensagem enviada com sucesso";

        //Redirecionar para página principal.
        header('Location: formulario.php');
        
    }else{
        echo "Erro ao enviar mensagem: ".mysqli_error($connection);
    }

}
