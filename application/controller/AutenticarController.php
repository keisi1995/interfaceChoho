<?php
class AutenticarController extends Controller
{
	public $abrev = 'autenticar';
	public $url   = 'index.php?c=Autenticar&a=';

	public function __CONSTRUCT()
	{
		parent::__construct();
	}

	public function View()
	{
		$data = obtenerDatos($this);
		$this->contenedor->load->View('seguridad/viewDashboard.php', $data);
	}

	public function Logout()
	{
		session_destroy();
		header('Location: index.php');
	}

	public function Login()
	{
		$usuario      = $_POST['txtUsuario'];
		$clave        = $_POST['txtClave'];
		$chkacuerdate = (($_POST['chkacuerdate'] == '') ? 0 : $_POST['chkacuerdate']);

		if ($usuario == 'admin' && $clave == 'admin') {
			if ($chkacuerdate == 1) {
				//60*60*24*30
				setcookie("usu", $usuario, time() + 60 * 60 * 24 * 7);
				setcookie("pass", $clave, time() + 60 * 60 * 24 * 7);
			} else if ($chkacuerdate == 0) {
				setcookie("usu", "", time() - 3600);
				setcookie("pass", "", time() - 3600);
			}
			$_SESSION['result'] = array('message' => '', 'items' => array(), 'success' => true);
		} else {
			$_SESSION['result'] = array('message' => 'La contraseña que has introducido es incorrecta.', 'success' => false);
		}

		header('Location: index.php');
	}
}
