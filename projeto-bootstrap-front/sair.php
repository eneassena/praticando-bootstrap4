<?php

  session_start();
  $_SESSION["id_comun"] = false;
  $_SESSION["id_admin"] = false;
  header("location: home.php");

?>
