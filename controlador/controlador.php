<?php






require('../modelo/modelo.php');
if(isset($_POST['tipo'])){



$nombre = $_POST['nombre'];
$empuje = $_POST['empuje'];
$destino = $_POST['destino'];
$combustible = $_POST['combustible'];
$pais = $_POST['pais'];
$tipo = $_POST['tipo'];


	if($_POST['tipo'] =="nave1"){

		$velocidad = $_POST['velocidad'];
		
		$nave1 = new Nave1($nombre, $empuje,$destino,$combustible,$pais,$velocidad);
		$nave1->crear($tipo);

	}else if($_POST['tipo'] =="nave2"){

		$peso = $_POST['peso'];
		
		$nave2 = new Nave2($nombre, $empuje,$destino,$combustible,$pais,$peso);
		$nave2->crear($tipo);
		
	}else if($_POST['tipo'] =="nave3"){

		$altura = $_POST['altura'];
		
		$nave3 = new Nave3($nombre, $empuje,$destino,$combustible,$pais,$altura);
		$nave3->crear($tipo);
		
	}else if($_POST['tipo'] =="nave4"){

		$distancia = $_POST['distancia'];
		
		$nave4 = new Nave4($nombre, $empuje,$destino,$combustible,$pais,$distancia);
		$nave4->crear($tipo);
		
	}


}else if (isset($_POST['buscar']) && $_POST['buscar']=='1') {
	require_once('../modelo/modelo.php');
	class mostrarBuscador{
			public function Mostrar($nombre,$destino){
				$b = new Buscador($nombre,$destino);
				$b->buscar();
			}
		}

}else{

		require_once('../modelo/modelo.php');
		class controladorVerInventario{

			public function controladorLanzadera(){
					$lanzadera = new verInventario();
					$lanzadera->verLanzadera();

		    }
		    public function controladorTripulada(){
					$tripulada = new verInventario();
					$tripulada->verTripulada();

		    }
		    public function controladorNoTripulada(){
					$nTripulada = new verInventario();
					$nTripulada->verNoTripulada();

		    }

		}



}






	






