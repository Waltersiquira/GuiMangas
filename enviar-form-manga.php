<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiMangás</title>
</head>
<body>
    <?php
    require_once 'includes/lojas.php';
    $n = $_GET['nome'];
    $d = $_GET['descricao'];
    $p = $_GET['preco'];
    $i = $_GET['imagem'];
    if ($l->query("INSERT INTO `mangas` (`id`, `nome`, `descrição`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$d', '$p', '$i')") == true){
        echo "Mangá adcionado com sucesso";
    } else {
        echo 'error';
    }
    ?>
</body>
</html>