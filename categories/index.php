<?php 
	
	include "../app/categoryController.php";
	$categoryController = new CategoryController();

	$categories = $categoryController->get();

	#echo json_encode($categories);
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Categories
	</title>
	<style type="text/css">
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		#updateForm{
			display: none;
		}
	</style>
</head>
<body>
	<div>

		<h1>
			Categories
		</h1>

		<?php 

		if (isset($_SESSION) && isset($_SESSION['error'])) {

			echo "<h3> Error: ".$_SESSION['error']."</h3>";
			unset($_SESSION['error']);

		}

		?> 

		<?php include "../layouts/alerts.template.php"; ?>

		<table>
			<thead>
				<th>
					#
				</th>
				<th>
					Name
				</th>
				<th>
					Description
				</th>
				<th>
					Actions
				</th>
			</thead>
			<tbody>

				<?php foreach ($categories as $category): ?>

				<tr>
					
					<td>
						<?= $category['id'] ?>
					</td>
					<td>
						<?= $category['name'] ?>
					</td>
					<td>
						<?= $category['description'] ?>
					</td>
					<td>
						<button onclick="edit(<?= $category['id'] ?>,'<?= $category['name'] ?>','<?= $category['description'] ?>','<?= $category['status'] ?>')">
							Edit category
						</button>

						<button onclick="remove(<?= $category['id'] ?>)" style="background-color: red;color:white;">
							Delete category
						</button>
					</td>

				</tr>
					
				<?php endforeach  ?>
				
				<?php   

				// foreach ($categories as $category) {
					
				// 	echo "<tr>
					
				// 		<td>
				// 			".$category['id']."
				// 		</td>
				// 		<td>
				// 			".$category['name']."
				// 		</td>
				// 		<td>
				// 			".$category['description']."
				// 		</td>

				// 		<td>
				// 			<button onclick='edit(".$category['id'].",\"".$category['name']."\",\"".$category['description']."\",\"".$category['status']."\")' >
				// 				Edit category
				// 			</button>

				// 			<button onclick='delete(".$category['id'].")' > Delete category </button>

				// 		</td>

				// 	</tr>";

				// }


				?> 

			</tbody>
		</table>

		<form id="storeForm" action="../app/categoryController.php" method="POST">
			<fieldset>
				
				<legend>
					Add new Category
				</legend>

				<label>
					Name
				</label>
				<input type="text"  name="name" placeholder="terror" required=""> 
				<br>

				<label>
					Description
				</label>
				<textarea placeholder="write here" name="description" rows="5" required=""></textarea>
				<br>

				<label>
					Status
				</label>
				<select name="status">
					<option> active </option>
					<option> inactive </option>
				</select>
				<br>

				<button type="submit" >Save Category</button>
				<input type="hidden" name="action" value="store">

			</fieldset>
		</form>

		<form id="updateForm" action="../app/categoryController.php" method="POST">
			<fieldset>
				
				<legend>
					Edit Category
				</legend>

				<label>
					Name
				</label>
				<input type="text" id="name" name="name" placeholder="terror" required=""> 
				<br>

				<label>
					Description
				</label>
				<textarea placeholder="write here" id="description" name="description" rows="5" required=""></textarea>
				<br>

				<label>
					Status
				</label>
				<select id="status" name="status">
					<option> active </option>
					<option> inactive </option>
				</select>
				<br>

				<button type="submit" >Save Category</button>
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" id="id">

			</fieldset>
		</form>

		<form id="destroyForm" action="../app/categoryController.php" method="POST">

			<input type="hidden" name="action" value="destroy">
			<input type="hidden" name="id" id="id_destroy">

		</form>

	</div>
	<script type="text/javascript">
		function edit(id,name,description,status)
		{	
			document.getElementById('storeForm').style.display="none";
			document.getElementById('updateForm').style.display="block";

			document.getElementById('name').value = name;
			document.getElementById('description').value = description;
			document.getElementById('status').value = status;
			document.getElementById('id').value = id;
		}

		function remove(id)
		{
			var confirm = prompt("Si quiere eliminar el registro, escriba :"+id);
			if (confirm == id) {

				document.getElementById('id_destroy').value = id;
				document.getElementById('destroyForm').submit();

			}
		}
	</script>
</body>
</html>