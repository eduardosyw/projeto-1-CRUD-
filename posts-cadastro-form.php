<?php

$arquivo = "posts.json";
echo "<h2>Cadastro de Posts</h2>";
?>

<form method="post" action="posts-cadastro.php">
    <label>Autor</label>
    <input type="text" name="autor"><br>
    <label>Título</label>
    <input type="text" name="titulo"><br>
    <label>Conteúdo</label>
    <input type="text" name="conteudo"><br>

    <input type="submit" value="Salvar Post">
</form>