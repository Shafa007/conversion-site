<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>Page 1 [Home]</h2>
	<h3>Conversion Site</h3>
	
    <a href="http://localhost/home.php" target="_blank">1.Home </a>
    <a href="http://localhost/conversionrate.php" target="_blank">2.Conversion Rate </a>
    <a href="http://localhost/history.php" target="_blank">3.History </a>
    <br><br>
    <label for="converter">Converter: </label>
    <br><br>

		<select id="dropdown" name="dropdown"  value="dropdown">
		    <option value="feettoinch">feet to inch</option> 
			<option value="inchtofeet">inch to feet</option>
		</select>
		<br><br>
		<label for="value">Value: </label>
		<input type="text" id="value" name="value">
		<br><br>
		<label for="result">Result: </label>
		<input type="text" id="result" name="result">
		<br><br>
		<input type="button" value="Submit">

	</body>
</html>