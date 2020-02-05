<?php

function dao($sql)
{
    //Conecta no banco de dados
    $conn = mysqli_connect(LOCAL, USER, PASS, BASE);

    //Define o padrão de caracteres que irão para o banco de dados (acentuação)
    mysqli_set_charset($conn, "utf8");

    //Mostra a linha do SQL
    var_dump("SQL: " . $sql);

    //Busca os dados do banco de dados
    $result = mysqli_query($conn, htmlspecialchars($sql)) or die(mysqli_error($conn));

    //Limpa a variavel de resultados
    //mysqli_free_result($result);

    //fecha conexão com o banco de dados
    mysqli_close($conn);

    //Return os dados
    return $result;
}
