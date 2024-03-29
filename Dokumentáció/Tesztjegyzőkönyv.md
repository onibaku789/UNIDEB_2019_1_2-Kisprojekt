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
      <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres és megfelelnek a követelményeknek.</td>
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
 <tr>
  <td>H0002</td>
  <td>A bejelentkező űrlapot olyan felhasználóval töltik ki ami nem szerepel az adatbázisan.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0003</td>
  <td>A bejelentkező űrlapot olyan jelszóval párral töltik ki ami nem szerepel az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0004</td>
  <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami szerepel az adatbázisan.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0005</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres és megfelelnek a követelményeknek.	</td>
  <td>Siker, a felület a "Home" oldalra irányít át, bejelentkezve.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0006</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg felel meg az email cím szabványnak és a többi mező nem üres.</td>
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
  <td>Átment</td>
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
  <td>H0014</td>
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
 
 ##### Tesztelő: Erdős Péter
   
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
  <td>A művelet az elvárt hibaüzenettel tér vissza.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0002</td>
  <td>A bejelentkező űrlapot olyan felhasználóval töltik ki ami nem szerepel az adatbázisan.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.</td>
  <td>A webalkalmazés jelzi, hogy nem megfelelő nevet adtunk meg/ ilyen felhasználó nem szerepel.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0003</td>
  <td>A bejelentkező űrlapot olyan jelszóval párral töltik ki ami nem szerepel az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.</td>
  <td>A felület jelzi, hogy nem megfeleló a jelszó.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0004</td>
  <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami szerepel az adatbázisan.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>A felület a várt módon viselkedik, átírányít a "home" oldalra</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0005</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres és megfelelnek a követelményeknek.	</td>
  <td>Siker, a felület a "Home" oldalra irányít át, bejelentkezve.</td>
  <td>A sikeres reigsztrálció után a "home" page jelenik meg, a várt módon.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0006</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg felel meg az email cím szabványnak és a többi mező nem üres.</td>
  <td>Hiba, a felület kijelzi, hogy az email mezőbe írt szöveg nem megfelelő emailcím.</td>
  <td>A felület jelzi a felhasználó számára, hogy nem megfelelő az e-mail szabványnak.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0007</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező üres.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó, jelszó és a jelszó megerősítő túl rövid vagy nincs kitöltve.</td>
  <td>Az oldal a jelszó és jelszó megerősítő hibás kitöltését jelzi.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0008</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza kisebb mint 6</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.</td>
  <td>Az oldal jelzi a jelszó rövidségét.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0009</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza nagyobb vagy egyenlő mint 6, viszont a felhasználónév már megtalálható az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.</td>
  <td>A felhasználói név már foglalt és ezt az oldal jelzi is a felhasználó számára.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0010</td>
  <td>A regisztrációs oldalon a "Regisztrálok" szövegre kattintás.</td>
  <td>Siker, az webalkamazás átirányít a bejelentkező oldalra</td>
  <td>Az oldal az elvártaknak megfelelően működik.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0011</td>
  <td>A kijelentkezés gombra kattintás.</td>
  <td>Siker, felugró ablakban jelezve, a felhasználó kiléptetését.</td>
  <td>Az oldal jelzi, hogy sikerült a kilépés.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0012</td>
  <td>A Kvízek gombra kattintás.</td>
  <td>Siker, átirányítás a kvíz oldalra, ahol megjelennek a kvízek egy táblázatban.</td>
  <td>A kvízek a várt módon megjelennek az oldalon.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0013</td>
  <td>A "kvíz kezdése" linkre kattintás.</td>
  <td>Siker, átirányítás az adott kvíz oldalára.</td>
  <td>A kvíz megjelenik a felhasználó számára.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0014</td>
  <td>A kvíz oldalán található "Vissza a kvízekhez" gombra kattintás.</td>
  <td>Siker, átirányítás a kvízek listájának oldalra.</td>
  <td>Az alkalmazás sikeresen visszalép az elvárt oldalra.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0015</td>
  <td>A kvíz oldalán található "kvíz kezdése" gombra kattintás.</td>
  <td>Siker, átirányítás a kvíz első kérdésére.</td>
  <td>Az oldal az elvártaknak megfelelően átirányít a kvíz első kérdésére.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0016</td>
  <td>"Következő kérdés" gombra kattintás, kiválasztott válasz nélkül</td>
  <td>Hiba, felugróablakban jelezve hogy nem választott semmit.</td>
  <td>A hibás válaszadást jezi a webalkalmazás.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0017</td>
  <td>"Következő kérdés" gombra kattintás, kiválasztott válasszal.</td>
  <td>Siker, továbblépés a következő kérdésre.</td>
  <td>Az oldal az elvártaknak megfelelően átlép a következő kérdésre.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0018</td>
  <td>Az utolsó kérdés esetén a "következő kérdés" gomra való kattintás.</td>
  <td>Siker, felugró ablakban jelezve az eltalált válaszok arányát, siker esetén a megfelelő pontok hozzáadása a felhasználó pontjaihoz, és átirányít a kvíz listára, ellenkező esetben semmi nem történik és továbbirányítás a kvíz legelejére.</td>
  <td>Az oldal növeli a sikeres válaszokra járó pontok mennyiségével az adott felhasználó pontjait és kijelzi az elért eredményt is.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0019</td>
  <td>Kvíz neve (min 4 karakter), kvíz leírása (min. 10 karakter), pontszám (max. 200), és legalább egy kérdés megadása.</td>
  <td>Siker, átirányít a kvíz listára.</td>
  <td>Az oldal átirányít a megfelelő felületre.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0020</td>
  <td>Kvíz adatok megadása a kritériumoknak NEM megfelelően.</td>
  <td>Siker, hibaüzenetet dob a hibás mezőkre vonatkozó megfelelő üzenetekkel.</td>
  <td>Az oldal hivatkozik a hibásan megadott mezőkre.</td>
  <td>Átment</td>
 </tr>
 </table>
 
  ##### Tesztelő: Lácza Roland
   
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
  <td>A képernyőn megjelenik az "INVALID_USERNAME" felirat, amely hibára utal.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0002</td>
  <td>A bejelentkező űrlapot olyan felhasználóval töltik ki ami nem szerepel az adatbázisan.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.</td>
  <td>A képernyőn megjelenik az "INVALID_USERNAME" felirat, amely hibára utal.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0003</td>
  <td>A bejelentkező űrlapot olyan jelszóval párral töltik ki ami nem szerepel az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.</td>
  <td>A képernyőn megjelenik az "INVALID_PASSWORD" felirat, amely hibára utal.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0004</td>
  <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami szerepel az adatbázisan.</td>
  <td>Siker, a felület a "Home" oldalra irányít át.</td>
  <td>A felület átriányítja a kezdőoldalra, amely jelen pillanatban a home page</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0005</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres és megfelelnek a követelményeknek.	</td>
  <td>Siker, a felület a "Home" oldalra irányít át, bejelentkezve.</td>
  <td>A felület átriányítja a kezdőoldalra, amely jelen pillanatban a home page</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0006</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg felel meg az email cím szabványnak és a többi mező nem üres.</td>
  <td>Hiba, a felület kijelzi, hogy az email mezőbe írt szöveg nem megfelelő emailcím.</td>
  <td>Megfelelően kiírja a hibát, amelyet dobnia kell.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0007</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező üres.</td>
  <td>Hiba, a felület kijelzi, hogy a felhasználó, jelszó és a jelszó megerősítő túl rövid vagy nincs kitöltve.</td>
  <td>A fleület a jelszó és jelszó megerősítő hibás kitöltését jelző hibát dobja.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0008</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza kisebb mint 6</td>
  <td>Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.</td>
  <td>A felület feldobja a túl rövid jelszó hibát.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0009</td>
  <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza nagyobb vagy egyenlő mint 6, viszont a felhasználónév már megtalálható az adatbázisban.</td>
  <td>Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.</td>
  <td>A felület kiírja, hogy a duplikált felhasználónév nem engedélyezett.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0010</td>
  <td>A regisztrációs oldalon a "Regisztrálok" szövegre kattintás.</td>
  <td>Siker, az webalkamazás átirányít a bejelentkező oldalra</td>
  <td>A felület átirányítja a kezdőlapra, amely jelen pillanatban a home oldal</td>
  <td>Átment</td>
 </tr>
  <tr>
  <td>H0011</td>
  <td>A kijelentkezés gombra kattintás.</td>
  <td>Siker, felugró ablakban jelezve, a felhasználó kiléptetését.</td>
  <td>Az oldal kijelentkeztet, így csak korlátozott oldalakat lehet elérni.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0012</td>
  <td>A Kvízek gombra kattintás.</td>
  <td>Siker, átirányítás a kvíz oldalra, ahol megjelennek a kvízek egy táblázatban.</td>
  <td>A kvíz listát jeleníti meg a felület, ha a felhasználó admin, akkor még egy gombot is, amellyel kvízt lehet létrehozni.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0013</td>
  <td>A "kvíz kezdése" linkre kattintás.</td>
  <td>Siker, átirányítás az adott kvíz oldalára.</td>
  <td>A megfelelő kvíz jelenik meg a felhasználó számára.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0014</td>
  <td>A kvíz oldalán található "Vissza a kvízekhez" gombra kattintás.</td>
  <td>Siker, átirányítás a kvízek listájának oldalra.</td>
  <td>A felület visszairányítja a kvíz listára.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0015</td>
  <td>A kvíz oldalán található "kvíz kezdése" gombra kattintás.</td>
  <td>Siker, átirányítás a kvíz első kérdésére.</td>
  <td>A kvíz elkezdődik, betölti a kvíz első kérdését.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0016</td>
  <td>"Következő kérdés" gombra kattintás, kiválasztott válasz nélkül</td>
  <td>Hiba, felugróablakban jelezve hogy nem választott semmit.</td>
  <td>A felület hibát dob, amely tartalmazza a hiba szöveget.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0017</td>
  <td>"Következő kérdés" gombra kattintás, kiválasztott válasszal.</td>
  <td>Siker, továbblépés a következő kérdésre.</td>
  <td>A felület átvált a következő kérdésre.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0018</td>
  <td>Az utolsó kérdés esetén a "következő kérdés" gomra való kattintás.</td>
  <td>Siker, felugró ablakban jelezve az eltalált válaszok arányát, siker esetén a megfelelő pontok hozzáadása a felhasználó pontjaihoz, és átirányít a kvíz listára, ellenkező esetben semmi nem történik és továbbirányítás a kvíz legelejére.</td>
  <td>Megjeleníti a végeredményt, sikeres kvíz esetén hozzáadja a kvízhez tartozó pontokat</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0019</td>
  <td>Kvíz neve (min 4 karakter), kvíz leírása (min. 10 karakter), pontszám (max. 200), és legalább egy kérdés megadása.</td>
  <td>Siker, átirányít a kvíz listára.</td>
  <td>A felület átirányít a kvíz listára, és ott megjelenik a kvízünk.</td>
  <td>Átment</td>
 </tr>
 <tr>
  <td>H0020</td>
  <td>Kvíz adatok megadása a kritériumoknak NEM megfelelően.</td>
  <td>Siker, hibaüzenetet dob a hibás mezőkre vonatkozó megfelelő üzenetekkel.</td>
  <td>A felület feldobja a megfelelő hibát, hogy mit kell még kitöltenie.</td>
  <td>Átment</td>
 </tr>
 </table>