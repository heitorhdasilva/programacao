<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="?acao=inserir">Inserir</a>
<a href="categorias.php">Categorias</a>
<h1>Produtos</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome dos Produtos</th>
        <th>Preco</th>
    </tr>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto->getId();?></td>
            <td><a href="?acao=listar&id=<?= $produto->getId();?>"><?= $produto->getNome();?></a></td>
            <td><?= $produto->getPreco();?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>