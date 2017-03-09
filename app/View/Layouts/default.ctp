<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Projeto CRAS - CakePhp</title>
	<?php
		echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		echo $this->fetch('css');
	?>
</head>
<body>
	<div class="container">
		
		<?php echo $this->element('menu'); ?>
	
		<?php echo $this->fetch('content'); ?>
	</div>
	
	<?php echo $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"); ?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>