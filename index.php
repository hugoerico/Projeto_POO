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
        <form action="cadastros.php" method="post">
            <div class="form-row">
                <label class="col-md-6">
                    Nome Completo
                    <input class="form-control" type="text" name="nomeco">
                </label>
                <label class="col-md-3">
                    E-mail
                    <input class="form-control" type="text" name="email1">
                </label>
                <label class="col-md-3">
                    Senha
                    <input class="form-control" type="password" name="senha1">
                </label>
            </div> <!-- form-row-->
            <div class="form-row">
                <label class="col-md-6">
                    Endereço
                    <input class="form-control" type="text" name="endereco">
                </label>
                <label class="col-md-4">
                    Forma de Pagamento
                    <select class="form-control" name="categoria1">
                        <option>Cartao de Credito</option>
                        <option>Cartao de Debito</option>
                        <option>Boleto</option>
                        <option>Dinheiro</option>
                    </select>
                </label>
                <label class="col-md-3">
                    Senha do Cartao
                    <input class="form-control" type="password" name="senhadocartao">
                </label>
            </div> <!-- form-row-->



            <button class="btn btn-primary" type="submit" name="cadastro_cliente">
                <i class="fa fa-save"></i> Confirmar Cadastro</button>

        </form>
    </section>
    <?php
    include 'layout/footer.php';

    ?>

</body>

</html>