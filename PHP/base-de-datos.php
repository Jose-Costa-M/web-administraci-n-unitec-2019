<?php
    //conectamos   con   el   servidor
    $conectar=@mysql_connect("localhost", "root","");
    //verificar   conexion   correcta
     if(!$conectar){
         echo"No se pudo CONECTAR con el servidor";
     }else{

         $base=mysql_selec_db("pedidos");
         if(!$base){
            echo"No se ENCONTRO la base de datos";
         }
     }
     //recuperar   las   variables
     $nombre=$_POST["nombre"];
     $dirección=$_POST["dirección"];
     $correo=$_POST["correo electronico"];
     $pedido=$_POST["pedido"];
     //hacemos  la  sentencia  sql
     $sql="INSERT INTO Datos VALUES("$nombre", 
                                    "$dirección",
                                     "$correo", 
                                     "$pedido")";
        //Ejecutamos   La   Sentencia 
        $ejectuar=mysql_querry($sql);
        //Verificamos   La   Ejecucion
        if(!$ejectuar){
            echo="Hubo algun ERROR";
          }else{
              echo="Datos Guardados Correctamente <br><a href="INDEX.HTML">Volver</a>;
              
          
        }
?>