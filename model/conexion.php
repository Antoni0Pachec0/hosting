<?php

class conexion{
    static public function conectar(){

        $servidor = 'localhost';
        $nombreDeLABaseDeDatos = 'pruebas';
        $nombreDelUsuario = 'root';

        $conectar = new PDO("mysql:host=$servidor;dbname=$nombreDeLABaseDeDatos", "$nombreDelUsuario", "");

        $conectar -> exec("set names utf8");

        return $conectar;
    }

    static public function conectar2(){

        $servidor = 'localhost';
        $nombreDeLABaseDeDatos = 'u115692057_casalila';
        $nombreDelUsuario = 'u115692057_casalila';
        $contraseña = 'Casa_lila22';
        
        $conectar2 = new PDO("mysql:host=$servidor;dbname=$nombreDeLABaseDeDatos", "$nombreDelUsuario", "$contraseña");

        $conectar2 -> exec("set names utf8");

        return $conectar2;
    }
}
?>