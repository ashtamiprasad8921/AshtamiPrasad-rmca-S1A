<html">
<head>
<title>Lab Managment</title>
</head>
<body>
</body>
</head>
</html>




<form action="?" method="post">
<table width="70%" border="1">
  <tr>
    <td colspan="5"></td>
   
  </tr>
  
  
 
  <tr bgcolor="#CCCCCC" align="center">
    <th>S.No</th>
    <th> Faculty Name</th>
    <th>Day</th>
    <th>Time</th>
    <th>Semester</th>
	<th>Subject</th>
 
 </tr>
  <?php
               include("connect.php");
			  $q =  mysql_query("select * from atimetable");
			  $num = mysql_num_rows($q);
			   if($num)
			   {
				   while($row = mysql_fetch_array($q))
				     {
 ?>
  <tr align="center">
    <td><?php echo $row[0];?></td>
    <td><?php echo $row[1];?></td>
    <td><?php echo $row[2];?></td>
    <td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	<td><?php echo $row[5];?></td>
	
    
	<?php
	
					 }
			   }else{
	?>
  </tr>
 
  <tr>
    <td colspan="5">&nbsp;<center><blink>No Record Found !!!</blink></center></td>
    </tr>
    <?php
			   }
?>



	  <tr>
    
      <a href="inbox.php"><img src="images/goback.jpg"></a>
     </tr>
</table>


</form>