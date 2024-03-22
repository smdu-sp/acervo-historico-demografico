<?php
$hostname_atlas = "";
$database_atlas = "";
$username_atlas = "";
$password_atlas = "";
$conexao_atlas = mysqli_connect("p:" . $hostname_atlas, $username_atlas, $password_atlas);

/* checa a conexão */
if (mysqli_connect_errno()) {
    printf("Erro na conexão com o banco de dados: %s\n", mysqli_connect_error());
    exit();
}

mysqli_select_db($conexao_atlas, $database_atlas);
mysqli_set_charset($conexao_atlas, "utf8mb4");

?>
