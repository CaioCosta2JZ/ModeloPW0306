<div class="col-md-6 col-sm-12">
    <h3>Listar produto</h3>
</div>
<div class="col-md-6 col-sm-12">
    <a href="?p=produto/salvar" class="btn btn-outline-primary float-right">
        Adicionar
    </a>
</div>

<table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include_once '../class/Produto.php';
        $pro = new Produto();
        $listar = $pro->listar();

        if (!empty($listar)) {
            foreach ($listar as $chave => $mostrar) {
                ?>
                <tr>
                    <th scope="row"><?= $chave ?></th>
                    <td><?= $mostrar['nome'] ?></td>
                    <td><?= $mostrar['descricao'] ?></td>
                    <td>
                    <a href="?p=produto/excluir&id=<?= $chave ?>" 
                           class="btn btn-danger" data-confirm>
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                        <a href="?p=produto/salvar" class="btn btn-success">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>


    </tbody>
</table>
