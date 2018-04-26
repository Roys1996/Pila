<?php
  include('pila.php');
  session_start();
  if (!isset($_SESSION['p']))
  {
    $_SESSION['p']= new pila();
  }
  $_SESSION['p']->insertar($_POST['text_ele']);
?>
<h3>ELEMENTO INSERTADO CON EXITO</h3>
<meta http-equiv="refresh" content="2;URL=index.php">