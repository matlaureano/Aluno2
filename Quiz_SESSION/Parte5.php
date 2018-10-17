

<html>
<head>
</head>
<style>
body {
    background-image: url("Fundo.jpg");
}
</style>
<body>

<?php
SESSION_START();
$p4 = $_GET["quarta"];
$_SESSION['resposta4'] = $p4;


$_SESSION['Quantidade'] = 0;

if ($_SESSION['resposta1'] == "Memoria RAM")
	{++$_SESSION['Quantidade'];}
if ($_SESSION['resposta2'] == "HDD")
	{++$_SESSION['Quantidade'];}
if ($_SESSION['resposta3'] == "Drive óptico")
	{++$_SESSION['Quantidade'];}
if ($_SESSION['resposta4'] == "Processador")
	{++$_SESSION['Quantidade'];}


echo "<font size=\"3\" face=\"Verdana\" color=\"white\">";

echo "<h>Respostas certas<br> Pergunta 1: Memoria RAM <br> Pergunta 2: HDD <br> Pergunta 3: Drive óptico <br> Pergunta 4: Processador <br><br><br>
<h>"; 
echo "<h> Respostas certas: ", $_SESSION['Quantidade'], ".";
echo "</font>";

?>

</body>
</html>