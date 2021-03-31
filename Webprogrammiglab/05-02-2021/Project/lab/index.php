<?php 
	session_start();
	include("connect.php");
	if(isset($_POST['b1']))
		{
$q = mysql_query("select * from employee
				   where usernme = '".$_REQUEST['t1']."' 
					  and
				    password = '".$_REQUEST['t2']."' ");	
 $num = mysql_num_rows($q);
	if($num>0)
		{
				$row = mysql_fetch_array($q);	
				$_SESSION['fid'] = $row['usernme'];
				$_SESSION['uname'] = $row['password'];
				header("location:inbox.php");
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab Managment</title>
<link href="stylelog.css" rel="stylesheet" type="text/css" />
</head>

<body>
<a href="admin.php"><img src="images/admi12n.jpg" align="right"></a></div>

    <table width="96%" height="141" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>SIGN IN HERE</td>
      </tr>
      <tr>
        <td height="126"><form id="form1" name="form1" method="post" action="">
            <label>Name
              <input name="t1" type="text" id="t1"/><br><br>
            </label>
            <label>Password
              <input type="password" name="t2" id="t2" style="margin-top:5px;" /><br><br>
            </label>
            <label>
            <input type="submit" name="b1" id="button" value="Login" /><br><br>
            </label>
        </form></td>
      </tr>
    </table>
  </div>
  <div id="right"></div>
</div>

  <div id="center"><a href="fsignup.php"><img src="images/bof_02.jpg" width="77" height="26" /></a></div>
 
  <div id="right"></div>
</div>

</body>
</html>