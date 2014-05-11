<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style( array(
		'min/app.css',
	)); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>


<!-- MAIN CONTENT -->
<?php echo $this->content(); ?>


<!-- SCRIPTS -->
<?php echo $this->html->script( array(
	'min/jquery.min.js',
	'min/modernizr.js',
//	'//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',	// TODO PRODUCTION: uncomment
//	'//ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js',
	'min/app-ck.js',
)); ?>
</body>
</html>