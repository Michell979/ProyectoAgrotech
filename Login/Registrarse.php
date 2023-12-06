<?php

session_start();
include_once("../Conexion.php");

if(isset($_POST['Usuario'])&& isset($_POST['Nombre_Completo'])&& isset($_POST['Clave'])&& isset($_POST['RClave'])){
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }


    $Usuario = validar($_POST['Usuario']);
    $Nombre_Completo=validar($_POST['Nombre_Completo']);
    $Clave = validar($_POST['Clave']);
    $RClave=validar($_POST['RClave']);

    $datosUsuario= 'Usuario=' . $Usuario.'&Nombre_Completo='. $Nombre_Completo;
    if(empty($Usuario)){
        header("location: ../CrearCuenta.php?error=El usuario es requerido&$datosUsuario");
        exit();
    }elseif(empty($Nombre_Completo)){
        header("location: ../CrearCuenta.php?error=El nombre es requerido&$datosUsuario");
        exit();
        
    }elseif(empty($Clave)){
        header("location: ../CrearCuenta.php?error=La contraseña es requerida&$datosUsuario");
        exit();
    }elseif(empty($RClave)){
        header("location: ../CrearCuenta.php?error=La contraseña es requerida nuevamente&$datosUsuario");
        exit();
    }elseif($Clave !== $RClave){
        header("location: ../CrearCuenta.php?error=La contraseña no coincide&$datosUsuario");
        exit();
    }else{
        // $Clave = md5($Clave); 
        $Clave=password_hash($Clave, PASSWORD_DEFAULT);

        $sql="SELECT *FROM usuarios WHERE Usuario = '$Usuario'";
        $query=$conexion ->query($sql);
        if(mysqli_num_rows($query)> 0){
            header("location: ../CrearCuenta.php?error=El usuario ya existe");
        exit();

        }else{
            $sql2= "INSERT INTO usuarios(Nombre_Completo,Usuario, Clave) VALUES('$Nombre_Completo','$Usuario','$Clave')";
            $query2=$conexion -> query($sql2);
            if($query2){
                header("location: ../CrearCuenta.php?success=Usuario Creado con Éxito");
        exit();
            }else{
                header("location: ../CrearCuenta.php?success=Ocurrio un Error");
        exit();
            }
        }

        }
    }else{
        header('location: ../CrearCuenta.php');
        exit();
    }
