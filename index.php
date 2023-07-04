<?php
// Llamar al archivo de conexión
require 'helpers/conection.php';

//Query para traer los alumnos
$query_get_alumnos = "SELECT * FROM alumnos";
$alumnos = $conexion->query($query_get_alumnos);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="./css/styles.css" rel="stylesheet" type="text/css">
    <script src="./js/functionsApi.js"></script>
  </head>
  <body >
    <div class="body_class">
      <div class="d-flex justify-content-between">
        <div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Buscar por matricula</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribe la matricula">
        </div>
        </div>
        <div>
          <?php 
            require "helpers/buttonAdd.php"
          ?>
        </div>
      </div>


      <table class="table table-striped"  >
        <thead>
          <tr>
            <th>
              Matricula
            </th>
            <th>
              Nombre
            </th>
            <th>
              Apellido
            </th>
          </tr>
        </thead>

        <tbody id="alumnos_data">
          
        </tbody>
      </table>



      <h1>Hello, world!</h1>
    </div>




    <script>
      getAlumnos();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->
  </body>
</html>