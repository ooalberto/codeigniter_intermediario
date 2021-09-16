<a href="/pages/insert" value="add"> <input type="button" value="add" class="btn btn-sucess"> </a>
<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>Página</th>
		<th>Ações</th>
	</thead>
	<tbody>

		<?php foreach ($pages as $page) : ?>
			<td><?php echo $page->id ?></td>
			<td><?php echo $page->title ?></td>
			<td class="text-right">
				<a href="/pages/<?= $page->id ?>">Ver</a> |
				<a href="/pages/<?= $page->id ?>/edit">editar</a>

				

				<form action="/pages/<?php echo $page->id; ?>/delete" style="display: inline-block" METHOD="post">
					<input type="submit" value="remover" class="btn btn-xs btn-danger">
				</form>
			</td>

			<tr>
			<?php endforeach; ?>
	</tbody>
</table>
