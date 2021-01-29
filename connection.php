<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
if (!empty($firstname)){
if (!empty($lastname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mysite";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (firstname, lastname)
values ('$firstname','$lastname')";
if ($conn->query($sql)){
echo "YAY";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "last name should not be empty";
die();
}
}
else{
echo "first name should not be empty";
die();
}
?>