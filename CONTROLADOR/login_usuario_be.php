<?php
    session_start();
    include 'conexion_be.php';

    $username= $_POST['username'];
    $password= $_POST{'password'};
    $password=hash ('sha512', $password);

    $validar_login= mysqli_query ($conexion,"SELECT * FROM usuarios WHERE username='$username' and password='$password'");
    
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION{'usuario'}= $username;
        echo='Usted ha Accedido exitosamente'
        exit;
    }else{
        echo '
        <script>
            alert("El usuario no existe")
        </script>'
    };
    exit;

>?