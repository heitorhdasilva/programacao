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
        <td><?=$categoria->getId()?></td>
        <td><?=$categoria->getNome()?></td>
        <td><?=$categoria->getDescricao()?></td>
    </tr>
</table>
<a href="categorias.php?acao=update&id=<?= $categoria->getId()?>">Update</a>
<a href="categorias.php?acao=delete&id=<?= $categoria->getId()?>">Delete</a>
<a href="categorias.php">Voltar</a>
<h2>Produtos da categoria <?=$categoria->getNome();?></h2>
<table>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Preco</th>
    </tr>
    <tr>

        <td><?=$produto->getId();?></td>
        <td><a href="produtos.php?acao=listar&id=<?=$produto->getId()?>&id1=<?=$categoria->getId()?>"><?=$produto->getNome();?></a></td>
        <td><?=$produto->getDescricao();?></td>
        <td><?=$produto->getPreco();?></td>
        <td><a href="produtos.php?acao=deletar&id=<?=$produto->getId();?>">Deletar</a></td>
        <td><a href="produtos.php?acao=update&id=<?=$produto->getId();?>&id2=<?=$categoria->getId();?>">Update</a></td>

    </tr>
    <?php  endforeach; ?>

</table>
<a href="produtos.php?acao=inserir&id=<?=$categoria->getId()?>">Inserir novo produto de <?=$categoria->getNome();?></a>
</body>
</html>
