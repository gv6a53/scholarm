<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<?php foreach($css as $fileName) { ?>
		<?php echo $this->Html->css($css); ?>
	<?php } ?>
</head>
<body>
	<?php
		echo $this->element('admin_header');
		echo $this->Session->flash();
		echo $this->fetch('content');
		echo $this->element('admin_footer');

		foreach($js as $fileName) {
			echo $this->Html->script($fileName);
		}
	?>
</body>
</html>
