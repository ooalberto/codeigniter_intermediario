<?php echo validation_errors(); ?>
<form action="/pages/<?=$page->id?>/edit" method="post">
	<div class="form-group"> 
		<label for="title">Digite o titulo aqui</label>
		<input type="text" name="title" class="form-control" placeholder="Seu titulo aqui.." value="<?php echo $page->title?>">
	</div>
	<div class="form-group">
		<label for="title">Digite o conteudo aqui</label>
		<textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="seu conteudo aqui"><?=$page->body?></textarea>
	</div>
	<input type="submit" value="salvar" class="btn btn-primary">
	
</form> 
