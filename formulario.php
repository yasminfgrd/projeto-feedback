<?php
session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forstyle.css">
    <link rel="stylesheet" href="./actionp.php">
    <title>Formulário com Card Responsivo</title>
</head>
<body> 

   <?php include "header.html"; ?>

   <div class="card">
    <img src="../capa1.jpg" alt="Imagem do Card">
    <div class="card-content">
        <h3>Feedback</h3>
        <p>Deixe seu comentário e observações sobre o projeto.</p>
        <form action="inserircomentarios.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Seu email" required>

            <p></p>

            <label for="indentificacao">Identificação:</label>
            <select name="indentificacao" required>
                <option value="" disabled selected>Escolha uma opção</option>
                <option value="visitante">Visitante</option>
                <option value="recrutador">Recrutador</option>
                <option value="estudante">Estudante</option>
            </select>

            <p></p>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</div>


  <?php  include "respostas.php"; ?>    

<?php include_once "footer.html";  ?>