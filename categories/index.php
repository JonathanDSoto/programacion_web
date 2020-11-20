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
	</style>
</head>
<body>
	<div>

		<h1>
			Categories
		</h1> 
		
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

				</tr>
					
				<?php endforeach ?>
				
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

				// 	</tr>";

				// }


				?> 

			</tbody>
		</table>

		<form action="../app/categoryController.php" method="POST">
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

	</div>
</body>
</html>