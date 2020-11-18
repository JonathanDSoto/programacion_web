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
	<style type="text/css">
		.registerForm{
			width: 60%;
			background-color: gray;
			padding: 20px;
			border-radius: 5px;
			margin:auto;
			box-shadow: 2px 2px 2px 1px rgba(0,0,0,0.2);
		}
		.input-control{
			width: 95%;
			box-shadow: 5px -5px teal;
			margin: 5px;
			margin-bottom: 15px;
		}
		.input-control label{
			font-weight: bold;
			color:white; 
		}
		.input-control input{
			width: 100%;
			height: 20px; 
		}
		.btn{
			width: 100%;
			border-radius: 5px;
			margin: auto;
			height: 25px;
			background-color: teal;
			color:white;
			box-shadow: 2px 2px 2px 1px rgba(0,0,0,0.2);
		}
		.btn:hover{
			background-color: #417979;
		}
	</style>
</head>
<body>
	<h1> 
		Hola mi nombre es <?= $fullname; ?>
	</h1>

	<div class="registerForm">
		
		<fieldset>

			<form method="POST" action="app/test.php" >

				<legend>
					Formulario de registro
				</legend>
				
				<div class="input-control">
					
					<label>
						Nombre(s):
					</label>
					<input type="text" name="name" placeholder="Juanito">

				</div>

				<div class="input-control">
					
					<label>
						Apellido(s):
					</label>
					<input type="text" name="lastname" placeholder="León">

				</div>


				<div class="input-control"> 
					
					<label>
						Género
					</label>

					<br>

					
					Mujer<input type="radio" name="gender" value="M" style="width: 50%;" checked="">

					<br>

					Hombre<input type="radio" name="gender" value="H" style="width: 42%;">
				</div>

				<div class="input-control">
					
					<label>
						Preferencias:
					</label>
					
					<br>

					Guitarra
					<input type="checkbox" name="preferences[]" value="guitarra">
					<br>

					Bateria
					<input type="checkbox" name="preferences[]" value="bateria">
					<br>

					Bajo
					<input type="checkbox" name="preferences[]" value="bajo">
					<br>

					Teclado
					<input type="checkbox" name="preferences[]" value="teclado">
					<br>

					Armónica
					<input type="checkbox" name="preferences[]" value="armónica">

				</div>

				<div class="input-control">
					
					<label>
						Ciudad:
					</label>
					<select name="city">
						
						<option value="1" > 
							La Paz 
						</option>

						<option value="2"> 
							Los Cabos 
						</option>

					</select>

				</div>

				<div class="input-control">
					
					<label>
						Contraseña
					</label>
					<input type="password" name="password" placeholder="* * * *">

				</div>

				<button type="submit" class="btn">
					Guardar información
				</button>

			</form>

		</fieldset>

	</div>

</body>
</html>