<!doctype html>
<html>
    <head><title>Forma</title></head>
    
    <body>
<form method ="POST" action="">
    
    ime: <br>
    <input type='text' name='ime' >
    <input type="submit" name='submit_btn' value='submit'>
    
    
   
</form>
    </body>
</html>

<?php

if(isset($_POST['submit_btn']))
{
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
}
    
    
?>