<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="insert.css">
</head>
<body>
	<style>
		/* General Styles */
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

/* Form Container */
form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
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

form input[type="text"] {
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

/* Message Styles */
.message {
    width: 90%;
    max-width: 400px;
    padding: 15px;
    margin-bottom: 20px;
    text-align: center;
    border-radius: 5px;
    font-weight: bold;
}

.success-message {
    background-color: #dff0d8;
    color: #3c763d;
    border: 1px solid #d6e9c6;
}

.error-message {
    background-color: #f2dede;
    color: #a94442;
    border: 1px solid #ebccd1;
}

	</style>
	<?php  
		if (isset($_SESSION['message']) && isset($_SESSION['status'])) {
			$class = $_SESSION['status'] == "200" ? "success-message" : "error-message";
			echo "<div class='message $class'>{$_SESSION['message']}</div>";
		}
		unset($_SESSION['message']);
		unset($_SESSION['status']);
	?>

	<h1>Insert the User!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="firstName">Product</label> 
			<input type="text" name="product">
		</p>
		<p>
			<label for="firstName">Company</label> 
			<input type="text" name="company">
            <input type="submit" name="insertUserBtn">
		</p>
	</form>
</body>
</html>