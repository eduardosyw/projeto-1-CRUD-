<?php

$id_para_excluir = $_GET['id'];
$arquivo_json = "posts.json";

$json = file_get_contents($arquivo_json);
$posts = json_decode($json, true);

$novos_posts = [];

foreach ($posts as $post) {
    if ($post['id'] != $id_para_excluir) {
        $novos_posts[] = $post;
    }
}

$novo_post = json_encode($novos_posts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

file_put_contents($arquivo_json, $novo_post);

header("Location: posts-lista.php");

?>