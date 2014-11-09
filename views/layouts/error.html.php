<?php
use lithium\core\Libraries;
$path = Libraries::get(true, 'path');
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sorted &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style( array(
		'li3/bootstrap.min.css',
		'li3/normalize.css',
		'li3/lithified.css',
		'app.css',
	)); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?= $this->url( array( 'Home::index' ) ); ?>" class="navbar-brand">Home</a>
		</div>
	</div>
</header>

<main class="" id="content" role="main">
	<div class="container">
		<?php echo $this->content(); ?>
	</div>
</main>

<?php echo $this->html->script(array(
	'jquery.min.js',
	'li3/bootstrap.min.js'
)); ?>
</body>
</html>