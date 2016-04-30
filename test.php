<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

$servername = "lahacks16mike";
$username = "mszhang";
$password = "54";

$conn = new mysqli($servername, $username, $password);

if ($conn -> connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected succesfully";

?>

</body>
</html>
