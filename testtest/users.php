<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Users</title>
	<link rel="stylesheet" href="styles/styles.css">
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

h2 {
    margin: 20px 0;
    font-size: 24px;
    color: #333;
    text-align: center;
}

/* User List */
ul {
    list-style-type: none;
    padding: 0;
    width: 80%;
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

ul li {
    padding: 15px;
    border-bottom: 1px solid #ddd;
    color: #555;
    font-size: 16px;
}

ul li:last-child {
    border-bottom: none;
}

ul li:hover {
    background-color: #f4f4f4;
    cursor: pointer;
}

/* Responsive Design */
@media (max-width: 600px) {
    ul li {
        font-size: 14px;
    }
}

	</style>
	<?php include 'nbar.php'; ?>
	<h2>All Users</h2>
	<ul>
		<?php $getAllUsers = getAllsUsers($pdo); ?>
		<?php foreach ($getAllUsers as $row) { ?>
			<li><?php echo $row['username']; ?></li>
		<?php } ?>
	</ul>
</body>
</html>