<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PBO</title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
<style type="text/css">
	.marvel{
		font-family: 'Marvel', sans-serif;
		font-size: 90px;
		margin-center: auto;
	}
	.score{
		font-family: 'Marvel', sans-serif;
	}
</style>
<body>

<div class="container">
<br>
<center><h1 class="marvel">Tugas PBO 1</h1></center>
<br>

	<form method="POST" action="doCalculate.php">
		
		<table class="table table-striped">
		
			<tr>
				<td>Absen</td>
				<td>:</td>
				<td><input type="number" name="nilaiAbsen" class="form-control"></td>
			</tr>

			<tr>
				<td>Tugas</td>
				<td>:</td>
				<td><input type="number" name="nilaiTugas" class="form-control"></td>
			</tr>

			<tr>
				<td>UTS</td>
				<td>:</td>
				<td><input type="number" name="nilaiUTS" class="form-control"></td>
			</tr>

			<tr>
				<td>UAS</td>
				<td>:</td>
				<td><input type="number" name="nilaiUAS" class="form-control"></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" class="form-control btn btn-danger">	
				</td>			
			</tr>

		</table>

	</form>
	
	<br><br>

	<?php
	if (isset($_GET['score'])) {
		if ($_GET['score'] == 'a') { ?>
			<p class="score" style="color:red;">Anda mendapatkan nilai A</p>            
		<?php
		}
		else if ($_GET['score'] == 'b') { ?>
			<p class="score" style="color:red;">Anda mendapatkan nilai B</p>  
		<?php           
		}
		else if ($_GET['score'] == 'c') { ?>
			<p class="score" style="color:red;">Anda mendapatkan nilai C</p> 
		<?php          
		}
		else if ($_GET['score'] == 'd') { ?>
			<p class="score" style="color:red;">Anda mendapatkan nilai D</p> 
		<?php           
		}
		else if ($_GET['score'] == 'e') { ?>
			<p class="score" style="color:red;">Anda mendapatkan nilai E</p>  
		<?php           
		}
	}
	?>

</div>
	
</body>
</html>