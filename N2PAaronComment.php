<html lang="es">
	<?php
	session_start();
	$_SESSION['user'] = $_POST['user'] ?? 'null';
	$_SESSION['userpass'] = $_POST['pass'] ??	'null';
	$_SESSION['authuser'] = 0;
	$_SESSION['form']=$_SESSION['form'] ?? '0';
	$_COOKIE['usercookie'] = $_COOKIE['usercookie'] ?? 'null';
	
	

	if ((($_SESSION['user'] == "Aaron") && ($_SESSION['userpass'] == 1234)) || ($_COOKIE['usercookie']==1)){
		$_SESSION['authuser'] = 1;

	}

	if (($_SESSION['authuser'] != 1) && ($_COOKIE['usercookie']!=1)){
		echo 'Lo siento pero no tienes permisos para esta pagina, debes <a href="N2PLogin.php"> "Logearte"</a>';
		exit();     
	}
?>
    <head>
        <meta charset="utf-8">
        <title>Comentario Practica 2 Aaron</title>
    </head>
    <body>
		 <?php
			date_default_timezone_set('Europe/Madrid');
			$day= date('d');
			$month = date('m');
			$year = date('y');
			echo "<h3>Fecha: ".$day."-".$month."-".$year."</h3>";


			if(!$_SESSION['form']):
		 ?>
			 <form method="post" action="/N2PAaronComment.php">

			   <p> Nombre profesor:
				<input type="text" name="profe" value=""/>
			   </p>
			   <p>Nombre Alumno
				<input type="text" name="alumno" value="" />
			   </p>
			   <p>NotaDoc: 
				<input type="number" name="notadoc"  min="1" max="10" value="#"/>
			   </p>
				<p>Nota Alumno: 
				<input type="number" name="notaalumno"  min="1" max="10" value="#"/>
			   </p>
				<p>Nota Profesor Explicación:
				<input type="number" name="notaprofe" min="1" max="10" value="#"/>
			   </p>
			   <input name="form" type="hidden" value="True">
				<p>
				<input type="submit" name="submit" value="Enviar notas"/>
			   </p>
			</form>
		<?php
			$_SESSION['form']= 1;
			else:
				echo"<p>";
				echo	"Nombre profesor:".($_POST["profe"]);
				echo"</p>";
				echo"<p>";
				echo	"Nombre Alumno:".($_POST["alumno"]);
				echo"</p>";
				echo"<p>";
				echo	"NotaDoc:".($_POST["notadoc"]);
				echo "</p>";
				echo"<p>";
				echo	"Nota Alumno:".($_POST["notaalumno"]);
				echo"</p>";
				echo"<p>";
				echo	"Nota Profesor Explicación:".($_POST["notaprofe"]);
				echo"</p>";
				session_destroy();
			endif;
		?>
		<h3>Comentarios</h3>
		<ol>
			<li>Estoy lokclkdsfgdsfgdfgdfg</li>
			<li>elemento número 2</li>
			<li>dsfsdfdsf</li>
			<li>Mejor control en la utilización de que información guardamos en una cookie o dentro de una misma sesión.</li>
			<li>elemento número 5</li>
			<li>elemento número 6</li>
			<li>elemento número 7</li>
			<li>elemento número 8</li>
			<li>elemento número 9</li>
			<li>elemento número 10</li>
		</ol>
    </body>
</html>