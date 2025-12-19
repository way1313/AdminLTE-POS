<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class AjaxUsuarios{

/*=============================================
EDITAR USUARIO
=============================================*/
	public $idusuario;

	public function ajaxEditarUsuario(){

		$item = "id";
		$valor = $this->idUsuario;
		$respuesta = controladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);

	}


} 

/*=============================================
EDITAR USUARIO
=============================================*/

if(isset($_POST["idUsuario"])){

	$editar = new AjaxUsuarios();
	$editar -> idusuario = $_POST["idUsuario"];
	$editar -> ajaxEditarUsuario();

}

