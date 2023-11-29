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

<div id="Corpodapagina">   
    <div class="title">
        <h1> Projeto Feedback</h1>
    </div>
    
    
    <div class="card">
        <img src="./capa1.jpg" alt="Imagem do Card">
        <div class="card-content">
          <h3>Feedback</h3>
          <p>Deixe seu comentário e observações sobre o projeto.</p>
          <form action="actionp.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Seu email"> 

            <select name="opcoes">
                <option value="---">----</option>
                <option value="visitante">Visitante</option>
                <option value="recrutador">Recrutador</option>
                <option value="parceiro">Parceiro</option>
                <option value="estudante">Estudante</option>
            </select>
    
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="feedback" placeholder="Escreva sua mensagem"></textarea>
    
            <button type="submit">Enviar</button>
          </form>
        </div>
      </div>



      <?php
if (!empty($_SESSION['feedback'])) {
    echo "<h2>Feedbacks Recebidos</h2>";
    foreach ($_SESSION['feedback'] as $indice => $pessoa) {
        echo "<div class='card2'>";
        echo "<div class='card-content2'>";
        echo "<h3>Nome: " . $pessoa['nome'] . "</h3>";
        echo "<p>Email: " . $pessoa['email'] . "</p>";
        echo "<p>Opções: " . $pessoa['opcoes'] . "</p>";
        echo "<p>Feedback: " . $pessoa['feedback'] . "</p>";
        echo "</div>";
        echo "</div>";
    }
}
?>


      <footer>
        <div class="footer-content" id="contato">
            <div class="footer-left">
                <h2>Contato</h2>
                <p>E-mail: br.vieiradasilva@gmail.com</p>
                <p>Telefone: (21) 99152-7145</p>
            </div>
            <div class="footer-right">
                <p>&copy; Feito por:Bruna Vieira</p>
            </div>
        </div>
    </footer>

    </div> 
</body>
</html>