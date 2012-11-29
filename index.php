<? include 'cnf/bd.php';?>
<html>
	<head>
		<title>Los pirris del Casiprimo</title>
		<link href="css/style.css"  rel="stylesheet" type="text/css"/>
		<!--script language="php" src="cnf/bd.php"></script-->
	</head>
	<body>
		<div id="cabecera">Los pirris del Casiprimo</div>
		<?php 
		 	$tables=mysql_list_tables($my_db,$conn);
			$arr=mysql_fetch_array($tables);
			echo 'Resultado: '. $arr[0] . '<br/>';
			$query=mysql_db_query($my_db, 'select * from prueba',$conn);
			if ($query) {
				while ($row=mysql_fetch_row($query)) 
					echo $row[0].'<br/>';
		 	} else {
		 		echo 'No hay resultados';
		 	}
		?>
	</body>
</html>