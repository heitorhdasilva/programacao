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
<form action="?acao=update" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?=$prod->getNome();?>">
    <br>
    <label for="descricao">Descricao</label>
    <textarea name="descricao" id="descricao" cols="30" rows="3">
        <?=$prod->getDescricao();?>
    </textarea>
    <br>
    <label for="preco">Preco</label>
    <input type="text" name="preco" value="<?=$prod->getPreco();?>">
    <br>
    <input type="number" hidden value="<?=$_GET['id2'];?>" name="id_categoria">
    <input type="number" hidden value="<?=$_GET['id'];?>" name="id">
    <input type="submit" name="gravar" value="Gravar">
    <a href="?acao=index">Cancelar</a>
</form>
</body>
</html>