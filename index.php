<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="/">
	<link rel="icon" type="image/png" sizes="32x32" href="./ico/apple-touch-icon.png">
</head>
<body>
	<div class="calculator" >
	<h2>Calculator</h2>
		<form method="post" action="index.php">
			<input type="text" name="num1" placeholder="Enter first number" required>
			<input type="text" name="num2" placeholder="Enter second number" required>
			<select name="operator" title="Click to choose your operator" required>
			 <option value="">-Choose your operator-</option>
				<option value="add">Add</option>
				<option value="subtract">Subtract</option>
				<option value="multiply">Multiply</option>
				<option value="divide">Divide</option>
			</select>
			
			<input type="submit"  name="submit" value="Calculate" title="Click to Calculate">
			
		</form>
		<br>
		<a href="./" title="Click to Refresh page"><b>Refresh Calculator</b></a> 
		<br>
		<br>
		<a href="./msgalert.php" title="DJ GaliaPH"><b>About Developer?</b></a> 
	</div>

	<div class="calculator">
		<?php
		if(isset($_POST['submit'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];
			switch ($operator) {
				case 'add':
					$result = $num1 + $num2;
					break;
				case 'subtract':
					$result = $num1 - $num2;
					break;
				case 'multiply':
					$result = $num1 * $num2;
					break;
				case 'divide':
					$result = $num1 / $num2;
					break;
				default:
					$result = "Invalid operator";
					break;
			}
			echo "<h2>Result:</h2>";
			echo "<p><b>$num1 $operator $num2 = $result</b></p>";
		}
		
		
		
		
		/*

$a=6;
$b=6;
$ans=$a+$b;

echo $ans;

*/
		?>
		<!--<a href="index.php">Back to Calculator</a> -->
		
	</div>
</body>
<style>

.calculator {
	margin: auto;
	margin-top: 100px;
	width: 200px;
	text-align: center;
}

input[type="text"], select {
	margin: 10px;
	padding: 10px;
	width: 180px;
	border: none;
	border-radius: 5px;
	box-shadow: 0px 0px 5px grey;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	border: none;
	border-radius: 5px;
	padding: 10px 20px;
	margin: 10px;
	cursor: pointer;


</style>
</html>






