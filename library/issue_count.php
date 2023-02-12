<?php

include ('config.php');

$sql="SELECT * FROM student where collected_book_id";

if ($result=mysqli_query($conn,$sql))
  {

  $rowcount=mysqli_num_rows($result);
  printf("%d",$rowcount);
  mysqli_free_result($result);
  }

mysqli_close($conn);
?>
