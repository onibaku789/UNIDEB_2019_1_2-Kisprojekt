# Tesztjegyzőkönyv
***
## Tartalomjegyzék
- [Végrehajtott tesztesetek](#végrehajtott-tesztesetek)


 #### Végrehajtott tesztesetek 
  A tesztelést a tesztterv alapján lett végrehajtva. A tesztterv és az alábbi táblázat "tesztjegy" mezői azonosak, azaz a kapcsolatot a "tesztjegy" mező biztosítja. A "művelet" mező a tesztelés tárgyát képezi. Az "elvárt kimenet" mező azt mutatja, hogy az adott műveletre milyen hatást várunk el. A "kapott kimenet" azt mutatja, hogy az adott művelet milyen hatást gyakorolt a programra. A "teszt eredmény" mező pedig azt mutatja, hogy az elvárt és a kapott eredmény azonos-e. Ha azonos, akkor átment a teszten.  

 ##### Tesztelő: Guzsik Dániel
 
 
 <table  style="width:100%" border="1px thin black" >
 <tr>
  <th>Tesztjegy</th>
  <th>Művelet</th>
  <th>Elvárt kimenet</th>
  <th>Kapott kimenet</th>
  <th>Teszt eredmény</th>
 </tr>
  <tr>
  <td>H0001</td>
  <td>A bejelntkező űrlapot olyan felhasználó és jelszó párral töltik ki ami előzetesen nem regisztrált a rendszerben.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó és jelszó páros nem helyes.</td>
  <td>Felugró piros kisablak hibaüzenettel.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0002</td>
  <td>A bejelntkező űrlapot olyan felhasználóval töltik ki ami nem szerepel az adatbázisan.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0003</td>
  <td>A bejelntkező űrlapot olyan jelszóval párral töltik ki ami nem szerepel az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0004</td>
  <td>A bejelntkező űrlapot olyan felhasználó és jelszó párral töltik ki ami szerepel az adatbázisan.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0005</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres.	</td>
  <td>Siker, a felület a "Home" oldalra irányít át, bejelentkezve.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0006</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg nem megfelel az email cím szabványnak és a többi mező nem üres.</td>
  <td>Hiba, a felület kijelzi, hogy az email mezőbe írt szöveg nem megfelelő emailcím.</td>
  <td>Hiba, a felület kijelzi, hogy az email mezőbe írt szöveg nem megfelelő emailcím.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0007</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező üres.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó, jelszó és a jelszó megerősítő túl rövid vagy nincs kitöltve.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó, jelszó és a jelszó megerősítő túl rövid vagy nincs kitöltve.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0008</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza kisebb mint 6</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0009</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza nagyobb vagy egyenlő mint 6, viszont a felhasználónév már megtalálható az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.</td>
  <td>Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.</td>
  <td>ÁtmentÁtment</td>
 </tr>
 <tr>
  <td>H0010</td>
  <td>A regisztrációs oldalon a "Regisztrálok" szövegre kattintás.</td>
  <td>Siker, az webalkamazás átirányít a bejelentkező oldalra</td>
  <td>Siker, az webalkamazás átirányít a bejelentkező oldalra</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0011</td>
  <td>A kijelentkezés gombra kattintás.</td>
  <td>Siker, felugró ablakban jelezve, a felhasználó kiléptetését.</td>
  <td>Siker, felugró ablakban jelezve, a felhasználó kiléptetését.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0012</td>
  <td>A Kvízek gombra kattintás.</td>
  <td>Siker, átirányítás a kvíz oldalra, ahol megjelennek a kvízek egy táblázatban.</td>
  <td>Siker, átirányítás a kvíz oldalra, ahol megjelennek a kvízek egy táblázatban.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0013</td>
  <td>A "kvíz kezdése" linkre kattintás.</td>
  <td>Siker, átirányítás az adott kvíz oldalára.</td>
  <td>Siker, átirányítás az adott kvíz oldalára.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0013</td>
  <td>A kvíz oldalán található "Vissza a kvízekhez" gombra kattintás.</td>
  <td>Siker, átirányítás a kvízek listájának oldalra.</td>
  <td>Siker, átirányítás a kvízek listájának oldalra.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0015</td>
  <td>A kvíz oldalán található "kvíz kezdése" gombra kattintás.</td>
  <td>Siker, átirányítás a kvíz első kérdésére.</td>
  <td>Siker, átirányítás a kvíz első kérdésére.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0016</td>
  <td>"Következő kérdés" gombra kattintás, kiválasztott válasz nélkül</td>
  <td>Hiba, felugróablakban jelezve hogy nem választott semmit.</td>
  <td>Hiba, felugróablakban jelezve hogy nem választott semmit.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0017</td>
  <td>"Következő kérdés" gombra kattintás, kiválasztott válasszal.</td>
  <td>Siker, továbblépés a következő kérdésre.</td>
  <td>Siker, továbblépés a következő kérdésre.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0018</td>
  <td>Az utolsó kérdés esetén a "következő kérdés" gomra való kattintás.</td>
  <td>Siker, felugró ablakban jelezve az eltalált válaszok arányát, siker esetén a megfelelő pontok hozzáadása a felhasználó pontjaihoz, és átirányít a kvíz listára, ellenkező esetben semmi nem történik és továbbirányítás a kvíz legelejére.</td>
  <td>Siker, felugró ablakban jelezve az eltalált válaszok arányát, siker esetén a megfelelő pontok hozzáadása a felhasználó pontjaihoz, és átirányít a kvíz listára, ellenkező esetben semmi nem történik és továbbirányítás a kvíz legelejére.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0019</td>
  <td>Kvíz neve (min 4 karakter), kvíz leírása (min. 10 karakter), pontszám (max. 200), és legalább egy kérdés megadása.</td>
  <td>Siker, átirányít a kvíz listára.</td>
  <td>Siker, átirányít a kvíz listára.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0020</td>
  <td>Kvíz adatok megadása a kritériumoknak NEM megfelelően.</td>
  <td>Siker, hibaüzenetet dob a hibás mezőkre vonatkozó megfelelő üzenetekkel.</td>
  <td>Siker, hibaüzenetet dob a hibás mezőkre vonatkozó megfelelő üzenetekkel.</td>
  <td>Átment</td>
 </tr>
 </table>
 
 
 ##### Tesztelő: Varga Attila
   
 <table  style="width:100%" border="1px thin black" >
 <tr>
  <th>Tesztjegy</th>
  <th>Művelet</th>
  <th>Elvárt kimenet</th>
  <th>Kapott kimenet</th>
  <th>Teszt eredmény</th>
 </tr>
  <tr>
  <td>H0001</td>
  <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami előzetesen nem regisztrált a rendszerben.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó és jelszó páros nem helyes.</td>
  <td>Felugró ablakban a megfelelő hibaüzenet jelenik meg.</td>
  <td>Átment</td>
 </tr>

 </table>