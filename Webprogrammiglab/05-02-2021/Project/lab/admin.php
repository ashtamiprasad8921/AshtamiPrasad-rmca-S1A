<?php 
	session_start();
	include("connect.php");
	if(isset($_POST['b1']))
		{
$q = mysql_query("select * from ainfo
				   where uname = '".$_REQUEST['t1']."' 
					  and
				    upass = '".$_REQUEST['t2']."' ");	
 $num = mysql_num_rows($q);
	if($num>0)
		{
				$row = mysql_fetch_array($q);	
				$_SESSION['fid'] = $row['uname'];
				$_SESSION['uname'] = $row['upass'];
				header("location:admininbox.php");
				exit();
		}else{
echo "<blink>uname and Passwd Not Matched!! </blink>";	
		}
	}

  if(isset($_GET['todo']) && $_GET['todo']=="logout")
  	{
			@session_destroy();
	} 
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab Managment</title>
<link href="stylelog.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>SIGN IN HERE<br /><br /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <label>Name  
        <input name="t1" type="text" id="t1" /><br><br>
      </label>
      <label>Password  
      <input type="password" name="t2" id="t2" style="margin-top:5px;" /><br><br>
      </label>
      <label>
       <input type="submit" name="b1" id="button" value="Login" /><br><br>
      </label>
    </form>    </td>
  </tr>
</table>
  </div>
  <div id="right"></div>
</div>

<a href="index.php"></a>
 
 </div>
  <div id="right"></div>
</div>

<div id="layer05_holder">
  <div align="left"></div>
</div>
</body>
</html>