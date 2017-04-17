/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Korisnik
 * Created: Apr 18, 2017
 */

/*zadatak 3.12.*/
USE fakultet;
SELECT *
FROM stud JOIN ispit
ON stud.mbrStud=ispit.mbrStud
AND ispit.ocjena=1
AND ispit.sifPred BETWEEN 220 AND 240;