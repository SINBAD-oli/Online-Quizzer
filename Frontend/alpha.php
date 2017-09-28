<?php
$Username=$_POST['name'];
$Password=$_POST['word'];
$Check = $_POST['check'];
 
$field = array('Username' => $Username , 'Password' => $Password, 'Check' => $Check,);
$send= json_encode($field);
$crl = curl_init();
 
//curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~sr594/cs490Project/Backend/backend.php");
curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~sa839/cs490project/middle.php");
curl_setopt($crl, CURLOPT_POST, 1);
 curl_setopt($crl, CURLOPT_POSTFIELDS, $send);
curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
    
$c = curl_exec($crl);
curl_close($crl); 
?> 