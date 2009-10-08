<?php 
	session_start();


	include('connect.php'); 
	//include('../Funciones/validateInput.php'); 
	function safe($value){
  		return mysql_real_escape_string(strip_tags(trim($value)));
	}

	$categoria = safe($_POST["categoria"]);
 	$pregunta  = safe($_POST["pregunta"]);
 	$respuesta = safe($_POST["respuesta"]);
 	$tipo = safe($_POST["tipo"]);

	//Inserto el FAQ
  	$sql = 'INSERT INTO FAQ (questionFAQ, answerFAQ, tipoFAQ, categoriaFAQ) VALUES ("'.$pregunta.'","'.$respuesta.'","'.$tipo.'","'.$categoria.'");';


 	$result = mysql_query($sql) or die('La insercion del FAQ falló: ' . mysql_error());
 	mysql_close();

	$_SESSION['succes']=true;
	header("Location: ../../../faq/FAQIntroducir.php");

?>
