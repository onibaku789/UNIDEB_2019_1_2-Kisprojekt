# Rendszerterv

## Tartalomjegyzék
- [Bevezető](#bevezető)
- [Mérföldkövek](#Mérföldkövek)
- [Fizikai környezet](#fizikai-környezet)
- [Domain modell](#domain-modell)
- [Architekturális terv](#architekturális-terv)
- [Felhasználói felület](#felhasználói-felület)
- [Adatbázis terv](#adatbázis-terv)
- [Üzleti folyamatok](#üzleti-folyamatok)
- [Tesztterv](#tesztterv)

#### Bevezető

A program célja, hogy a Sári Gusztáv Általános Iskola és Alapfokú Művészeti Iskola az erdők védelme érdekében online tudjon dolgozatot íratni. Szeretnének egy online felületet, amin keresztül kvíz kérdés alapú dolgozatot tudnak íratni a tanárok.

#### Mérföldkövek

A kvíz projekt mérföldkövei a következők:
1. Mérföldkő: A domain meghatározása és megfelelő szoláltató keresése.
2. Mérföldkő: A bejelentkező felület elkészítése
3. Mérföldkő: A regisztrálciós felület elkészítése
4. Mérföldkő: A kvízek listázási felületének elkészítése
5. Mérföldkő: Új kvíz létrehozási felületének elkészítése
6. Mérföldkő: Kvíz felület elkészítése
7. Mérföldkő: Kvíz értékelő elkészítése
8. Mérföldkő: Tesztelés
9. Mérföldkő: 1.0-ás verzió átadása

#### Fizikai környezet

A projekt webalkalmazásként valósul meg a megrenedlő kérésének megfelelően. <br>
A webalkalmazás domain-je a www.easyplanner.hu. <br>
Ennek következtében a fizikai környezet melyet a projekt megkövetel a tervezett használathoz a következőek.
- Böngésző futtatására alkalmas eszköz:
	- Okos készülékek (modern maroktelefon vagy tablet), asztali számítógép vagy laptop
- A projekt támogatja az összes modern mainstream böngészőt, így a használathoz alkalmazása ezek ajánlott (a projektet csak a felsorolt böngészőkben teszteltük):
	- Firefox
	- Google Chrome
	- Microsoft Edge
	- Opera
- A fentiekből következik, hogy a projekt optimális használatának érdekében a stabil internet elérés elengedhetetlen.

#### Domain modell

#### Architekturális terv

#### Adatbázis terv
![Adatbázis terv](./img/Adattábla.PNG)
#### Felhasználói felület
- **Bejelentkezés**:  A felhasználó két kitöldenő mezőt lát egymás mellett, illetve két gombot. 
A kitöltendő mezők nevei: "Felhasználónév", "Jelszó". 
A gombok a submit, illetve a regisztrációs oldalra való átirányításért felelősek.
![Login_page](./img/login-page.jpg)

- **Regisztráció**: A felhasználó négy kitöltendő mezőt lát kétszer kettes táblában, illetve két gombot. 
A kitöltendő mezők nevei: "Felhasználónév", "Email", "Jelszó", "Jelszó megerősítés". 
A gombok a submit, illetve a belépés oldalra való átirányításért felelősek.
![Register_page](./img/regisztráció.png)
- **Home**: Az az oldal, ahova a felhasználó megérkezik minden egyes bejelentkezés után.

- **Kvíz**: Ezen az oldalon lesznek láthatóak egy táblázatban a kitölthető és kitöltött kvízek.
![Kvíz page](./img/kvíz.png)
#### Üzleti folyamatok


#### Tesztterv

A tesztelés folyamatának leírása:<br>
Minden egyes mérföldkőnek az elérése után a fejlesztői csoport az aktuálisan bekerült funkciókat köteles letesztelni és az előző funkciókat szúrópróba szerűen tovább tesztelni. Amint a fejlesztés befejeződik, a teljes verziót még átadás előtt egy a fejlesztők által alkotott csoport az alábbi táblázatot követve leteszteli. Amennyiben a teszt minden eleme sikerrel zárul a projekt egy kb 10 főt számláló független tesztelő csoport kezébe kerül. A csoport a tesztelési eredményeket részletesen leírja. Az eredmények függvényében a fejlesztő csoport az alábbi két lépés közül válasz. Hibák esetén azokat javítja és visszadja a tesztelő csoportnak a projektet további tesztelésre vagy ha, nem található hiba a webalkalmazásban a projekt átadható a megrendelő számára.

 <table  style="width:100%" border="1px thin black" >
 
 <tr >
 <th> Tesztjegy
 <th> Modul
 <th> Művelet
 <th> Hatás
 </tr>

 <tr>
 <td>H0001
 <td>Bejelentkezés
 <td>A bejelntkező űrlapot olyan felhasználó és jelszó párral töltik ki ami előzetesen nem regisztrált a rendszerben.
 <td> Hiba, a felület kijelzi, hogy a felhasználó és jelszó páros nem helyes.
 </tr>
 
 
 <tr>
  <td>H0002
  <td>Bejelentkezés
  <td>A bejelntkező űrlapot olyan felhasználóval töltik ki ami nem szerepel az adatbázisan.
  <td> Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.
  </tr>
  
  <tr>
   <td>H0003
   <td>Bejelentkezés
   <td>A bejelntkező űrlapot olyan  jelszóval párral töltik ki ami nem szerepel az adatbázisban.
   <td> Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.
   </tr>
   
   <tr>
    <td>H0004
    <td>Bejelentkezés
    <td>A bejelntkező űrlapot olyan felhasználó és jelszó párral töltik ki ami szerepel az adatbázisan.
    <td> Siker, a felület a "Home" oldalra irányít át.
    </tr>
    
   <tr>
      <td>H0005
      <td>Regisztráció
      <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres.
      <td> Siker, a felület a "Home" oldalra irányít át, bejelentkezve.
   </tr>
   
   <tr>
         <td>H0006
         <td>Regisztráció
         <td> A regisztrációs űrlap email mezőjében a beírt szöveg nem megfelel az email cím szabványnak és a többi mező nem üres.
         <td> Hiba, a felület kijelzi, hogy az email mezőbe írt szöveg nem megfelelő emailcím.
   </tr>
   <tr>
         <td>H0007
         <td>Regisztráció
         <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező üres.
         <td> Hiba, a felület kijelzi, hogy a felhasználó, jelszó és a jelszó megerősítő túl rövid vagy nincs kitöltve.      
   </tr>
   
  <tr>
        <td>H0008
        <td>Regisztráció
        <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza kisebb mint 6
        <td> Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.
  </tr>
    <tr>
          <td>H0009
          <td>Regisztráció
          <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza nagyobb vagy egyenlő mint 6, viszont a felhasználónév már megtalálható az adatbázisban.
          <td> Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.
    </tr>
     <tr>
           <td>H0010
           <td>Regisztráció
           <td> A regisztrációs oldalon a "Lépj be!" szövegre kattintás.
           <td> Siker, az webalkamazás átirányít a bejelentkező oldalra,
     </tr>
      <tr>
            <td>H0011
            <td>Home
            <td> A kijelentkezés gombra kattintás.
            <td> Siker, felugró ablakban jelezve, a felhasználó kiléptetését.
      </tr>
    <tr>
       <td>H0012
       <td>Home
       <td> A Kvízek gombra kattintás,
       <td> Siker, átirányítás a kvíz oldalra, ahol megjelennek a kvízek egy táblázatban.
    </tr>
    <tr>
      <td>H0013
      <td>Kvíz
      <td> A "kvíz kezdése" linkre kattintás.
      <td> Siker, átirányítás az adott kvíz oldalára.
    </tr>
    <tr>
      <td>H0014
      <td>Kvíz
      <td> A kvíz oldalán található "Vissza a kvízekhez" gombra kattintás,
       <td> Siker, átirányítás a kvízek listájának oldalra.
    </tr>
     <tr>
           <td>H0015
           <td>Kvíz
           <td> A kvíz oldalán található "kvíz kezdése" gombra kattintás,
           <td> Siker, átirányítás a kvíz első kérdésére.
     </tr>
      <tr>
            <td>H0016
            <td>Kvíz
            <td> "Következő kérdés" gombra kattintás, kiválasztott válasz nélkül,
            <td> Hiba, felugróablakban jelezve hogy nem választott semmit,
       </tr>
     <tr>
       <td>H0017
       <td>Kvíz
       <td> "Következő kérdés" gombra kattintás, kiválasztott válasszal.
       <td> Siker, továbblépés a következő kérdésre.
      </tr>
      <tr>
        <td>H0018
       <td>Kvíz
        <td> Az utolsó kérdés esetén a "következő kérdés" gomra való kattintás.
       <td> Siker, felugró ablakban jelezve az eltalált válaszok arányát, siker esetén a megfelelő pontok hozzáadása a felhasználó pontjaihoz, ellenkező esetben semmi nem történik és továbbirányítás a kvízek listájára.
      </tr>
         
      
    
     
 </table>
