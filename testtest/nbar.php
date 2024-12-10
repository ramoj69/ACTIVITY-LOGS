<link rel="stylesheet" href="nbar.css">
<div class="greet">
	<h1>Hello there! Welcome, <span style="color: blue;"><?php echo $_SESSION['username']; ?></span></h1>
</div>
<style>
	/* General Styles */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Greeting Section */
.greet {
    background-color: #f4f4f9;
    padding: 20px;
    text-align: center;
    border-bottom: 2px solid #ddd;
}

.greet h1 {
    font-size: 24px;
    color: #333;
}

.greet h1 span {
    color: blue;
    font-weight: bold;
}

/* Navigation Bar */
.navbar {
    background-color: #4CAF50;
    padding: 10px 0;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.navbar h3 {
    margin: 0;
    padding: 0;
    font-size: 18px;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.2s;
}

.navbar a:hover {
    background-color: #45a049;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 600px) {
    .navbar a {
        display: block;
        margin: 5px 0;
    }
}

</style>
<div class="navbar">
	<h3>
		<a href="index.php">Home</a>
		<a href="insert.php">Add New User</a>
		<a href="users.php">View All Users</a>
		<a href="actlogs.php">Activity Logs</a>
		<a href="login.php">Logout</a>	
	</h3>	
</div>
