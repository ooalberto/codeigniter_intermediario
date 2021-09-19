<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>Página</th>
		<th>Ações</th>
	</thead>
	<tbody>

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

	</tbody>
</table>