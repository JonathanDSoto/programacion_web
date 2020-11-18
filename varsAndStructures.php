<?php 

	$name = "Jonathan";
	$Name = "Juanito";
	$lastname = "Soto";
	$edad = 12;
	$fullname = $name." ".$lastname;
	//esto es un comentario de linea
	/*esto es codigo
	basura*/
	#otro comentario de linea 
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Site
	</title>
</head>
<body>
	<h1> 
		Hola mi nombre es <?= $fullname; ?>
	</h1>

	<!-- PRIMERA FORMA -->

	<?php
	if ($edad>=18) {
		echo "<p> La información es accesible </p>";
	}else{
		echo "<p> No tiene acceso a la información  </p> ";
	} 
	?>

	<!-- SEGUNDA FORMA -->

	<?php if ($edad>=18): ?>
	<p>
		El usuario tiene acceso a la información
	</p>
	<?php else: ?>
	<p>
		El usuario <b>no</b> tiene acceso a la información <a href=""></a>
	</p>
	<?php endif ?>

	<!-- TERCERA FORMA -->

	
	<?php if ($edad>=18) { ?>

	<p> La información es accesible </p>

	<?php  }else{ ?>

	<p> No tiene acceso a la información  </p>

	<?php  }  ?>

	<ul>
		
		<?php 

		for ($i=0; $i < 5; $i++) { 
			echo "<li> ".($i+1)."</li>";
		}

		?>

	</ul>

	<ol>
		
		<?php 

		$x = 0;
		while ($x < 5) {
			
			echo "<li> ".($x+1)."</li>";

			$x++;
		}

		// do {
		// 	# code...
		// } while ( <= 10);

		?>

	</ol>

</body>
</html>