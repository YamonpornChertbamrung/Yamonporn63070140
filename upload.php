<?php

$conn = mysqli_connect('itflabs02.mysql.database.azure.com', 'yamonporn@itflabs02', 'Ggggg12188', 'ITFlab', 3306);

$id = $_POST['ID'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = 'UPDATE guestbook SET name="'.$name.'",comment="'.$comment.'",link="'.$link.'" WHERE ID='.$id.'';


if (mysqli_query($conn, $sql)) {
    echo "Edit successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>