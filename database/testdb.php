<?php
$con=mysqli_connect("54.169.80.82","root","gfzeoqfo","odox");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM user");

while($row = mysqli_fetch_array($result)) {
  echo $row['userName'] . " " . $row['name'];
  echo "<br>";
}

mysqli_close($con);
?>
