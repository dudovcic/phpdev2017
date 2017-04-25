<html>
    <body>
        <form method="POST" action="stranica2.php">
    broj imena:<br/><input type="text" name="broj_imena" value=""/><br/>
    <br/>
    <input type="submit" name="submit_btn" value="Obrada" />
    </form>
    </body>
</html>
<?php



if(isset($_POST["submit_btn"]))
{
    echo'<pre>';
    print_r($_POST);
    echo'</pre>';
}