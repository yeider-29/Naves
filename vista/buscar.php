<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-body-secondary">
    <div class="container py-3">
          <div class="alert alert-success text-center fs-2" role="alert">
          PROYECTO SOFKA
         </div>
         <div class="bg-secondary text-center fs-3">BUSCADOR</div>
         <br>
         


         <form class="row row-cols-lg-auto g-3 align-items-center" method="post" >
              <div class="col-12">
               
                <div class="input-group">
                  
                  <input type="text" class="form-control"  placeholder="Buscar por nombre" name="nombre">
                </div>
              </div>

              <div class="col-12">
                
                <select class="form-select" name="destino">
                  <option selected value="">Destino.</option>
                  <option value="luna">Luna</option>
                  <option value="marte">Marte</option>
                  <option value="jupiter">Jupiter</option>
                </select>
              </div>

              

              <div class="col-12">
                <button type="submit" class="btn btn-success" name="buscar" value="1">BUSCAR</button>
              </div>



              <div class="col-12">
                <a href="../index.php" class="btn btn-outline-danger" >Atras</a>
                
              </div>
            </form>

            <br>
            <br>


            <?php 
            if(isset($_POST['buscar'])){
              require_once('../controlador/controlador.php');
              $nombre = $_POST['nombre'];
              $destino = $_POST['destino'];
              

                $l = new mostrarBuscador();
                $l->Mostrar($nombre,$destino);

            }
                
            ?> 
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>