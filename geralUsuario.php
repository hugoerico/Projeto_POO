<?php
include 'layout/cabecalho.php';
include 'retorno.php';

?>

<style>
    body {
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

        <?php foreach ($a as $item) : ?>

            <div class="container w-50">

                <div class="form-control">
                    Nome Completo: <?php echo ($item['nomec']); ?>
                </div>
                <div class="form-control">
                    E-mail: <?php echo ($item['email']); ?>

                </div>
                <div>
                    <form action="cadastros.php" method="post">
                        <input type="number" name="id" value="<?php echo ($item['idusuario']); ?>" style="display: none;">
                        <button class="btn btn-primary" type="submit" name="id_usuario">Excluir</button>
                    </form>
                    <br>
                    <br>
                </div>

            </div>

        <?php endforeach; ?>

    </section>

    <?php
    include 'layout/footer.php';

    ?>

</body>

</html>