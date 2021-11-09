<?php
  include("php/config_local.php");
  session_start();

  // Initialize message variable
  $msg = "";

  $target_dir = "img/memes/";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	// $image_text = mysqli_real_escape_string($con, $_POST['image_text']);

  	// image file directory
    $img_name = basename($image);
  	$target = $target_dir .basename($image);

    $sql = "INSERT INTO memes2 (title, url, user_id) VALUES ('test', '" .$img_name. "', NULL)";

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
    //*/
  }
  
  $sql_search = "SELECT * FROM memes2 WHERE title = 'test'";

  $result = mysqli_query($con, $sql_search);

  $reloadpage = $_SERVER['PHP_SELF']."#myForm";
  header("Location:$reloadpage");
  exit();
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='img/memes/".$row['url']."' >";
      echo "</div>";
    }
  ?>
  <form id="myForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>#myForm" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>