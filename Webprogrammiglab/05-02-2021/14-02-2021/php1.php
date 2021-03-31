
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcasamplep";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `new`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Conatct</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['contact'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
?> 

</body>
</html>
