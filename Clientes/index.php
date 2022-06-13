<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="imagens/gremio.png">
    <title>Compras</title>

</head>

<body>
    <a href="index.php">Listar Usuários</a><br>

    <h1>Clientes</h1>

    <?php
    $query_usuarios = "SELECT usr.id AS id_usr, usr.nome, usr.email,
                            COUNT(car.usuario_id) AS qnt_compras
                            FROM usuarios AS usr
                            LEFT JOIN carrinhos AS car ON car.usuario_id=usr.id
                            GROUP BY car.usuario_id";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario);
        extract($row_usuario);
        echo "ID do usuário: $id_usr <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        //echo "ID da compra: $id_car <br>";
        echo "Quantidade da compra: $qnt_compras <br>";
        echo "<a href='compras_usuarios.php?id=$id_usr'>Visualizar Compras</a><br>";
        echo "<hr>";
    }

    ?>
</body>

</html>