 <?php  echo validation_errors(); ?>
<!--<form action="insert" method="post">
	<div class="form-group">
		<label for="title">Digite o titulo aqui</label>
		<input type="text" name="title" class="form-control" placeholder="Seu titulo aqui..">
	</div>
	<div class="form-group">
		<label for="title">Digite o conteudo aqui</label>
		<textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="seu conteudo aqui"></textarea>
	</div>
	<input type="submit" value="enviar" class="btn btn-primary">
</form> -->
<?php

isset($erros)? $erros:'';
echo form_open('pages/novo');

echo form_input(array(
	"name" => 'email',
	"type" => 'eamil',
	'class' => 'form-control',
	"placeholder" => "inserir um e-mail valido"
));

echo form_input(array(
	"name" => "nome",
	"type" => "text",
	"class" => "form-control",
	"placeholder"=> "digite seu nome"
));

echo form_input(array(
	"name"=>"senha",
	"type"=>"password",
	"class"=>"form-control",
	'placeholder'=>"Digite seu login"
));

echo form_submit("submit","Cadastrar",array("class"=>"btn btn-success"));


echo form_close('');
?>
