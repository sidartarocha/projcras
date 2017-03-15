<a href="<?php echo $this->base;?>/usuarios/adicionar" class="btn btn-primary">Adicionar</a>

<?php  
echo $this->Session->flash();
?>

<?php	

if (!empty($usuarios)) { 



	}?>

<table class="table">
	<thead>
		<th><?php echo $this->Paginator->sort('Usuario.nome', "Nome");?></th>
		<th><?php echo $this->Paginator->sort('Usuario.Endereco', "Endereço");?></th>
		<th><?php echo $this->Paginator->sort('Usuario.Bairro', "Bairro");?></th>
		<th><?php echo $this->Paginator->sort('Usuario.Telefone', "Telefone");?></th>
		<th><?php echo $this->Paginator->sort('Usuario.Nis', "Nis");?></th>
		<th><?php echo $this->Paginator->sort('Usuario.Cpf', "CPF");?></th>
		<th><?php echo $this->Paginator->sort('Usuario.Situacao', "Situação");?></th>
	</thead>
	<tbody>
		<?php
			foreach ($usuarios as $usuario) {
		?>
			<tr>
				<td><?php echo $usuario["Usuario"]["Nome"];?></td>
				<td><?php echo $usuario["Usuario"]["Endereco"];?></td>
				<td><?php echo $usuario["Usuario"]["Bairro"];?></td>
				<td><?php echo $usuario["Usuario"]["Telefone"];?></td>
				<td><?php echo $usuario["Usuario"]["Nis"];?></td>
				<td><?php echo $usuario["Usuario"]["Cpf"];?></td>
				<td><?php echo $usuario["Usuario"]["Situacao"];?></td>

			</tr>
		
		<?php } ?>
	</tbody>
</table>