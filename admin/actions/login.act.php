<?php
    include "../../common/utils.php";
    include "../../common/config.php";
    include "../../common/mysql.php";

     debug($_POST);
     // Credenciales
     $email = $_POST['email'];
     $password = md5($_POST['password']);

    // Conexión
     $connection = Connect($config['database']);
     $sql = "select * from usuarios where email='".$email."' and password='".$password."' ";

    // Ejecución de la consulta
    $rows = ExecuteQuery($sql, $connection);
    Close($connection);

    // Fin de la conexion //////////////////////////////////////////
    if(empty($rows)){
        header("Location: ../error.php");
        
    } else{
        session_start();
        $_SESSION['id'] = $rows['id'];
        $_SESSION['email'] = $rows['email'];
        $_SESSION['sesion_id'] = session_id();

        header("Location: ../home.php?page=listado");
    }



    
    debug($rows);

?>