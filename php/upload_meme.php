<?php

include("config_local.php");
session_start();

  // Initialize message variable
$msg = "";

$target_dir = "img/memes/";

$file = "";
$title = "";
$creator = "";

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
  $image = $_FILES['file']['name'];
}

if (isset($_POST['title'])) {
  $title = $_POST['title'];
}

if (isset($_POST['creator'])) {
  $creator = $_POST['creator'];
}

// image file directory
$img_name = basename($image);
$target = $target_dir .basename($image);

$sql = "INSERT INTO memes2 (title, url, user_id) VALUES ('" .$title. "', '" .$img_name. "', NULL)";

    // execute query
  mysqli_query($con, $sql);

  if($_FILES["image"]["error"] > 0){
    echo "Error: " . $_FILES["image"]["error"] . "<br>";
  } else{
    echo "File Name: " . $_FILES["image"]["name"] . "<br>";
    echo "File Type: " . $_FILES["image"]["type"] . "<br>";
    echo "File Size: " . ($_FILES["image"]["size"] / 1024) . " KB<br>";
    echo "Stored in: " . $_FILES["image"]["tmp_name"];
  }


  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }

  $con->close();
?>