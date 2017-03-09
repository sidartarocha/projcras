<?php 
App::uses('AppController', 'Controller');
class MainController extends AppController{

	public function index()
	{
		
	}



	public function adicionar() {
		
		if ($this->request->is('post')) {
			
			$this->Usuario->create();
			
			if ($this->Usuario->save($this->request->data)) {
				
				$this->Session->setFlash('Usuario Saved!', "Flash/sucesso");
				
				return $this->redirect('/');
			}
		}
		
		//$categorias = $this->Usuario->Categoria->find('list', array('fields' => 'Categoria.id, Categoria.nome') );
		
		//$this->set( 'categorias', $categorias );
	}
}
?>