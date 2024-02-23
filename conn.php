

<?php
$conn=mysqli_connect("localhost","root","","an");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($conn,"an");
#mysqli_close($conn);
?> 