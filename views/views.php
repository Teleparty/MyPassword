<?php
// SQL connection
$servername = "secret";
$username = "secret";
$password = "secret";
$db = "secret";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT DISTINCT ip FROM views WHERE page = '".$_GET['page']."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

$sql_submit = "INSERT INTO views (ip, page) VALUES ('".$_SERVER['REMOTE_ADDR']."', '".$_GET['page']."')";
mysqli_query($conn, $sql_submit);

// Create a 100*30 image
$im = imagecreate(150, 20);

// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 0);

// Write the string at the top left
imagestring($im, 5, 0, 0, $count.' views', $textcolor);

// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>