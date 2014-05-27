<?php include('_functions.php') ?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="author" content="Deva">
<title>Devanaguide</title>
<link type="text/css" href="css/estilos.css" rel="stylesheet" charset="utf-8">
<body class="signos">
	<div class="header">
		<h1>Devanaguide</h1>
		<p>Huerta Tipográfica</p>
	</div>
	<div class="menu">
	<?
	foreach ($signo as $glifo){
		if($glifo['char']!='None'){
		echo '<a href="glyph.php?nombre='.$glifo['nombre'].'" title="'.$glifo['nombre'].'"><span class="char">'.uni($glifo['char']).'</span><span class="nombre">'.$glifo['nombre'].'</span></a>'."\n";
		#echo $glifo['nombre'];
	}
	};
	?>
	</div>
	<div class="header">
		<p>Vesion 0.1 | Desarrollado por Andrés Torresi | Huerta Tipográfica (andres@huertatipografica.com) | <a href="deva.zip">Descargar sitio</a></p>
		<p>Podés descargar y modificar este software | Feel free to modify this software</p>
		<h2>Ayuda / Help</h2>
		<p>Pon tus fuentes devanagari en la carpeta «fonts» | Put your devanagari fonts in «fonts» folder</p>
		<p>Usando informacion de glifos del archivo signos.txt | Using glyphs info from signos.txt file</p>
		<p>Dictionary words from <a href="http://sanskritdocuments.org/hindi/dict/eng-hin_unic.html">http://sanskritdocuments.org/hindi/dict/eng-hin_unic.html</a></p>
		<p>Mostrando solo glifos con unicode | Showing only unicode glyphs</p>
	</div>
</body>