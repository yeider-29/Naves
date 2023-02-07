
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-warning-subtle">
    <div class="container py-3">
          <div class="alert alert-success text-center fs-2" role="alert">
          PROYECTO SOFKA
         </div>
         <div class="bg-secondary text-center fs-3">INVENTARIO</div>
         <br>
         <br>
         <a href="../index.php" class="btn btn-outline-danger" >Atras</a>
         <br>
         <hr>
         <p class="fs-3">Lanzadera</p>
               

               <div class="container text-center">
                <div class="row align-items-start">
                  
                            <?php 
                                require_once('../controlador/controlador.php');
                                $l = new controladorVerInventario();
                                $l->controladorLanzadera();
                            ?> 
                  
                </div>
              </div>


         <hr>
         <p class="fs-3">Tripulada</p>
              <div class="container text-center">
                <div class="row align-items-start">
                  
                            <?php 
                                require_once('../controlador/controlador.php');
                                $t = new controladorVerInventario();
                                $t->controladorTripulada();
                            ?> 
                  
                </div>
              </div>

         <hr>
         <p class="fs-3">No tripulada</p>
              <div class="container text-center">
                <div class="row align-items-start">
                  
                            <?php 
                                require_once('../controlador/controlador.php');
                                $nt = new controladorVerInventario();
                                $nt->controladorNoTripulada();
                            ?> 
                  
                </div>
              </div>

         <hr>







       </div>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>