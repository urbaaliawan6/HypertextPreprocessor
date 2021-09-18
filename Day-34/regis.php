<!DOCTYPE html>
<html>
<head>
	<style>
	#btn {
		width: 177px;
		margin-left: 65px;
		background-color: black ;
		color: white;
	}
	fieldset {
		background-color: lightblue;
		border: 5px solid black;
		color: grey;
		border-radius: 20px;
		width: 400px;
		height: 600px;
	}
	legend {
		color: white;
		font-size: 40px;
		background-color: green;
		border: 2px dotted black;
		border-radius: 20px;
		padding: 10px;

	}
</style>
	</head>
	<center>
		<fieldset>
			<legend style="text-align: center;">
				Registration Form
			</legend>
			<form action="action.php" method="post">
				<br><br><br>
				First Name:
				<input type="text" placeholder="First name" name="fname"><br><br><br><br>

				Last Name:
				<input type="text" placeholder="Last Name" name="lname"><br><br><br><br>

				Password:
				<input type="password" name="pass"><br><br><br><br>

				Mobile No:
				<input type="number" name="int" placeholder="03121234567"><br><br><br><br>

				Address:
				<textarea  name="address" rows="3" cols="25"></textarea><br><br><br><br>

				<input type="submit" name="submit" value="Submit" id="btn">


			</form>
		</fieldset>
	</center>
</html>