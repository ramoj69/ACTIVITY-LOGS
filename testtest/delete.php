<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="delete.css">
</head>
<body>
	<style>
	/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    font-size: 24px;
    color: #333;
    margin-top: 20px;
    text-align: center;
}

/* Container for User Information */
.container {
    width: 80%;
    max-width: 600px;
    background-color: #ffcbd1;
    border: 2px solid red;
    border-radius: 8px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.container h2 {
    font-size: 18px;
    color: #333;
    margin: 10px 0;
}

/* Delete Button */
.deleteBtn {
    margin-top: 20px;
    text-align: right;
}

.deleteBtn form input[type="submit"] {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background-color: #f44336;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.deleteBtn form input[type="submit"]:hover {
    background-color: #d32f2f;
}

/* Responsive Design */
@media (max-width: 600px) {
    .container {
        padding: 15px;
    }

    .container h2 {
        font-size: 16px;
    }

    .deleteBtn form input[type="submit"] {
        font-size: 14px;
        padding: 8px 16px;
    }
}


	</style>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserByID = getUserByID($pdo, $_GET['id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $getUserByID['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getUserByID['last_name']; ?></h2>
		<h2>Gender: <?php echo $getUserByID['gender']; ?></h2>
		<h2>Product: <?php echo $getUserByID['product']; ?></h2>
		<h2>State: <?php echo $getUserByID['company']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteUserBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>