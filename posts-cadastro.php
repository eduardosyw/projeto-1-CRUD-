<?php

$arquivo_json = "posts.json";

$titulo   = $_POST['titulo'];
$autor    = $_POST['autor'];
$conteudo = $_POST['conteudo'];


if (file_exists($arquivo_json)) {
    $json = file_get_contents($arquivo_json);
    $posts = json_decode($json, true);
    if ($posts == null || !is_array($posts)) {
        $posts = [];
    }
} else {
    $posts = [];
}

$novo_id = count($posts) + 1;
$novo_post = [
    "id" => $novo_id,
    "titulo" => $titulo,
    "autor" => $autor,
    "conteudo" => $conteudo
];

$posts[] = $novo_post;

$novo_post = json_encode($posts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

if (file_put_contents($arquivo_json, $novo_post)) {
    echo "<p>Post '$titulo' cadastrado com sucesso.</p>";
    echo "<p><a href='posts-lista.php'>Listar Posts</a></p>";
} else {
    echo "<h2>Erro ao enviar o formulário.</h2>";
    echo "<p><a href='posts-lista.php'>Listar Posts</a></p>";
}