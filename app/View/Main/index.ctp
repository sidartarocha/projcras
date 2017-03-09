<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Projeto CRAS - Home</title>
	<?php
		echo $this->Html->image('logoCras.jpg');

		
	?>
</head>
<body>
	echo $this->fetch('image');
	<?php echo "teste"; ?>
</body>
</html>