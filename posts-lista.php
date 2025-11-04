<?php

$arquivo_json = "posts.json";

$posts = json_decode(file_get_contents($arquivo_json), true);

echo "<h1>Lista de Posts</h1>";
echo "<a href='posts-cadastro-form.php'> Novo Post </a>";
?>
<h2>Posts Publicados</h2>
<ul>
    <?php foreach ($posts as $post): ?>
    <li>
        Autor: <?= $post['autor'] ?> <br>
        Título: <?= $post['titulo'] ?> <br>
        Conteúdo: <?= $post['conteudo'] ?> <br>
    </li>
    <?php endforeach; ?>
</ul>