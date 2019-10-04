<?php
	echo '<pre>';
	print_r($_POST);

	if (isset($_POST['btn'])) {
		$first_value = $_POST['first_value'];
		$second_value = $_POST['second_value'];
		$btn = $_POST['btn'];

		if ($btn == '+') {
			$result = $first_value+$second_value;
		}
		elseif ($btn == '-') {
			$result = $first_value-$second_value;
		}
		elseif ($btn == '*') {
			$result = $first_value*$second_value;
		}
		elseif ($btn == '/') {
			$result = $first_value/$second_value;
		}
		elseif ($btn == '%') {
			$result = $first_value%$second_value;
		}
		else{
			echo "Please Enter the First Value and Second Value";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test-Pro</title>
</head>
<body>
	<form method="POST" action="#">
		<table>
			<tr>
				<td>First Value</td>
				<td><input type="text" name="first_value" value="<?php if(isset($_POST['first_value'])){echo $_POST['first_value'];} ?>"> </td>
			</tr>
			<tr>
				<td>Second Value</td>
				<td><input type="text" name="second_value" value="<?php if(isset($_POST['second_value'])){echo $_POST['second_value'];} ?>"></td>
			</tr>
			<tr>
				<td>Result</td>
				<td><input type="text" name="result" value="<?php if(isset($result)) {echo $result;}?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="btn" value="+">
					<input type="submit" name="btn" value="-">
					<input type="submit" name="btn" value="*">
					<input type="submit" name="btn" value="/">
					<input type="submit" name="btn" value="%">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>