<?php
  /**
   *
   */
  class Conexion extends mysqli
  {

    function __construct()
    {
      $server="sql211.tonohost.com ";
      $pass="18deenero";
      $user="ottos_25991077";
      $base="ottos_25991077_frameworkmvc";

      parent::__construct($server,$user,$pass,$base);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br>";
      echo $error;
	  unset($error);
    }
  }

 ?>
