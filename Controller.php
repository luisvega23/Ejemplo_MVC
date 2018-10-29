
<?php
/*Cambiar href dependiendo la situación*/ 

    include('Model.php');
    //Extraer datos del formulario
    $nombre=$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rep_pass = $_POST['rep_password'];
    //Verificamos contraseña y que los campos no estén vacios (esto último se puede omitir ya que los campos del formulario estan como 'required')
    if(strlen($nombre)==0 || strlen($email)==0 || strlen($password)==0)
        echo "Debe rellenar todos los campos";
    else if($password!=$rep_pass){
        echo "La debe escribir la misma cotraseña en ambos campos <br> <a href='/AyDS_T1'> Volver al formulario </a>"; 
    }else{
        $db_con=connect_pg_db(); //Pide al modelo que conecte con la base de datos
        $row=revisar_username_email($nombre,$email);    //Pide al modelo que revise si el usuario ya está registrado con esas credenciales.
        if($row!=false){
            echo "El nombre o el correo ya está registrado. <br> <a href='/AyDS_T1'> Volver al formulario </a>";
        }
        else{
            $ejecutar=agregar_usuario($nombre,$email,$password);    //Pide al modelo agregar al usuario
            if(!$ejecutar){
                echo "Hubo un error al guardar los datos <br> <a href='/AyDS_T1'> Volver al formulario </a>";
            }else{
                echo "Usuario guardado con éxito <br> <a href='/AyDS_T1'> Volver al formulario </a>";
            }
        }
    }
    /*if(!$ejecutar){
        echo "Hubo un error al guardar los datos";
    }else{
        echo "Usuario guardado con éxito";
    } */
?>
    