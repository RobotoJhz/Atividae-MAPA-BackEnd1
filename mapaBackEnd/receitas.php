<?php
include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmitas</title>
    <link rel="stylesheet" type="text/css" href="mapastilo.css"/>
</head>

<header>
    <h1>Marmitas</h1>
    <nav id="menu">
        <ul>
            <li>Home</li>
            <li>Blog</li>
            <li>Conheça Dona Rita</li>
            <li>Contato</li>
        </ul>
    </nav>
</header>

<nav id="meio">
    <img src="imagem/rita.jpg">
    <h2>Venha para a casa da Dona Rita, e escolha a sua marmita!!!</h2>
</nav>

<div id="fundo">
    <h4>Confira nossas marmitas</h4>
        <p>Aqui você encontra o nosso cardápio das marmitas</p>
<?php
    $id =$_GET['id'];
foreach ($receita as $keys => $value){
    if($value['id'] == $id){
?>
<nav id="me">
    <article id="receitas">
        <p style="text-align: center; font-size: 30px; "><b><?=$value['preco'];?></b><br><?=$value['tamanho'];?></p>
        <a href="#"><img src="<?=$value['imagem'];?>"/></a><h2><?=$value['titulo'];?></h2>
        <p><strong>Ingredientes:<br></strong><br><?=$value['ingredientes'];?></p>
    </article>
</nav>
        <a href="index.php"><p>Voltar a pagina inicial</p></a>
<?php
}
}
?>
</div>

<footer>
    <h3>Quer saber mais?</h3>
    <nav id="rodape">
        <article>
            <p><p><strong>Links Úteis</strong></p>
            <p>Política de Privacidade</p>
            <p>Aviso Legal</p>
            <p>Termos de Uso</p>
            <p><strong>Sobre o Projeto</strong></p>
            <p>Projeto de Divulgação das marmitas da Dona Rita</p>
        </article>
    </nav>
    <hr size="1">
        <p>Desenvolvido por Roni Luiz Teixeira</p>
        <p>RA: 22203706 - 5</p>
</footer>
</body>
</html>