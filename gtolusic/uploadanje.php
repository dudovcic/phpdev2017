

<form method="POST" action="" enctype="multipart/form-data">
    fajl za upload:<br>
    <input type="file" name="fajl" value=""><br>
    <input type="submit" name="upload_btn" value="upload">
    
    
</form>

<?php

if (isset($_POST['upload_btn'])){
print_r($_FILES);}
?>