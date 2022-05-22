<?php 

$servername = "localhost";
$database = "projeto1";
$username = "root";
$password = "";
$tablename = "usuarios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

/*$query = "SELECT * from usuarios";
$result = $conn->query($query);
while($fetch = $result->fetch_assoc()) {
    echo "<p>";
    foreach ($fetch as $field => $value) {
        echo $field . ' => ' . $value . ' | ';
    }
    echo "</p>";
}*/

mysqli_close($conn);


?>