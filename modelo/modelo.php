<?php





//CLASE PADRE
class Nasa
{
//atributos
	public $nombre;
	public $empuje;
	public $destino;
	public $combustible;
	public $pais;
//constructor	
	public function __construct($nombre, $empuje, $destino, $combustible, $pais)
	{
		$this->nombre= $nombre;
		$this->empuje= $empuje;
		$this->destino= $destino;
		$this->combustible= $combustible;
		$this->pais= $pais;
	}
//metodos
	
	public function viajar(){
		echo 'la nave '.$this->nombre.' esta viajando con un empuje de '.$this->empuje.' con destino a '.$this->destino.' usando como combustible '.$this->combustible.'';
	}
	public function despegar(){
		echo 'la nave '.$this->nombre.' despegará de '.$this->pais.'';
	}
}






//CLASE HIJA _______________________________________________________________________________

class Nave1 extends Nasa
{
//Atributo
public $velocidad;

//Constructor                                                                //sobre escritura
public function __construct($nombre, $empuje, $destino, $combustible, $pais, $velocidad){
	parent::__construct($nombre, $empuje, $destino, $combustible, $pais);
    $this->velocidad = $velocidad;
}


//Metodos
	public function despegar(){
		echo 'la nave '.$this->nombre.' despegará de '.$this->pais.' con una velocidad de '.$this->velocidad.'';
	}                     // sobre carga
	public function crear($tipo){

		if($this->nombre != NULL){
				// CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();


				$numero = rand(1000,9999);
				$mitipo = $tipo;

				$sql = "INSERT INTO naves (nombre, empuje, destino, combustible, pais, id_relacional) 
				          VALUE ('".$this->nombre."',
				          		 '".$this->empuje."',
				          		 '".$this->destino."',
				          		 '".$this->combustible."',
				          		 '".$this->pais."',
				          		 '".$numero."'
				          		 )";
				$NewConn->ExecuteQuery($sql);

				$sql2 = "INSERT INTO caracteristicas (id_relacional_c, tipo,tipo_nave) 
				          VALUE ('".$numero."',
				          		 '".$this->velocidad."',
				          		 '".$mitipo."'
				          		 )";
				$NewConn->ExecuteQuery($sql2);
				echo '<script>window.location.href="../vista/crearNaves.php"</script>';
			}else{
			
				echo 'Error debe ingresar el nombre de la nave';
			}
	}

}

// _______________________________________________________________________________





//CLASE HIJA 2
class Nave2 extends Nasa
{
//Atributo
public $peso;

//Constructor 
public function __construct($nombre, $empuje, $destino, $combustible, $pais, $peso){
	parent::__construct($nombre, $empuje, $destino, $combustible, $pais);
    $this->peso = $peso;
}


//Metodos
	public function despegar(){
		echo 'la nave '.$this->nombre.' despegará de '.$this->pais.' con un peso '.$this->peso.'';
	}
	public function crear($tipo){

		if($this->nombre != NULL){
				// CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();


				$numero = rand(1000,9999);
				$mitipo = $tipo;

				$sql = "INSERT INTO naves (nombre, empuje, destino, combustible, pais, id_relacional) 
				          VALUE ('".$this->nombre."',
				          		 '".$this->empuje."',
				          		 '".$this->destino."',
				          		 '".$this->combustible."',
				          		 '".$this->pais."',
				          		 '".$numero."'
				          		 )";
				$NewConn->ExecuteQuery($sql);

				$sql2 = "INSERT INTO caracteristicas (id_relacional_c, tipo,tipo_nave) 
				          VALUE ('".$numero."',
				          		 '".$this->peso."',
				          		 '".$mitipo."'
				          		 )";
				$NewConn->ExecuteQuery($sql2);
				echo '<script>window.location.href="../vista/crearNaves.php"</script>';
			}else{
				echo 'Error debe ingresar el nombre de la nave';
			}
		}
	}
// _______________________________________________________________________________



// CLASE HIJA 3
class Nave3 extends Nasa
{
//Atributo
public $altura;

//Constructor 
public function __construct($nombre, $empuje, $destino, $combustible, $pais, $altura){
	parent::__construct($nombre, $empuje, $destino, $combustible, $pais);
    $this->altura = $altura;
}


//Metodos
	public function despegar(){
		echo 'la nave '.$this->nombre.' despegará de '.$this->pais.' con una altura '.$this->altura.'';
	}
	public function crear($tipo){

		if($this->nombre != NULL){
				// CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();


				$numero = rand(1000,9999);
				$mitipo = $tipo;

				$sql = "INSERT INTO naves (nombre, empuje, destino, combustible, pais, id_relacional) 
				          VALUE ('".$this->nombre."',
				          		 '".$this->empuje."',
				          		 '".$this->destino."',
				          		 '".$this->combustible."',
				          		 '".$this->pais."',
				          		 '".$numero."'
				          		 )";
				$NewConn->ExecuteQuery($sql);

				$sql2 = "INSERT INTO caracteristicas (id_relacional_c, tipo,tipo_nave) 
				          VALUE ('".$numero."',
				          		 '".$this->altura."',
				          		 '".$mitipo."'
				          		 )";
				$NewConn->ExecuteQuery($sql2);
				echo '<script>window.location.href="../vista/crearNaves.php"</script>';
			}else{
				echo 'Error debe ingresar el nombre de la nave';
			}
		}
	}
