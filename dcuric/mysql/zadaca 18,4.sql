/*3.2*/
SELECT stud.mbrStud,
CONCAT (stud.imeStud," ",stud.prezStud) "ime i prezime"
FROM stud
;

/*3.3 */
SELECT stud.imeStud
FROM stud
GROUP BY stud.imeStud
ORDER BY stud.imeStud ASC
;

/*3.4 */
SELECT ispit.mbrStud
FROM ispit 
WHERE ispit.sifPred = 146
;

/*3.5 */
SELECT nastavnik.imeNastavnik,nastavnik.prezNastavnik,(koef+0.4)*800 AS "placa"
FROM nastavnik
;

/*3.6 */
SELECT nastavnik.imeNastavnik,nastavnik.prezNastavnik,(koef+0.4)*800 AS "placa"
FROM nastavnik
WHERE ((koef+0.4)*800 < 3500) OR ((koef+0.4)*800 > 8000)
;

/* 3.7*/
SELECT stud.imeStud,stud.prezStud
FROM stud,ispit
WHERE stud.mbrStud=ispit.mbrStud
AND ocjena = 1
AND ispit.sifPred BETWEEN 220 AND 240
;

/* 3.8 */
SELECT  stud.imeStud, stud.prezStud,ispit.ocjena
FROM stud
JOIN ispit ON stud.mbrStud=ispit.mbrStud
WHERE ocjena=3
;

/* 3.9 */
SELECT pred.nazPred
FROM pred JOIN ispit ON ispit.sifPred=pred.sifPred
;

/*3.10*/
SELECT pred.nazPred
FROM pred LEFT JOIN ispit ON ispit.sifPred=pred.sifPred
WHERE ispit.datIspit is NULL
ORDER BY pred.nazPred
;

/*3.11*/
SELECT * 
FROM stud
WHERE LEFT(stud.imeStud,1) IN ("a","e","i","o","u")
AND RIGHT(stud.imeStud,1) IN ("a","e","i","o","u")
;

/*3.12 */
SELECT * 
FROM stud
WHERE LEFT(stud.imeStud,1) NOT IN ("a","e","i","o","u")
AND RIGHT(stud.imeStud,1) NOT IN ("a","e","i","o","u")
;

/*3.13*/
SELECT * 
FROM stud
WHERE LEFT(stud.imeStud,1) IN ("a","e","i","o","u")
or RIGHT(stud.imeStud,1) IN ("a","e","i","o","u")
;

/*3.14*/
SELECT * 
FROM stud
WHERE stud.imeStud LIKE "%nk%"
OR stud.prezStud LIKE "%nk%"
;










