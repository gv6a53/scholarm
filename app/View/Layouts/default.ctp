<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<?php echo $this->Html->css($css); ?>
</head>
<body>
	<?php echo $this->element('header'); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('footer'); ?>
	<?php echo $this->Html->script($js); ?>
</body>
</html>
