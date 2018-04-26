<?php
  include('pila.php');
  session_start();
if (!isset($_SESSION['p']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
  $_SESSION['p']->eliminar();
  }
?>
<meta http-equiv="refresh" content="2;URL=index.php">