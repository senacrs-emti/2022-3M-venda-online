<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Compra</title>

</head>

<body>
    <a href="index.php">Listar Usuários</a><br>

    <h1>Listar as Compras</h1>

    <?php
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    $query_carrinhos = "SELECT car.id AS id_car,
                        COUNT(prd_car.carrinho_id) AS qnt_prod,
                        SUM(prd_car.preco_venda) AS val_total
                        FROM carrinhos AS car
                        LEFT JOIN produtos_carrinhos AS prd_car ON prd_car.carrinho_id = car.id
                        WHERE car.usuario_id = $id
                        GROUP BY prd_car.carrinho_id";

    $result_carrinhos = $conn->prepare($query_carrinhos);
    $result_carrinhos->execute();

    while ($row_carrinho = $result_carrinhos->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_carrinho);
        extract($row_carrinho);
        echo "Id do carrinho: $id_car <br>";
        echo "Quantidade de produto no carrinho: $qnt_prod <br>";
        echo "Valor total do carrinho: R$ " . number_format($val_total, 2, ",", ".") . " <br>";
        echo "<hr>";
    }
    ?>
</body>

</html>