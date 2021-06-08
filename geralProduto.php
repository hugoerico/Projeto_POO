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



        <?php foreach ($b as $item) : ?>

            <div class="container w-50">

                <div class="form-control">
                    Nome do Produto: <?php echo ($item['nome']); ?>
                </div>

                <div class="form-control">
                    Preço: <?php echo ($item['preco']); ?>
                </div>

                <div class="form-control">
                    Quantidade: <?php echo ($item['qtde']); ?>
                </div>

                <div class="form-control">
                    Categoria: <?php echo ($item['categoria']); ?>
                </div>
                <div>
                    <form action="cadastros.php" method="post">
                        <input type="number" name="id" value="<?php echo ($item['idProduto']); ?>" style="display: none;">
                        <button class="btn btn-primary" type="submit" name="id_produto">Excluir</button>
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