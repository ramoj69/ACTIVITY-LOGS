<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="register.css">
	<title>Register</title>
</head>
<body>
	<style>/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Alert Styles */
.alert {
    padding: 15px;
    margin-bottom: 20px;
    width: 80%;
    max-width: 400px;
    text-align: center;
    border-radius: 5px;
    font-weight: bold;
}

.alert.success {
    background-color: #dff0d8;
    color: #3c763d;
    border: 1px solid #d6e9c6;
}

.alert.error {
    background-color: #f2dede;
    color: #a94442;
    border: 1px solid #ebccd1;
}

/* Form Styles */
form {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 90%;
    max-width: 400px;
}

form p {
    margin-bottom: 15px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

form input[type="text"], 
form input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    box-sizing: border-box;
}

form input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    cursor: pointer;
    font-weight: bold;
}

form input[type="submit"]:hover {
    background-color: #45a049;
}

/* Centered Content */
p {
    text-align: center;
    color: #555;
}
</style>
	<h1>Register Now!</h1>
	<?php  
	if (isset($_SESSION['message']) && isset($_SESSION['status'])) {
		$statusClass = $_SESSION['status'] == "200" ? 'success' : 'error';
		echo "<div class='alert {$statusClass}'>{$_SESSION['message']}</div>";
	}
	unset($_SESSION['message']);
	unset($_SESSION['status']);
	?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="username">Username</label>
			<input type="text" name="username" required>
		</p>
		<p>
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" required>
		</p>
		<p>
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" required>
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" name="password" required>
		</p>
		<p>
			<label for="confirm_password">Confirm Password</label>
			<input type="password" name="confirm_password" required>
		</p>
		<p>
			<input type="submit" name="insertNewUserBtn" value="Register">
		</p>
	</form>
</body>
</html>