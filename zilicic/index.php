<!DOCTYPE html>
<html>
    <head>
        <style>
            <!--Ovo je html komentar-->
            table {width: 300px}
            tr:nth-child(even){background: #ff0000}
            tr:nth-child(odd){background: #99ff99}
            span {background: #9999ff}
            #zuti_td {background : yellow}         
            .crvena {background: red}
            td.crvena {bacground: #666600}
                 span,p, p div.drvena {background: #99ff99 !important;} 
            #zuti_td {background: yellow}
            .crvena {background: red}
        </style> 
    </head>
    <bod>
        <div class="crvena">
    Ovo je crvena boja ali ja ne zelim da bude crvena već plava
    </div>
        Hello from raw HTML <br>
        <table>
            <tr><td>Ovaj je <span>neparni</span></td></tr>
            <tr><td>Ovaj je parni</td></tr>
             <tr><td>Ovaj je parni</td></tr>
              <tr><td>Ovaj je parni</td></tr>
               <tr><td>Ovaj je parni</td></tr>
        </table>
        
    </bod>
</html>
<?php
echo "hello from PHP";

echo "<br>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

