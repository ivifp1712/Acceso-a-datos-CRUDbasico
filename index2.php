<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD BASICO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        p{
            float: right;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h2>DATOS DE LA BASE DE DATOS</h2>
    <?php
        require_once("Conexion.php");
        $formulario = new Conexion();
        $formulario->gestionarCliente($_POST["titulo"], $_POST["descripcion"], $_POST["autor"], $_POST["fecha"]);
    ?>
    <table>
    <tr>
        <th>ID</th>
        <th>titulo</th>
        <th>descripcion</th>
        <th>autor</th>
        <th>fecha</th>
    </tr>
    <?php
        $conn=mysqli_connect("127.0.0.1","root","","test");
        $consulta_select="select * from publicaciones";
        $resultado=mysqli_query($conn,$consulta_select);
        $rowcount=mysqli_num_rows($resultado);
        for ($i=1; $i < $rowcount+1; $i++) { 
            echo "<tr>";
            echo $formulario->consultarClientes($i);
            echo "</tr>";
        }

    ?>
    </table>
</body>
</html>