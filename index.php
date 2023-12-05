<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Listado de productos </title>
</head>
<body>
    <h1> Productos</h1>

    Deberán crear dos archivos, uno que contenga una función con un array de datos, 
    y el otro archivo que llame e incorpore con lo visto en clase a la función y se muestre los datos en una Card.
<div>
  
<div class="container-fluid">
<div class="row"> 
 <!-- <div class="card-group ">  -->

<?php

require("datos.php");

$array = datos_productos();
// var_dump($array);
     


foreach($array as $e){
 //  echo $e['nombre'] ;
  ?>
   

  <div class="col-sm-4">
    <div class="card">
    <img src="<?php echo $e['imagen'] ?>" class="card-img-top " style="max-width: 200px; max-height: 200px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Código: <?php echo $e['id'] ?></h5>
        <p class="card-text"> Artículo: <?php echo $e['nombre'] ?></p>
        <p class="card-text"> Precio: <?php echo $e['precio'] ?></p>
        <!-- <a href="#" class="btn btn-primary"> < ?php echo $e['nombre'] ?></a> -->
      </div>
    </div>
  </div>

    <?php

    }
 ?>
</div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>