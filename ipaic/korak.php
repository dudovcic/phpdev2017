<!doctype html>
<html>
    <head>
	<title>DZ 164</title>
</head>


<form method="POST" action="upload.php" enctype="multipart/form-data" multiple>
<br /> <input type="file" name="datoteka" id="datoteka" /><br />
<br /> <input type="submit" name="upload_btn" value="Upload"> <br />

<?php
if(isset($_FILES['file']['name'][$_POST["broj"]]))
{
     exit("nemozete uploadati toliko fileova");
}
?>
   
</form>