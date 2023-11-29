<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){          
   $comentario = array(
    'nome' =>$_POST['nome'],
    'email' =>$_POST['email'],
    'opcoes' =>$_POST['opcoes'],
    'feedback' =>$_POST['feedback']
   );

   if(!isset($_SESSION['feedback'])){
    $_SESSION['feedback'] = array();
   }
   $_SESSION['feedback'][]=$comentario;

   header('Location: ./formulario.php');
}
?> 