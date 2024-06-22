<?php
$id = filter_input(INPUT_GET, 'id');

include_once '../class/Cliente.php';
$cli = new Cliente();

//$msg = $cat->excluir($id) === 'null' ? 'Excluído' : 'Erro ao excluir';

if ($cli->excluir($id) === 'null') {
    $msg = 'Excluído';
} else {
    $msg = 'Erro ao excluir';
}
?>
<div class="col-md-12 col-sm-12">
    <div class="alert alert-warning" role="alert">
        <?= $msg ?>
    </div>
</div>
<meta http-equiv="refresh" content="0.5;URL=?p=cliente/listar">