<?php  

App::uses('AppController', 'Controller');

class UsuariosController extends AppController
{

	public $uses = array("Usuario");

	public $components = array('Paginator');

	public function index()
	{
		//$this->Paginator->settings = $this->paginate;

		//$this->Usuario->recursive = -1;

		$usuarios = $this->Usuario->find('all');

		$this->set('usuarios', $usuarios);
	}
	
	
}

?>