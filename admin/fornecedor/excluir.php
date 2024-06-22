<?php
$id = filter_input(INPUT_GET, 'id');

include_once '../class/Categoria.php';
$for = new Fornecedor();

//$msg = $cat->excluir($id) === 'null' ? 'Excluído' : 'Erro ao excluir';

if ($for->excluir($id) === 'null') {
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
<meta http-equiv="refresh" content="0.5;URL=?p=forncedor/listar">