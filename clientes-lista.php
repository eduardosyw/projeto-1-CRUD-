<?php

$arquivo_json = "clientes.json";

$clientes = json_decode(file_get_contents($arquivo_json), true);

echo "<h1>Lista de Clientes</h1>";
echo "<a href='clientes-cadastro-form.php'> Cadastrar Clientes </a>";
?>
<h2>Lista de Clientes</h2>
<ul>
    <?php foreach ($clientes as $cliente): ?>
    <li>
        Nome: <?= $cliente['nome'] ?> <br>
        E-mail: <?= $cliente['email'] ?> <br>
        Telefone: <?= $cliente['telefone'] ?> <br>
        Cidade: <?= $cliente['cidade'] ?> <br>
        Estado: <?= $cliente['estado'] ?> <br>
    </li>
    <?php endforeach; ?>
</ul>