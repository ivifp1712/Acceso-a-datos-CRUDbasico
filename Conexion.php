<?php
class Conexion{
    public function probar(){
        echo "<p>Clase de conexión OK</p>";
    }
    public function conectar(){
        mysqli_connect("localhost","root","","test");
        echo "<p>Conexión realizada</p>";
    }
    
    public function gestionarCliente($titulo, $descripcion, $autor, $fecha_publicación){
        
        
        try {
            $conn=mysqli_connect("127.0.0.1","root","","test");
            $conn->query("CREATE TABLE `test`.`publicaciones` ( `id` INT NOT NULL, `titulo` VARCHAR(50) NOT NULL , `descripcion` VARCHAR(200) NOT NULL , `autor` VARCHAR(50) NOT NULL , `fecha_publicación` DATE NOT NULL , PRIMARY KEY (`id`))");
            $conn->query("ALTER TABLE `publicaciones` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT");            
            $consulta="INSERT INTO publicaciones (titulo, descripcion, autor, fecha_publicación) values(?,?,?,?)";
            $sentencia=$conn->prepare($consulta);
            $sentencia->bind_param("ssss",$titulo, $descripcion, $autor, $fecha_publicación);
            $sentencia->execute();
                        

        } catch (Exception $e) {
            echo "<p>La tabla ya había sido creada en la base de datos </p>";
            $consulta="INSERT INTO publicaciones (titulo, descripcion, autor, fecha_publicación) values(?,?,?,?)";
            $sentencia=$conn->prepare($consulta);
            $sentencia->bind_param("ssss",$titulo, $descripcion, $autor, $fecha_publicación);
            $sentencia->execute();
            
        }        
    }
    public function consultarClientes($linea){
        $conn=mysqli_connect("127.0.0.1","root","","test");
        $consulta_select="select * from publicaciones where publicaciones.id='".$linea."'";
        $resultado=mysqli_query($conn,$consulta_select);
        $loselect=mysqli_fetch_row($resultado);
        for ($i=0; $i < 5; $i++) { 
            echo "<td>".$loselect[$i]."</td>";
        }
        
        
     
        
    }

    
}