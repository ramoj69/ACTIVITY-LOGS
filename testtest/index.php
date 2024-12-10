<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="index.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
<style>/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

h1 {
    text-align: center;
    margin-top: 20px;
    font-size: 24px;
}

/* Navbar Styles */
nav {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin-left: 15px;
}

nav a:hover {
    text-decoration: underline;
}

/* Search Form Styles */
.searchForm {
    text-align: center;
    margin: 20px 0;
}

.searchForm input[type="text"] {
    padding: 8px;
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.searchForm input[type="submit"] {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.searchForm input[type="submit"]:hover {
    background-color: #45a049;
}

/* Table Styles */
table {
    width: 90%;
    margin: 0 auto;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: white;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

table th {
    background-color: #4CAF50;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
}

/* Links in Table */
table a {
    color: #4CAF50;
    text-decoration: none;
}

table a:hover {
    text-decoration: underline;
}

/* Message Styles */
h1[style*="color: green;"] {
    color: green;
    margin: 20px 0;
}

h1[style*="color: red;"] {
    color: red;
    margin: 20px 0;
}

/* Clear Search Query Link */
p a {
    text-decoration: none;
    color: #4CAF50;
    font-weight: bold;
}

p a:hover {
    text-decoration: underline;
}
</style>
<?php include 'nbar.php'; ?>
	<div class="searchForm">
		<form action="index.php" method="GET">
			<p>
				<input type="text" name="searchInput" placeholder="Search here">
				<input type="submit" name="searchBtn" value="Search">
			</p>
		</form>
	</div>

	<?php  
	if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

		if ($_SESSION['status'] == "200") {
			echo "<h1 style='color: green;'>{$_SESSION['message']}</h1>";
		} else {
			echo "<h1 style='color: red;'>{$_SESSION['message']}</h1>";	
		}

	}
	unset($_SESSION['message']);
	unset($_SESSION['status']);
	?>

<?php  
	if (isset($_SESSION['message']) && isset($_SESSION['status'])) {
		if ($_SESSION['status'] == "200") {
			echo "<h1 style='color: green;'>{$_SESSION['message']}</h1>";
		} else {
			echo "<h1 style='color: red;'>{$_SESSION['message']}</h1>";	
		}
	}
	unset($_SESSION['message']);
	unset($_SESSION['status']);
?>

	

	<p><a href="index.php">Clear Search Query</a></p>

	<table style="width:100%; margin-top: 20px;">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Product</th>
			<th>Company</th>
			<th>Date Added</th>
			<th>Action</th>
		</tr>


		<?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllUsers = getAllUsers($pdo); ?>
				<?php foreach ($getAllUsers as $row) { ?>
					<tr>
						<td><?php echo $row['first_name']; ?></td>
						<td><?php echo $row['last_name']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['product']; ?></td>
						<td><?php echo $row['company']; ?></td>
						<td><?php echo $row['date_added']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
			<?php } ?>
			
		<?php } else { ?>
			<?php $searchForAUser =  searchForAUser($pdo, $_GET['searchInput']); ?>
				<?php foreach ($searchForAUser as $row) { ?>
					<tr>
						<td><?php echo $row['first_name']; ?></td>
						<td><?php echo $row['last_name']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['product']; ?></td>
						<td><?php echo $row['company']; ?></td>
						<td><?php echo $row['date_added']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
		<?php } ?>	
		
	</table>
</body>
</html>