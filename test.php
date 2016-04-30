<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

$servername = "b1ebbfedb362d1";
$username = "us-cdbr-azure-west-c.cloudapp.net";
$password = "d8c5ce24";

$conn = new mysqli($servername, $username, $password);

if ($conn -> connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected succesfully";

?>

</body>
</html>