// _______________________________________________________________________________





//CLASE HIJA 4
class Nave4 extends Nasa
{
//Atributo
public $distancia;

//Constructor 
public function __construct($nombre, $empuje, $destino, $combustible, $pais, $distancia){
	parent::__construct($nombre, $empuje, $destino, $combustible, $pais);
    $this->distancia = $distancia;
}


//Metodos
	public function despegar(){
		echo 'la nave '.$this->nombre.' despegará de '.$this->pais.' con una '.$this->distancia.'';
	}
	public function crear($tipo){

		if($this->nombre != NULL){
				// CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();


				$numero = rand(1000,9999);
				$mitipo = $tipo;

				$sql = "INSERT INTO naves (nombre, empuje, destino, combustible, pais, id_relacional) 
				          VALUE ('".$this->nombre."',
				          		 '".$this->empuje."',
				          		 '".$this->destino."',
				          		 '".$this->combustible."',
				          		 '".$this->pais."',
				          		 '".$numero."'
				          		 )";
				$NewConn->ExecuteQuery($sql);

				$sql2 = "INSERT INTO caracteristicas (id_relacional_c, tipo,tipo_nave) 
				          VALUE ('".$numero."',
				          		 '".$this->distancia."',
				          		 '".$mitipo."'
				          		 )";
				$NewConn->ExecuteQuery($sql2);
				echo '<script>window.location.href="../vista/crearNaves.php"</script>';
			}else{
				echo 'Error debe ingresar el nombre de la nave';
			}
		}
	}





class verInventario{

	public function verLanzadera(){
		// CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();



				$sql= "SELECT * FROM lanzadera";
				$result =  $NewConn->ExecuteQuery($sql);
				while ($row = $NewConn->GetRows($result)) {
					$nombre = $row[1];
					$combustible =$row[2];
					$empuje=$row[3];
					$peso=$row[4];
					$img=$row[5];

					echo '
					<div class="col">
							<div class="card mb-3">
                              <img src="'.$img.'" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">'.$nombre.'</h5>
                                <p class="card-text">Peso: '.$peso.'  - Empuje: '.$empuje.'</p>
                                <p class="card-text"><small class="text-muted">Combustible: '.$combustible.'</small></p>
                              </div>
                            </div>
                    </div>

					';

				}
	}

	public function verTripulada(){
		// CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();



				$sql= "SELECT * FROM tripulada";
				$result =  $NewConn->ExecuteQuery($sql);
				while ($row = $NewConn->GetRows($result)) {
					$nombre = $row[1];
					$pais =$row[2];
					$orbita=$row[3];
					$peso=$row[4];
					$img=$row[5];

					echo '
					<div class="col">
							<div class="card mb-3">
                              <img src="'.$img.'" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">'.$nombre.'</h5>
                                <p class="card-text">Peso: '.$peso.'  - Orbita: '.$orbita.'</p>
                                <p class="card-text"><small class="text-muted">Pais: '.$pais.'</small></p>
                              </div>
                            </div>
                    </div>

					';

				}
	}

	public function verNoTripulada(){
		// CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();



				$sql= "SELECT * FROM notripulada";
				$result =  $NewConn->ExecuteQuery($sql);
				while ($row = $NewConn->GetRows($result)) {
					$nombre = $row[1];
					$destino =$row[2];
					$empuje=$row[3];
					$peso=$row[4];
					$img=$row[5];

					echo '
					<div class="col">
							<div class="card mb-3">
                              <img src="'.$img.'" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">'.$nombre.'</h5>
                                <p class="card-text">Peso: '.$peso.'  - Empuje: '.$empuje.'</p>
                                <p class="card-text"><small class="text-muted">Destino: '.$destino.'</small></p>
                              </div>
                            </div>
                    </div>

					';

				}
	}
}
class Buscador{
	//atributos
	public $nombre; 
	public $destino;

	//constructor
	public function __construct($nombre,$destino){
		$this->nombre = $nombre;
		$this->destino = $destino;
	}

	//metodos
	public function buscar(){
		       // CONEXION BASE DATOS
				require_once("conexion/conexion.php");
				$NewConn = new ConnectionMySQL();
				$NewConn->CreateConnection();



				$sql="SELECT * FROM naves WHERE nombre LIKE '%".$this->nombre."%' 
				AND destino LIKE '%".$this->destino."%'";

				$result=$NewConn->ExecuteQuery($sql);
				$contar = mysqli_num_rows($result);

				if($contar == 0){
					echo '<h1>No se ha encontrado resultados para '.$this->nombre.' y para '.$this->destino.'</h1>';
				}else{

				while ($row = $NewConn->GetRows($result)) {
					$nombre = $row[1];
					$empuje =$row[2];
					$destino=$row[3];
					$combustible=$row[4];
					$pais=$row[5];

					echo '
					<div class="col">
							<div class="card mb-3">
                              
                              <div class="card-body">
                                <h5 class="card-title">'.$nombre.'</h5>
                                <p class="card-text">Destino: '.$destino.'  - Empuje: '.$empuje.'</p>
                                <p class="card-text"><small class="text-muted">Combustible: '.$combustible.'</small></p>
                              </div>
                            </div>
                    </div>

					';

				}
			}


	}
}