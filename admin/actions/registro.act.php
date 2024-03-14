<?php
    include "../../common/utils.php";
    include "../../common/config.php";
    include "../../common/mysql.php";

   debug($_POST);
   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   if(isset($_POST['enable'])){
        $enable = 1;
   }
   else{
        $enable =0;
   }

   //nos conectamos a la base de datos
   $connection = Connect($config['database']);

   $sql = "insert into usuarios(nombre, email, password, enable) values ('".$nombre."', '".$email."', '".$password."', ".$enable.")";
  
   $return = Execute($sql, $connection);
   Close ($connection);

   //Redirigimos hacia otra página
   //header("location: ../../home.php");

?>