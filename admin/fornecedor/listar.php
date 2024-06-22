<div class="col-md-6 col-sm-12">
    <h3>Listar fornecedores</h3>
</div>
<div class="col-md-6 col-sm-12">
    <a href="?p=fornecedor/salvar" class="btn btn-outline-primary float-right">
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
        include_once '../class/Fornecedor.php';
        $for = new Fornecedor();
        $listar = $for->listar();

        if (!empty($listar)) {
            foreach ($listar as $chave => $mostrar) {
                ?>
                <tr>
                    <th scope="row"><?= $chave ?></th>
                    <td><?= $mostrar['nome'] ?></td>
                    <td><?= $mostrar['descricao'] ?></td>
                    <td>
                        <a href="?p=fornecedor/excluir&id=<?= $chave ?>" 
                           class="btn btn-danger" data-confirm>
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                        <a href="?p=fornecedor/salvar" class="btn btn-success">
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
