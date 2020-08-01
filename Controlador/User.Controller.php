<?php
  /**
   * Clase home que permite la primera carga del sistema
   */
  class User
  {

   function __construct()
    {
      // code...
    }

    public function validar()
    {
        //echo "Creado";
        //var_dump($POST);
    
        $user = new Usuarios();
        $smarty=new Smarty();
       
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
       
       
        $dato=$user->busqueda($usuario, $pass);

        if($dato->num_rows==1)
        {
              $smarty->display('Tabla.tpl');
            
        }

        else
        {$smarty->display('Inicio.tpl');}
    }
  }

 ?>