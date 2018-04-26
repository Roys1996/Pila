<?php
  include('pila.php');
  session_start();
if (!isset($_SESSION['p']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
  $_SESSION['p']->listar();
  }
?>
<meta http-equiv="refresh" content="5;URL=index.php">