
<?php
$this->form->config( array(
	'field' => array(
		'class'	=> 'form-control',
//		'template' => '{:label}{:input}{:error}',
	),
	'submit' => array(
		'class'	=> 'btn btn-default form-control',
	),
	'error' => array(
		'class' => 'text-error subtext italic text-left',
	),
));

$this->title('Login');
?>

<?=$this->form->create( $user, array('id'=>'loginForm') );?>
<?php if( $loginFailed ): ?>
	<div class="error-panel italic subtext text-left">Login failed - please check your credentials</div>
<?php endif; ?>
<?=$this->form->field( 'username', array(
	'label'=>'Username',
	'placeholder'=>'USERNAME',
));?>
<?=$this->form->field( 'password', array(
	'type'=>'password',
	'label' => 'Password',
	'placeholder'=>'PASSWORD',
));?>
<?=$this->form->submit( 'LOGIN' );?>
<?=$this->form->end();?>