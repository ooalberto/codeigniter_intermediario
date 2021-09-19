<a href="/pages/insert" value="add"> <input type="button" value="add" class="btn btn-sucess"> </a>
<table class="table table-hover">
    <thead>
        <th>Nome</th>
        <th>Arquivo</th>
        <th>Zip</th>
    </thead>
    <tbody>
        <?php foreach ($files as $file) : ?>
            
            <td> <?= $file->nome; ?>  </td>
            <td> <a href="<?=base_url('/upload/').$file->arquivo; ?>" target="_blank" rel="noopener noreferrer"> <?= $file->arquivo; ?> </a></td>
            <td> <a href="<?=base_url('/upload/').$file->zip ?>" target="_blank" rel="noopener noreferrer"> <?= $file->zip; ?> </a></td>
            <tr>
        <?php endforeach ?>
    </tbody>
</table>