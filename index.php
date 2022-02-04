<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD BASICO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h2>FORMULARIO DE DATOS</h2>
    <form action="index2.php" method="post">
        <label for=""> Titulo: </label>
        <input type="text" name="titulo" id="">
        <label for=""> Descripcion: </label>
        <input type="text" name="descripcion" id="">
        <label for=""> Autor: </label>
        <input type="text" name="autor" id="">
        <label for=""> Fecha Publicacion: (Formato requerido:yyyy-mm-dd)</label>
        <input type="text" name="fecha" id="">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>