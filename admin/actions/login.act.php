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
//     $row = $mysql->find($sql);
    $rows = ExecuteQuery($sql, $connection);


    if(empty($row)){
        header("Location: ../error.php");
    } else{
        session_start();
        $_SESSION['id'] = $rows[0]['id'];
        $_SESSION['email'] = $rows[0]['email'];
        $_SESSION['sesion_id'] = session_id();

        header("Location: ../index.php");
    }



    Close($connection);
?>