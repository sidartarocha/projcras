<a href="<?php echo $this->base; ?>" class="btn btn-primary">Voltar</a>

<?php


echo $this->Form->create("Usuario" array("id", array( 'id' => 'form', 'class' => 'validate col-lg-6 col-md-6 col-sm-6 col-xs-12', 'inputDefaults' => array( 'error' => array( 'attributes' => array('class' => 'msg msg-falha clearfix meia-largura') ) ) ) );
	echo $this->Form->input( "Usuario.nome",array( 'empty' =>array(""=>"Selecione a categoria") , 'class' => 'form-control', 'div' => 'form-group'));
	echo $this->Form->input( "Usuario.endereco",  		array( 'class' => 'form-control', 'div' => 'form-group'));
	
	echo $this->Form->submit( "Salvar", 			array( 'class' => 'btn btn-primary btn-large'));
	echo $this->Form->end();

?>