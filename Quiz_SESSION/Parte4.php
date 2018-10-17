<?php
SESSION_START();
$p3 = $_GET["terceira"];
$_SESSION['resposta3'] = $p3;
?>

<html>
<head>
<title>  Perguntas  </title>
<meta charset = "UTF-8">
</head>
<style>
body {
    background-image: url("Fundo.jpg");
}
</style>

<body>
<form action = "Parte5.php" method = "GET">
<p> Perguntas sobre componentes de computador
<p>
<font size="3" face="Verdana" color="white">
<ol>

<p> 4.Qual e o nome desse componente de computador?<br>
<p> <img align ="top" src ="Processador.jpg"/> 

<li><input type="radio" name= "quarta" value="HDD"/>HDD</li>
<li><input type="radio" name= "quarta" value="Memoria RAM"/>Memoria RAM</li>
<li><input type="radio" name= "quarta" value="Processador"/>Processador</li>
<li><input type="radio" name= "quarta" value="Drive óptico"/>Drive óptico</li>

</ol>
</p>

<input type="submit" name= "submit" value = "Proxima"/>

</form>

</body>
</html>