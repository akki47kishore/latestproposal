<!doctype html>
<head>
	<title>Proposal System</title>
	<link rel='stylesheet' href='css/style.css'>
</head>
<body class='loggin'>
	<h1 class='heading'>Log-in</h1><br>
	<form method='post' action='/loggin'>
		<div class='name'>username : <input type='text' name='username' id='username'></div><br>
		<div class='pass'>password : <input type='password' name='pass' id='pass'></div><br><br>
		<div class='buttons'><input type='submit' value='Log-in'>
			<input type='button' name='cancel' value='cancel' onclick='can()'></div>
	</form>
</body>
<script>
function can()
{
	document.getElementById('username').value='';
	document.getElementById('pass').value='';
}
</script>