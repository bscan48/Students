<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Server</title>
</head>
<body>

<h1>Reseting Server</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blog";
//$dbport = "3306";
$dbport = "8889";

// Create connection
$dbport = "8889";
$conn = new mysqli($servername, $username, $password, $dbname, $dbport);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM students;";

if ($conn->multi_query($sql) === TRUE) {
    echo "Table Students cleared successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$sql = "INSERT INTO students (first_name, last_name, email, phone)
VALUES ('John', 'Doe', 'john@example.com', '8185551234');";
$sql .= "INSERT INTO students (first_name, last_name, email, phone)
VALUES ('Mary', 'Smith', 'mary@example.com', '5555554321');";
$sql .= "INSERT INTO students (first_name, last_name, email, phone)
VALUES ('Julie', 'Ann', 'julie@example.com', '2135552222')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
    exit;
?>
    
</body>
</html>
