
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

<?php
SESSION_START();
$p1 = $_GET["primeira"];
$_SESSION['resposta1'] = $p1;

?>

<form action = "Parte3.php" method = "GET">
<p> Perguntas sobre componentes de computador
<p>
<font size="3" face="Verdana" color="white">
<ol>

<p> 2.Qual e o nome desse componente de computador?<br>
<p> <img align ="top" src ="HDD.jpg"/> 

<li><input type="radio" name= "segunda" value="HDD"/>HDD</li>
<li><input type="radio" name= "segunda" value="Memoria RAM"/>Memoria RAM</li>
<li><input type="radio" name= "segunda" value="Processador"/>Processador</li>
<li><input type="radio" name= "segunda" value="Drive óptico"/>Drive óptico</li>

</ol>
</p>
<input type="submit" name= "submit" value = "Proxima"/>

</form>
</body>
</html>