<?php
$con=mysqli_connect("localhost","root","","mcasamplep");
$name=$_POST['name'];

$sql1="INSERT INTO `student`(`name`) VALUES ('$name')";
mysqli_query($con,$sql1);

?>


<?php

$conn = mysqli_connect("localhost", "root", "","mcasamplep");
$sql="select `name` from student";
$result=mysqli_query($conn,$sql);
?>

<table >
<tr>
<td>student name:</td>
<?php
$i=1;
while($row=mysqli_fetch_assoc($result))
{
	
$a[$i]=$row['name'];	
$i++;
?>
<tr>
<td><?php echo $row['name'];?></td>

</tr><br>
<?php

}
?>

<tr>

</tr>
</table>
asort result----->
<?php
asort($a);
print_r($a);
?><br><br>arsort result----->
<?php
arsort($a);
print_r($a);
?>