<?php 
	include "../app/categoryController.php";
	include "../app/movieController.php";

	$categoryController = new CategoryController();
	$movieController = new MovieController();

	$categories = $categoryController->get();
	$movies = $movieController->get();

	if (isset($_SESSION)==false || 
		isset($_SESSION['id'])==false){
		
		header("Location:../");
	}

	#echo json_encode($movies);
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Movies
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
	<h1>
		Movies
	</h1>

	<?php include "../layouts/alerts.template.php"; ?>

	<table>
		<thead>
			<th>
				#
			</th>
			<th>
				title
			</th>
			<th>
				cover
			</th>
			<th>
				minutes
			</th>
			<th>
				category
			</th>
		</thead>
		<tbody>
			<?php foreach ($movies as $movie): ?>
			<tr>
				<td>
					<?= $movie['id'] ?>
				</td>
				<td></td>
				<td>
					<img style="width: 10%" src="../assets/img/movies/<?= $movie['cover'] ?>">
				</td>
				<td>
					<a href="details/?id=<?= $movie['id'] ?>">
						show details
					</a>
				</td>

			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<form action="../app/movieController.php" method="POST" enctype="multipart/form-data" >
		<fieldset>
			<legend>
				Add Movie
			</legend>


			<label>
				Title
			</label>
			<input type="text" name="title" placeholder="movie name" required="">

			<br>

			<label>
				Description
			</label>
			<textarea name="descripiton" rows="5" placeholder="Description" required=""></textarea>

			<br>

			<label>
				Cover
			</label>
			<input type="file" name="cover" required="" accept="image/*">

			<br>

			<label>
				Minutes
			</label>
			<input type="number" name="minutes" placeholder="80" required="">
			
			<br>

			<label>
				Clasification
			</label>
			<select  name="clasification" required="">
				<option> B15 </option>
				<option> BA </option>
			</select>
			<br>


			<label>
				Category
			</label>
			<select  name="category_id" required=""> 
				<?php foreach ($categories as $category): ?>

				<option value="<?= $category['id'] ?>" >
					<?= $category['name'] ?>
				</option>

				<?php endforeach ?>

				<?php 
				// foreach ($categories as $category) {
				// 	echo "<option value=".$category['id']." >". $category['name'] ."</option>";
				// } 
				?>
			</select>
			<br>

			<button type="submit">
				Save
			</button>
			<input type="hidden" name="action" value="store">

		</fieldset>
	</form>
</body>
</html>