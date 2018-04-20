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
    <form action="categorias.php">
        <input type="name" value="<?=$cat->getNome();?>">
        <input type="descricao" value="<?=$cat->getDescricao();?>">
        <input type="hidden" value="<?=$cat->getId()?>">
        <input type="submit" name="gravar">
    </form>
</body>
</html>
