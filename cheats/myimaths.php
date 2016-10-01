<?php
if (isset($_POST['submit'])) {
	$url = 'https://app.myimaths.com/studentRecords/saveDataOH.asp?sCode='.$_POST['sCode'].'&q1score='.$_POST['q1score'].'&q2score='.$_POST['q2score'].'&taskID='.$_POST['taskID'];
	//open connection
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	//excute the connection
	curl_exec($ch);
	//get the information about the connection
	$result = curl_getinfo($ch);
	//prints 1 if the login is successful
	if ($result['http_code'] == 200)
	{
		echo 'Your task is finished!';
	}
	else
	{
		echo 'Failed to finish your task. Try it <a href="myimaths2.php">here</a>';
	}
	//close connection
	curl_close($ch);
}
?>

<html>
<head>
<title>MyiMaths Cheater</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="sCode" placeholder="sCode">
<input type="text" name="q1score" placeholder="q1score">
<input type="text" name="q2score" placeholder="q2score">
<input type="text" name="taskID" placeholder="taskID">
<input type="submit" name="submit" value="Finish my task!!">
</form>
<br>
<h1></h1>
</body>
</html>

