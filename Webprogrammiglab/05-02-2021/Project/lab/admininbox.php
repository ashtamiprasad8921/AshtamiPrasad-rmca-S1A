
<html>
<head>
<title>Lab Managment</title>
</head>


<body>

<form name="memlogin" method="post" action="?">
    
<br>
<br>
<br><br>

<?php
		session_start();
		include("connect.php");
  if(!isset($_SESSION['aid'])  && $_SESSION['uname']=="")
  	{
		header("location:index.php");
		exit();
	}else{
			echo  "Welcome ".$_SESSION['uname'];
			echo "<br>";
			echo  date("Y-m-d");
			if(isset($_REQUEST['b1']))
						{
						header("location:atimetable.php");
				 exit();
				 }
			
				 
				 
				if(isset($_REQUEST['b2']))
						{
						header("location:aupdatenews.php");
				exit();
				}
				if(isset($_REQUEST['b3']))
						{
						header("location:alabitems.php");
				exit();
				}if(isset($_REQUEST['b4']))
						{
						header("location:afeedback.php");
				exit();
				}
				if(isset($_REQUEST['b5']))
						{
						header("location:afcheck.php");
				exit();
				}
				
				


?>


			



<form name="asd" action="?" method="post">
<table width="60%" border="0" align="center">
  <tr>
    <td><label>
      <input type="submit" name="b1" value="Allocate Lab Time Table">
    </label></td>
  </tr>
  <tr>
    <td><input type="submit" name="b2" value="News Update"></td>
  </tr>
  <tr>
    <td><input type="submit" name="b3" value="Check Lab Items"></td>
  </tr>
  <tr>
    <td><input type="submit" name="b4" value="Check Feedback"></td>
  </tr>
  <tr>
    <td><input type="submit" name="b5" value="Faculty Details"></td>
  </tr>
  </table>

</form>			
			
<br>
<br>
<br>
<br>
<br>
	<center>
    		<a href="index.php?todo=logout">
   					Log Out
      </a>
</center>
			
<?php
	}
?>			
			
			