<div class="col-sm-12 col-md-6">

    <h3 class="mb-4">Cálculo de valores inteiros</h3>
    <form name="frmcadastro" id="frmcadastro" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Valor 1</label>
            <input type="number" class="form-control" id="txtvalor1" name="txtvalor1">                                                 
        </div>                 
        <div class="form-group">
            <label for="exampleInputEmail1">Valor 2</label>
            <input type="number" class="form-control" id="txtvalor2" name="txtvalor2">                                                 
        </div>
        <input type="submit" value="Calcular" name="btncalcular" class="btn btn-primary" id="btncalcular">
    </form>

    <?php
    if (filter_input(INPUT_POST, 'btncalcular')) {
        $valor1 = filter_input(INPUT_POST, 'txtvalor1');
        $valor2 = filter_input(INPUT_POST, 'txtvalor2');
        $soma = $valor1 + $valor2;
        echo '<div class="alert alert-success mt-3" role="alert">'
        . 'O resultado é '
        . $soma
        . '</div>';

        if ($valor1 > $valor2) {
            $msg = "o valor " . $valor1 . " é maior.";
        } else if ($valor2 > $valor1) {
            $msg = "o valor " . $valor2 . " é maior.";
        } else {
            $msg = "os valores são iguais.";
        }

        echo '<div class="alert alert-danger mt-3" role="alert">'
        . $msg
        . '</div>';
    }
    ?>

</div>            
