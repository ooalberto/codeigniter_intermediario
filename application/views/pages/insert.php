<?php echo validation_errors(); ?>
<form action="insert" method="post">
	<div class="form-group">
		<label for="title">Digite o titulo aqui</label>
		<input type="text" name="title" class="form-control" placeholder="Seu titulo aqui..">
	</div>
	<div class="form-group">
		<label for="title">Digite o conteudo aqui</label>
		<textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="seu conteudo aqui"></textarea>
	</div>
	<input type="submit" value="enviar" class="btn btn-primary">
</form>
