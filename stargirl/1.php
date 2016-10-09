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

$sql = "SELECT * FROM comments WHERE postid = 1 ORDER BY time DESC";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

// Submit comment
if (isset($_POST['submit'])) {
	$sql_submit = "INSERT INTO comments (postid, name, comment) VALUES (1, '".$_POST['name']."', '".$_POST['comment']."')";
	mysqli_query($conn, $sql_submit);
	header("Refresh:0");
}
?>

<!DOCTYPE html>
<html>
<title>Stargirl Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

<header class="w3-container w3-center w3-padding-32">
  <h1><b>Ella Purnell's Blog</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">Ella Purnell</span></p>
</header>

<div class="w3-row">

<div class="w3-col">
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding-8">
      <h3><b>Stargirl</b></h3>
      <h5>Weird girl came to my school, <span class="w3-opacity">September 10, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>no idea empty brain english homework done kbai</p>
      <div class="w3-row">
        <div class="w3-col">
          <p><b>Comments </b> <span class="w3-tag"><?php echo $count ?></span></p>
					<?php if (mysqli_num_rows($result) > 0) { ?>
					<?php while($row = mysqli_fetch_assoc($result)) { ?>
						<h5><?php echo $row["name"] ?>, <span class="w3-opacity"><?php echo $row["time"] ?></span></h5>
						<p><?php echo $row["comment"] ?></p>
					<?php } ?>
					<?php } else { ?>
						<h5><span class="w3-opacity">No Comments</span></h5>
					<?php } ?>
					
					<form class="w3-container" action="" method="POST">
						<p>
						<label>Name</label>
						<input class="w3-input" type="text" name="name"></p>
						<p>
						<label>Comment</label>
						<input class="w3-input" type="text" name="comment"></p>
						<input class="w3-btn" type="submit" name="submit">
					</form><br>
        </div>
      </div>
    </div>
  </div>
  <hr>
</div>

</div>

<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-btn w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-btn w3-padding-large w3-margin-bottom">Next</button>
</footer>

</body>
</html>

<?php
// close connection
mysqli_close($conn);
?>