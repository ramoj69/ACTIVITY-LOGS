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
    <title>Activity Log</title>
    <link rel="stylesheet" href="styles/actlogs.css">
</head>
<body>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #333;
    margin: 20px 0;
}

/* Table Container */
.tableClass {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    text-align: left;
    padding: 10px;
    border: 1px solid #ddd;
}

table th {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #f1f9f1;
}

/* Responsive Design */
@media (max-width: 768px) {
    .tableClass {
        padding: 10px;
    }

    table th, table td {
        font-size: 14px;
        padding: 8px;
    }
}

    </style>
    <?php include 'nbar.php'; ?>
    <div class="tableClass">
        <h1>Activity Log</h1>
        <table>
            <tr>
                <th>Activity Log ID</th>
                <th>ID</th>
                <th>Username</th> 
                <th>User Action</th>
                <th>Date Added</th>
            </tr>
            <?php $getAllActivityLogs = getAllActLogs($pdo); ?>
            <?php foreach ($getAllActivityLogs as $row) { ?>
            <tr>
                <td><?php echo $row['log_id']; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['user_action']; ?></td>
                <td><?php echo $row['date_added']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>