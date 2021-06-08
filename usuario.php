<?php
include 'layout/cabecalho.php';

?>

<style>
body{
    margin: 0cm;
    width: 100%;
    min-height: 100vh;
    display: flex; 
    flex-direction: column;
    font-family: 'Open Sans', sans-serif;
}
</style>

<body>
    <section class="container">
        <form action="cadastros.php" enctype="multipart/form-data" method="POST">
            <div class="form-row">
                <label class="col-md-6">
                    Nome Completo
                    <input class="form-control" type="text" name="nomec">
                </label>
                <label class="col-md-3">
                    E-mail
                    <input class="form-control" type="text" name="email">
                </label>
                <label class="col-md-3">
                    Senha
                    <input class="form-control" type="password" name="senha">
                </label>
            </div> <!-- form-row-->

            <button class="btn btn-primary" type="submit" name="cadastro_usuario">
                <i class="fa fa-save"></i> Cadastrar</button>
        </form>
    </section>

    <?php
    include 'layout/footer.php';

    ?>

</body>

</html>