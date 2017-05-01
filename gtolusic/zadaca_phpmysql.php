<?php

$spajanje=mysqli_connect('localhost', 'root','');
$baza=mysqli_select_db($spajanje, 'fakultet');
mysqli_set_charset($spajanje,"utf8");

if ($spajanje && $baza)
    
    echo "uspješno ste spojeni na database <br>";

else
    echo "ništa to";



//prvi zadatak
$query="select mbrstud, prezstud from stud where imestud='Ivan'";
$result=mysqli_query($spajanje, $query);

{
    
  echo "<table border=1><tr><th>Matićni broj</th><th>Prezime</th></tr>"
    ;
        while ($row=mysqli_fetch_assoc($result))
       echo " <tr>
        <td>".$row['mbrstud']."</td>
        <td>".$row['prezstud']."</td>
        </tr><br>";
               
}
echo "</table>";



//drugi zadatak

$query2="select nazpred from pred order by nazpred";
$result2=mysqli_query($spajanje, $query2);

{
    
  echo "<table border=1><tr><th>Naziv predmeta</th></tr>"
    ;
        while ($row2=mysqli_fetch_assoc($result2))
       echo " <tr>
        <td>".$row2['nazpred']."</td>
                </tr><br>";
               
}
echo "</table>";

//treci zadatak


$query3="select imestud,prezstud from stud where prezstud like 'b%' order by imestud ASC";
$result3=mysqli_query($spajanje, $query3);

{
    
  echo "<table border=1><tr><th>Ime</th><th>Prezime</th></tr>"
    ;
        while ($row3=mysqli_fetch_assoc($result3))
       echo " <tr>
        <td>".$row3['imestud']."</td>
        <td>".$row3['prezstud']."</td>
        </tr><br>";
               
}
echo "</table>";

//cetvrti zadatak

$query4="select imestud, prezstud from stud inner join mjesto on mjesto.pbr=stud.pbrrod where mjesto.nazmjesto='Zagreb'";
$result4=mysqli_query($spajanje, $query4);

{
    
  echo "<table border=1><tr><th>Ime</th><th>Prezime</th></tr>"
    ;
        while ($row4=mysqli_fetch_assoc($result4))
       echo " <tr>
        <td>".$row4['imestud']."</td>
        <td>".$row4['prezstud']."</td>
        </tr><br>";
               
}
echo "</table>";