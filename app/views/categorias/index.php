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
    <h1>Categorias</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome da Categoria</th>
        </tr>
        <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?= $categoria->getId();?></td>
            <td><?= $categoria->getNome();?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
