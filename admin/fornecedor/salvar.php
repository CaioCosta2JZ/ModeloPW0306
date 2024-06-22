<div class="col-md-6 col-sm-12">
    <h3>Salvar fornecedor</h3>
</div>

<div class="col-md-12 col-sm-12">
    <form method="post" enctype="multipart/form-data" name="frmCadastro" id="frmcadastro">    
        <div class="form-group">
            <label>#</label>
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="txtnome" id="txtnome" placeholder="Informe a categoria" maxlength="50" minlength="3" value="" />
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="txtdescricao" id="txtdescricao" rows="3" placeholder="Informe a descrição"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="btnsalvar" id="btnsalvar" value="Salvar" />
        </div>    
    </form>
</div>

<?php
if (filter_input(INPUT_POST, 'btnsalvar')) {
    $nome = filter_input(INPUT_POST, 'txtnome');
    $descricao = filter_input(INPUT_POST, 'txtdescricao');

    $dados = array(
        'nome' => $nome,
        'descricao' => $descricao
    );

    include_once '../class/Fornecedor.php';
    $for = new Fornecedor();

    $for->setJsonDados(json_encode($dados));

    $msg = $for->salvar() === true ? "Erro" : "Dados salvos";

    echo '<div class="alert alert-primary mt-3" role="alert">'
    . $msg
    . '</div>';
}

