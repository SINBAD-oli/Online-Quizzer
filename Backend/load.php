<?php

$arr = array("sr594" => "Poaster", "obc2" => "Coolstuff", "test" => "test123", "faster" => "games", "username" => "password");

$connection = mysqli_connect("sql2.njit.edu", "sr594", "Baseball123", "sr594");

if (!$connection){
die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($connection,"Truncate table Login;");
foreach	($arr as $x => $v)
{
$v = crypt($v);
$sql = "INSERT INTO Login (ucid, password) VALUES ('$x','$v');";
if(mysqli_query($connection,$sql))
{
echo "Record created";
}
else
{
echo "Error: " . mysqli_error($connection). "<br>";
}
}

//while($row = mysqli_fetch_assoc($result))
//{
//echo "ucid: " . $row["ucid"]. "  | password: " . $row["password"]. "<br>";
//}
mysqli_close($connection);
?>