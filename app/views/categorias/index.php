<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        #abas ul{
            display: inline;
        }

        #abas ul li{
            display: inline-block;
            border: solid 1px #000000;
            padding: 5px;
            border-radius: 10px 0 10px 0;
        }

        .selecionado{
            background-color: #539f9a;
            box-shadow: 3px 3px 3px #366D68;
        }

        #conteudos{
            border: solid 1px black;
            padding: 10px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#abas ul li').addClass("selecionado");
            $("#abas ul li ").click(function () {
                $(this).toggleClass("selecionado");
                var aba_id = $(this).attr('id');
                $('.'+aba_id).toggle();
            })
        });
    </script>
</head>
<body>
<a href="?acao=inserir">Inserir</a>
<div id="abas">
    <ul>
       <?php foreach ($categorias as $categoria): ?>
        <li id="<?=$categoria->getId();?>"><?=$categoria->getNome();?></li>
        <?php endforeach;?>
    </ul>
</div>
<div id="conteudos">
    <table>
        <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Id Cat</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
    <div>
        <tr class="<?=$produto->getIdCategoria();?>">
        <td><?=$produto->getNome();?></td>
        <td><?=$produto->getDescricao();?></td>
        <td><?=$produto->getPreco();?></td>
        <td><?=$produto->getIdCategoria();?></td>
        </tr>
    </div>
        <?php endforeach;?>
    </table>
</div>
</body>
</html>
