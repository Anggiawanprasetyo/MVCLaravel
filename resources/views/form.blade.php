<!DOCTYPE html>
<html>
<head>
	<title>HTML Challenge</title>
	<meta charset="UTF-8">
</head>

<body>
	<h1>SanberBook</h1>
	<h2>Buat Account Baru!</h2>
	<h4>Sign Up Form</h4>

	<form action="{{ url('welcome') }}" method="POST">
    @csrf
	<fieldset>
	<label for="fname">First Name : </label><br><br>
		<input type="text" id="fname" name="fname"><br>
	<br>
	<label for="lname">Last Name : </label><br><br>
		<input type="text" id="lname" name="lname"><br>
	<br>
	<label>Gender : </label><br><br>
		<input type="radio" name="gender" value="0" checked>Male <br>
		<input type="radio" name="gender" value="1">Female <br>
		<input type="radio" name="gender" value="2">Other <br>
	<br>
	<label>Nationality : </label><br><br>
		<select>
		<option value="indonesian">Indonesian</option>
		<option value="malaysian">Malaysian</option>
		<option value="singaporean">Singaporean</option>
		<option value="filipinos">Filipinos</option>
		</select><br>
	<br>
	<label>Language Spoken : </label><br><br>
		<input type="checkbox" name="lang" value="0">Bahasa Indonesia<br>
		<input type="checkbox" name="lang" value="1">English<br>
		<input type="checkbox" name="lang" value="2">Other<br>
		<br>
	<label for="bio">Bio : </label><br><br>
		<textarea cols="100" rows="7" id="bio"></textarea><br>

		<button type="submit" value="Sign Up">Sign Up</button>
		</fieldset>
</form>
</body>
<footer>
<p>&copy; Anggiawan Prasetyo</p>
</footer>
</html>