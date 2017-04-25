<?php
if(!isset($_REQUEST["broj_imena"])) 
    {
header('Location: stranica1.php');
exit;
}
?>

<html>
    <body>
        
        <form method="POST" action="#"
              <input type="hidden" name="broj_imena" 
           value="<?php echo $_REQUEST['broj_imena']; ?>">
    <?php for($i=0; $i<$_REQUEST['broj_imena']; $i++){ ?>
    
    ime:<br/><input type="text" name="ime_<?php echo $i; ?>" 
                    value="<?php echo $_REQUEST['ime_'.$i]; ?>"/><br/>
        
            
    <?php } ?>
        <br/>
    <input type="submit" name="f2" value="stisni" />
        </form>
    </body>

    
<?php
print_r($_REQUEST);  




