<?php

if (!empty($_POST)) {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $tel = trim($_POST["tel"]);
    $numero = trim($_POST["numero"]);
    $complemento = trim($_POST["complemento"]);
    $senha = trim($_POST["senha"]);
    $cep = trim($_POST["cep"]);
    $logradouro = trim($_POST["logradouro"]);
    $bairro = trim($_POST["bairro"]);
    $cidade = trim($_POST["cidade"]);
    $uf = trim($_POST["uf"]);


    $sql = "insert into endereco (cep, logradouro, bairro, cidade, uf) values ('$cep' , '$logradouro', '$bairro', '$cidade', '$uf')";

    $sqlUser = "insert into usuario (nome, email, tel, numero, complemento, senha, cep) value ('$nome', '$email', '$tel', '$numero', '$complemento', '$senha', '$cep')";

    $sqlCep= "select cep from endereco where cep = $cep";

    //conecta o banco de dados
    $conn = mysqli_connect(LOCAL, USER, PASS, BASE);
    mysqli_set_charset($conn, "utf8");

    //cadastro do cep - endereco
    $result = mysqli_query($conn, htmlspecialchars($sqlCep)) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) == 0) {
        //cadastro do cep - endereco
        $result = mysqli_query($conn, htmlspecialchars($sql)) or die(mysqli_error($conn));
    }

    //cadasto do usuario
    $salvo = mysqli_query($conn, htmlspecialchars($sqlUser)) or die(mysqli_error($conn));
    if ($salvo){
        echo "<div class='alert-success'> Salvo </div>";
    } else {
        echo "<div class='alert-success'> Erro ao salvar! </div>";
    }
    mysqli_close($conn);
}

?>

<section class="container bg-branco">
    <h3 class="center">Dados do usuário</h3>
    <form method="post" action="index.php?pag=cad">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control" name="tel">
        </div>
        <div class="form-group">
            <label>Numero</label>
            <input type="text" class="form-control" name="numero">
        </div>
        <div class="form-group">
            <label>Complemento</label>
            <input type="text" class="form-control" name="complemento">
        </div>

        <div class="form-group">
            <label>CEP</label>
            <input type="text" class="form-control" name="cep" maxlength="9" id="cep" onblur="pesquisacep(this.value);">
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" class="form-control" name="logradouro" maxlength="150" id="rua">
        </div>
        <div class="form-group">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" maxlength="50" id="bairro">
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade" maxlength="50" id="cidade">
        </div>
        <div class="form-group">
            <label>Estado</label>
            <input type="text" class="form-control" name="uf" maxlength="2" id="uf">
        </div>

        <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" name="senha">
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn bg-azul branco">Enviar</button>
            <button type="reset" class="btn btn-danger branco">Cancelar</button>
        </div>

    </form>
</section>