<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-dark-subtle">

    <div class="container py-3">
          <div class="alert alert-success text-center fs-2" role="alert">
          PROYECTO SOFKA
         </div>
         <div class="bg-secondary text-center fs-3">Creador De Naves</div>
         <br>


         <a href="../index.php" class="btn btn-outline-danger" >Atras</a>
         <br>


          <p class="fs-3">Crear nave # 1</p>


         <form class="row g-3" method="post" action="../controlador/controlador.php">
            
            <div class="col-auto">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="empuje" placeholder="Empuje">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="destino" placeholder="Destino">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="combustible" placeholder="Combustible">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="pais" placeholder="Pais">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="velocidad" placeholder="Velocidad">
            </div>


            <div class="col-auto">
              <select class="form-select" name="tipo">
                <option selected value="nave1">Nave # 1</option>
              </select>
            </div>


            <div class="col-auto">
              <button type="submit" class="btn btn-success mb-3">CREAR</button>
            </div>
          </form>

          <!--  ________________________________________________________________________________-->



         <p class="fs-3">Crear nave # 2</p>


         <form class="row g-3" method="post" action="../controlador/controlador.php">
            
            <div class="col-auto">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="empuje" placeholder="Empuje">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="destino" placeholder="Destino">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="combustible" placeholder="Combustible">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="pais" placeholder="Pais">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="peso" placeholder="Peso">
            </div>


            <div class="col-auto">
              <select class="form-select" name="tipo">
                <option selected value="nave2">Nave # 2</option>
              </select>
            </div>


            <div class="col-auto">
              <button type="submit" class="btn btn-success mb-3">CREAR</button>
            </div>
          </form>

          <!--  ________________________________________________________________________________-->


          <p class="fs-3">Crear nave # 3</p>


         <form class="row g-3" method="post" action="../controlador/controlador.php">
            
            <div class="col-auto">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="empuje" placeholder="Empuje">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="destino" placeholder="Destino">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="combustible" placeholder="Combustible">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="pais" placeholder="Pais">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="altura" placeholder="Altura">
            </div>


            <div class="col-auto">
              <select class="form-select" name="tipo">
                <option selected value="nave3">Nave # 3</option>
              </select>
            </div>


            <div class="col-auto">
              <button type="submit" class="btn btn-success mb-3">CREAR</button>
            </div>
          </form>

          <!--  ________________________________________________________________________________-->


          <p class="fs-3">Crear nave # 4</p>


         <form class="row g-3" method="post" action="../controlador/controlador.php">
            
            <div class="col-auto">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="empuje" placeholder="Empuje">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="destino" placeholder="Destino">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="combustible" placeholder="Combustible">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="pais" placeholder="Pais">
            </div>

            <div class="col-auto">
              <input type="text" class="form-control" name="distancia" placeholder="Distancia">
            </div>


            <div class="col-auto">
              <select class="form-select" name="tipo">
                <option selected value="nave4">Nave # 4</option>
              </select>
            </div>


            <div class="col-auto">
              <button type="submit" class="btn btn-success mb-3">CREAR</button>
            </div>
          </form>
        </div>

          <!--  ________________________________________________________________________________-->
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>