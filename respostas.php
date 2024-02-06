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