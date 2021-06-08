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
                    Nome do Produto
                    <input class="form-control" type="text" name="nome">
                </label>
                <label class="col-md-3">
                    Preço
                    <input class="form-control" type="text" name="preco">
                </label>
                <label class="col-md-3">
                    Quantidade
                    <input class="form-control" type="number" name="qtde">
                </label>
            </div> <!-- form-row-->
            <div class="form-row">
                <label class="col-md-4">
                    Categoria
                    <select class="form-control" name="categoria">
                        <option>Livros</option>
                        <option>Eletronicos</option>
                        <option>Informática</option>
                    </select>
                </label>
            </div> <!-- card-row -->
            <button class="btn btn-primary" type="submit" name="cadastro_produto">
                <i class="fa fa-save"></i> Cadastrar</button>
        </form>
    </section>

    <?php
    include 'layout/footer.php';
    ?>

</body>

</html>