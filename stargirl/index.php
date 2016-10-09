<?php
// About Me
$me_text = 'My name is Ella Purnell and I am 16 years old. I go to Mica Area High School! I am from America. My hobbie is watching videos on YouTube. My biggest desire is to have a dog. And lastly, My favorite food is Pizza!';

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

// select all the comments in the posts
$sql1="SELECT * FROM comments WHERE postid = 1";
$sql2="SELECT * FROM comments WHERE postid = 2";
$sql3="SELECT * FROM comments WHERE postid = 3";
$sql4="SELECT * FROM comments WHERE postid = 4";
$sql5="SELECT * FROM comments WHERE postid = 5";

// excute
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);

// count number of comments
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
$count3 = mysqli_num_rows($result3);
$count4 = mysqli_num_rows($result4);
$count5 = mysqli_num_rows($result5);
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

<div class="w3-hide-large w3-margin-top w3-margin-bottom">
  <div class="w3-container w3-white">
    <h4><b>About Me</b></h4>
    <p><?php echo $me_text ?></p>
  </div>
</div>

<div class="w3-row">

<div class="w3-col l8 s12">
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding-8">
      <h3><b>Stargirl</b></h3>
      <h5>Weird girl came to my school, <span class="w3-opacity">September 10, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>no idea empty brain english homework done kbai</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="1.php"><button class="w3-btn w3-padding-large w3-white w3-border w3-hover-border-black"><b>READ MORE</b></button></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments </b> <span class="w3-tag"><?php echo $count1 ?></span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
	
	<div class="w3-card-4 w3-margin w3-white">
		<div class="w3-container w3-padding-8">
      <h3><b>no title</b></h3>
      <h5>title is content, <span class="w3-opacity">September 10, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>title is content kbai</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-btn w3-padding-large w3-white w3-border w3-hover-border-black"><b>READ MORE</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="w3-col l4 w3-hide-medium w3-hide-small">
  <div class="w3-card-2 w3-margin w3-margin-top">
    <div class="w3-container w3-white">
      <h4><b>About Me</b></h4>
      <p><?php echo $me_text ?></p>
    </div>
  </div><hr>
 
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">School Life</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">America</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Arizona</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Mica High School</span>
    </p>
    </div>
  </div>
</div>

</div><br>

</div>

<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-btn w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-btn w3-disabled w3-padding-large w3-margin-bottom">Next</button>
</footer>

</body>
</html>

<?php
// close connection
mysqli_close($conn);
?>