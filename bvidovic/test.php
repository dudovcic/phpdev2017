<html>
    <head>
        <title>Php</title>
            
    </head>
    
    <body>
<?php include ("data.php")?>
 
<?php


print_r($data);
foreach($data as $value)
{
    echo $value;
}

/*for($i=0; $i<count($data); $i++)
{
    echo $data[$i];
}
*/
/*foreach( $data as $key=>$value)
{
    echo $value;
}
*/
  echo "<br>";
  
  /*foreach ($data as $item) {
    echo '<tr>';
    echo '<td>'.$item[0].'</td>';
    echo '<td>'.$item[1].'</td>';
    echo '<td>'.$item[2].'</td>';
    echo '</tr>';
*/
        
        
         
        
     
     ?>     
        
       
   <table border='1'>
   <tr>
       <th>rbr</th>
       <th>Prezime</th>
       <th>Ime</th>
       <th>datum prijave</th>
       <th>placeno</th>
   </tr>
     <tr>
       <td>1</td>
       <td>Ivic</td>
       <td>Iva</td>
       <td>01.03.2011</td>
               <td>
           <form>
               <select name="izbornik">
               <option value="da">da</option>
               <option value="ne">ne</option>
               </select>
           </form></td>
           <tr>
       <td>2</td>
       <td>Peric</td>
       <td>Petar</td>
       <td>05.03.2011</td>
               <td>
           <form>
               <select name="izbornik">
               <option value="da">da</option>
               <option value="ne">ne</option>
               </select>
           </form></td>
       
   
   
   </table>
        
        
       
               
         
    
    </body>
</html>

