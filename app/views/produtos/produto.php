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
<h1>Categoria</h1>
<table>
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Descricao</th>
    </tr>
    <tr>
        <td><?=$produto->getId()?></td>
        <td><?=$produto->getNome()?></td>
        <td><?=$produto->getDescricao()?></td>
        <td><?=$produto->getPreco()?></td>
        <td><?=$categoria->getNome()?></td>
    </tr>

</table>
<a href="categorias.php">Voltar</a>
</body>
</html>
