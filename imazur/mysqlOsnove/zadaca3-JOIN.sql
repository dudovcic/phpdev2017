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

/*zadatak 3.13.*/
USE fakultet;
SELECT DISTINCT  imeStud, prezStud
FROM stud JOIN ispit ON stud.mbrStud=ispit.mbrStud
WHERE ocjena=3;

/*zadatak 3.14.*/
USE fakultet;
SELECT DISTINCT nazPred
FROM pred JOIN ispit ON ispit.sifPred = pred.sifPred;

/*zadatak 3.15.*/
USE fakultet;
SELECT nazPred
FROM pred LEFT JOIN ispit ON pred.sifPred=ispit.sifPred
WHERE datispit is NULL
ORDER BY nazPred;