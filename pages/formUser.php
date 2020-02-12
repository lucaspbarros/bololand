<?php
include_once('mensagens.php');
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

    $sqlUser = "insert into usuario (nome, email, tel, numero, complemento, senha, cep) values ('$nome', '$email', '$tel', '$numero', '$complemento', '$senha', '$cep')";

    $sqlCep = "select cep from endereco where cep = $cep";
    
    //Conecta o banco de dados
    $conn = mysqli_connect(LOCAL, USER, PASS, BASE);
    mysqli_set_charset($conn, "utf8");

    //Busca do CEP - Endereco
    $result = mysqli_query($conn, htmlspecialchars($sqlCep)) or die(mysqli_error($conn));
     
    if (mysqli_num_rows($result) == 0) {
        //Cadastro do CEP - Endereco
        mysqli_query($conn, htmlspecialchars($sql)) or die(mysqli_error($conn));
    }
    //Cadastro do Usuario
    $salvo = mysqli_query($conn, htmlspecialchars($sqlUser)) or die(mysqli_error($conn));
    if ($salvo){
        //echo "<div class='alert alert-success'> Salvo </div>";
        aviso("Salvo");
    } else {
        //echo "<div class='alert alert-danger'> Erro ao salvar! </div>";
        erro("Erro ao Salvar");
    }

    mysqli_close($conn);
}

?>

<section class="container bg-branco">
    <h3 class="center">Dados do usuário</h3>
    <form method="post" action="index.php?pag=cad">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" required>
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
            <input type="text" class="form-control" name="cep" maxlength="9" id="cep" onblur="pesquisacep(this.value);" required>
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" class="form-control" name="logradouro" maxlength="100" id="rua">
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