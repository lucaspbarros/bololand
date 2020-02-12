<?php
include_once('mensagens.php');
if (!empty($_POST)) {
    $nome = trim($_POST["nome"]);
    $descricao = trim($_POST["descricao"]);
    $quantidade = trim($_POST["quant"]);
    $valor = trim($_POST["valor"]);
    $ativo = trim($_POST["ativo"]);
    
    $sql = "insert into produtos (nome, descricao, quantidade, valor, ativo) values ('$nome', '$descricao', '$quantidade', '$valor', '$ativo')";

    //Conecta o banco de dados
    $conn = mysqli_connect(LOCAL, USER, PASS, BASE);
    mysqli_set_charset($conn, "utf8");

    mysqli_query($conn, htmlspecialchars($sql)) or die(mysqli_error($conn));

    if ($sql){
        //echo "<div class='alert alert-success'> Salvo </div>";
        aviso("Salvo");
    } else {
        //echo "<div class='alert alert-danger'> Erro ao salvar! </div>";
        erro("Erro ao Salvar");
    }
}
    ?>


<section class="container bg-black">
    <h3 class="center">Dados dos produtos</h3>
    <form method="post" action="admin.php?pag=prod">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="descricao" required>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quant" required>
        </div>

        <div class="form-group">
            <label>Valor</label>
            <input type="number" class="form-control" name="valor" required>
        </div>

        <div class="form-group">
            <label>Ativo</label>
            <input type="text" class="form-control" name="ativo" required>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn bg-azul branco">Enviar</button>
            <button type="reset" class="btn btn-danger branco">Cancelar</button>
        </div>
    </form>
</section>