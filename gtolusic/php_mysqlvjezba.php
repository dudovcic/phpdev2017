<?php


$spajanje= mysqli_connect('localhost', 'root', '');
$baza= mysqli_select_db('fakultet', $spajanje);

if ($spajanje)
    echo "spojeni ste na bazu";

else
    echo "niste spojeni";
