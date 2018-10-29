<?php
    function connect_pg_db(){
        return pg_connect("host='127.0.0.1' port=5432 dbname=Tarea1 user=postgres password=Casita123") or die("Error: ".pg_last_error());
    }
    function revisar_username_email($username,$email){
        $sql2="SELECT username FROM users WHERE username='$username' OR email='$email'";
        $is_regitered=pg_query($sql2);
        $row = pg_fetch_row($is_regitered);
        return $row;
    }
    function agregar_usuario($username,$email,$password){
        $sql ="INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
        $ejecutar=pg_query($sql);
        return $ejecutar;
    }
?>