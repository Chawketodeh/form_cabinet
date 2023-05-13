

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    body {
	background: white;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: black;
	font-size: 18px;
	padding: 10px;
}


.error {
	background: #F2DEDE;
	color: #A94442;
	padding: 10px;
	width: 95%;
	border-radius: 5px;
	margin: 20px auto;
}

.create {
	background-color: #f1f1f1;
	text-align: center;
}

.log {
    font-size: 30px;
}

a {
	color: dodgerblue;
}

</style>
</head>
<body>
	<h2 class="log">Mon cabinet</h2>
	<form action="index.php" method="post">
		<h2>LOGIN</h2>
			<label>email</label>
			<input type="text" name="email" placeholder="email"><br>
			<label>passw</label>
			<input type="passw" name="passw" placeholder="passw"><br>
			<button type="submit" class="btn btn-primary" href="/mon_cabinet/index.php" >Login</button>
			<div class="create">
			<a  href="create.php">Create an account?</a>    
		</div>
	</form>
</body>
</html>
