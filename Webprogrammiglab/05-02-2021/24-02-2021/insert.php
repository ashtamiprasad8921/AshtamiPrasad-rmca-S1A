<!DOCTYPE HTML>
<html>
<body>
<center><h2>Book Management System</h2></center>
<br>

<?php
include("Connection.php");

$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')";
$result = mysqli_query($db,$query);
?>

<h3> Book information is inserted successfully </h3>

<a href="SearchBooks.php"> To search for the Book  </a>

</body>
</html>