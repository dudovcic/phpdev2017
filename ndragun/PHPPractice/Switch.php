<?php

//SWITCH PRIMJER 1

$boja = "zuta";

switch($boja){
    case "plava":
        echo "Boja je plava";
       break;
    
    case "crvena":
        echo "Boja je crvena";
       break;
    
    case "crna":
        echo "Boja je crna";
       break;
    
    case "zelena":
        echo "Boja je zelena";
       break;
   
    case "zuta":
        echo "Boja je zuta";
       break;
       
}

echo "<hr>";

//SWITCH PRIMJER 2

$boja2 = "oker";

switch($boja2):
    case "plava":
        echo "Boja je plava";
       break;
    
    case "crvena":
        echo "Boja je crvena";
       break;
    
    case "crna":
        echo "Boja je crna";
       break;
   
    case "oker": // Propadanje
    
    case "zelena":
        echo "Boja je zelena";
       break;
   
    case "zuta":
        echo "Boja je zuta";
       break;
   
    default:
        echo "Nisam nasao boju";
        break;
       
endswitch;


