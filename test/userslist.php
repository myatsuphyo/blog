<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Username</th>
                <th>Email</th>
            </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["username"]. "</td>
                <td>" . $row["email"]. " ". "</td>";
        echo '<td><a href="edit.php?id=' . $row["id"] . '">Edit</a></td>';
        echo '<td><a href="delete.php?id=' . $row["id"] . '">Delete</a></td>';

        echo  "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>