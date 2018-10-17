<?php
SESSION_START();
$p2 = $_GET["segunda"];
$_SESSION['resposta2'] = $p2;
?>

<html>
<head>
<title>  Perguntas   </title>
<meta charset = "UTF-8">
</head>
<style>
body {
    background-image: url("Fundo.jpg");
}
</style>

<body>
<form action = "Parte4.php" method = "GET">
<p> Perguntas sobre componentes de computador
<p>
<font size="3" face="Verdana" color="white">
<ol>

<p> 3.Qual e o nome desse componente de computador?<br>
<p> <img align ="top" src ="Drive Óptico.jpg"/> 

<li><input type="radio" name= "terceira" value="HDD"/>HDD</li>
<li><input type="radio" name= "terceira" value="Memoria RAM"/>Memoria RAM</li>
<li><input type="radio" name= "terceira" value="Processador"/>Processador</li>
<li><input type="radio" name= "terceira" value="Drive óptico"/>Drive óptico</li>

</ol>
</p>
<input type="submit" name= "submit" value = "Proxima"/>

</form>
</body>
</html>