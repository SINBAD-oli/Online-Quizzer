<?php
$data = file_get_contents('php://input');

//$user = $jsondata->ucid;
//$pass = $jsondata->pass;

$_GET["ucid"];
$_GET["pass"];

$pass = crypt($pass);

$connection = mysqli_connect("sql2.njit.edu", "sr594", "Baseball123", "sr594");

if (!$connection){
die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($connection,"select count(*) from Login where ucid = '$user' and password = '$password;");
$data = mysqli_fetch_assoc($result);

if 

//while($row = mysqli_fetch_assoc($result))
//{
//echo "ucid: " . $row["ucid"]. "  | password: " . $row["password"]. "<br>";
//}

mysqli_close($connection);

$sa = "cocks";

//$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL, "https://web.njit.edu/~obc2/test.html");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,$sa);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

//$result = curl_exec($ch);
//if (curl_errno($ch)) {
//echo 'Error:' . curl_error($ch);
//}

//echo $result;
//curl_close($ch);

?>