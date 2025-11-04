<?php
echo "<h2>Fale conosco</h2>";
echo "<p>Fale conosco se houver qualquer dúvida ou reclamação pelo telefone:</p>";
echo "<p>(69)99297-1992</p>";
?>

<form action="?pg=envia-form" method="post">
    <label>Nome:</label>
    <input type="text" name="nome"> <br>
    <label>E-mail:</label>
    <input type="text" name="email"> <br>
    <label>telefone:</label>
    <input type="number" name="telefone"> <br>
    <label>Mensagem:</label>
    <textarea name="mensagem"></textarea> <br>
    <input type="submit" value="Enviar">
</form>