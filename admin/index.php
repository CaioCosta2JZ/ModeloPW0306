<!DOCTYPE html>
<html>
    <head>
        <?php include_once 'cabecalho.php'; ?>
    </head>
    <body>

        <?php include_once 'navegacao.php'; ?>

        <div class="container mt-4">
            <div class="row">
                <?php
                $pagina = filter_input(INPUT_GET, 'p');
                if (empty($pagina)) {
                    include_once 'home.php';
                } else {
                    if (file_exists($pagina . '.php')) {
                        include_once $pagina . '.php';
                    } else {
                        echo "<div class='col-sm-12 col-md-12'>"
                        . "<div class='alert alert-danger' role='alert'>"
                        . "Erro 404, página não encontrada!"
                        . "</div>"
                        . "</div>";
                    }
                }
                ?>
            </div><!-- -->
        </div>

        <?php include_once 'scripts.php'; ?>

    </body>
</html>
