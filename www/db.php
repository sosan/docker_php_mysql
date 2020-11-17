<?php
// conexion a la db

$server="mysql";
$username="db_usuario_test";
$password="db_clave_usuario_test";
$database_name="db_nombre";

$errors = array();
$con = mysqli_connect($server, $username, $password, $database_name);

if($con)
{
    //registro del usuario
    if (isset($_POST['usuarioregistro'])) 
    {

        $username = mysqli_real_escape_string($con, $_POST['usuario']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        
        // comprobacion basica
        if (empty($username)) 
        {
            array_push($errors, "usuario es obligatorio");
        }
        
        if (empty($password)) 
        {
            array_push($errors, "password es obligatorio");
        }


        //comprobamos si existe el usuario
        $get_all = "SELECT COUNT(id) FROM users WHERE username='$username' LIMIT 1";
        $result = mysqli_query($con, $get_all);
        $user = mysqli_fetch_assoc($result);

        if ($user) 
        {
            
            if ($user['COUNT(id)'] > 0) 
            {
                array_push($errors, "usuario ya existe");
            }
        }
        
        if (count($errors) == 0) 
        {
            // faltarian mas comprobaciones, encriptar password, etc.., registar en la db
            $register = "INSERT INTO users (username, password) VALUES('$username', '$password')";
            mysqli_query($con, $register);
            header('Location: login.php');

        }

    }

    //login
    if (isset($_POST['usuariologin'])) 
    {
        $username = mysqli_real_escape_string($con, $_POST['usuario']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

         // comprobacion basica
        if (empty($username)) 
        {
            array_push($errors, "usuario es obligatorio");
        }
        else if (empty($password)) 
        {
            array_push($errors, "password es obligatorio");
        }
        else
        {
            
            $login = "SELECT COUNT(id) FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($con, $login);
            $user = mysqli_fetch_assoc($result);

            if ($user) 
            {
                if ($user['COUNT(id)'] == 1)
                {
                    echo "login correcto";
                }
                else
                {
                    array_push($errors, "usuario/password incorrecto");
                }
            }

        }
    }

}?>
