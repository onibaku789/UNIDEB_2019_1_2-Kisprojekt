# Funkcióspecifikáció
* * *
## Tartalomjegyzék

- [Jelenlegi helyzet leírása](#jelenlegi-helyzet-leírása)
- [Kínált üzleti folymatok](#kínált_üzleti_folyamatok)
- [Követelménylista](#követelménylista)
- [Használati esetek](#használati-esetek)
- [Képernyőkép tervek](#képernyőkép-tervek)


#### Jelenlegi helyzet leírása

A Sári Gusztáv Általános Iskola és Alapfokú Művészeti Iskola (későbbiekben megrendelő) megkereste a Taco's Kft. fejlesztői csapatát miszerint reformálni szeretnék a gyermekek értékelését a mai modern eszközök segítségével. A megrendelő egyszerű és könnyen átáláthatő webalkalmazást kért a csapatunktól.
Tehát megrendelőnek szüksége van egy webalkalmazásra, amely lehetővé teszi, hogy XXI. századi eszközök segítségével értékeljék a gyermekek házi feladatait és akár dolgozatírást is tudjanak a segítségével lebonyolítani. A webalkalmazás kvízek segítségével százáalékokkal értékeli a tudást, megadott válaszok alapján. A webalkalmazás megkülönböztet admin és sima mezei felhasználót. Az admin jogosultsággal rendelkező emberek alkotják a tanárokat, míg a diák csak sima felhasználói jogosultságot kapjon.

#### Kínált üzleti folyamatok
###### Diák üzleti folyamat
![Diák üzleti folyamatok](./img/Diak_uzleti_modell.svg)<br>
<br>
###### Oktató üzleti folyamat
![Oktató üzleti folyamatok](./img/oktató-üzleti-modell.svg)<br>

#### Követelménylista

###### A megrendelő által kért funkciók
- Szabad regisztráció egyedi felhasználói névvel
- Tanárok tudjanak kvízeket létrehozni és kitölteni
- Az aktuális kvízek listázhatóak és kitölthetőek legyenek
- Diákok és a tanárok is tudjanak kvízeket kitölteni
- Kvízeken elérhető pontszámok és az adott felhasználó által elért pontszámok megjelenítése
- A három féle kvíz megadása (dolgozat, gyakorlás, házifeladat)
- A dolgozat típusú kvíz időkorlátos legyen
- A dolgozat és házi feladata kvízeket ne tudjon egy felhasználó egynél többször kitölteni
- Minden felhasználó ki tudjon jelentkezni az oldalról

###### Az általunk vállalt funkciók
- Szabad regisztráció egyedi felhasználói névvel
- Tanárok tudjanak kvízeket létrehozni és kitölteni
- Kvízek listázása
- Minden jogosultsággal lehet kvízt kitölteni
- Elérhető és megszerzett pontok megjelenítése kvízekhez
- Bármely felhasználó kijelentkezhet az oldalról

###### Azok a funkciók amiket a megadott időn belül nem tudunk vállalni

- Három kvízfajta
-- Ehelyett csak egy lesz
- Időtartam megadása
-- Nem lesz időhöz kötött a kvízek kitöltése, ez továbbra is azt eredményezi, hogy az oktatónak kell felügyelnie a diákokat dolgozatírás közben.
- Távoli beavatkozás / megfigyelés
-- Az oktatóknak nem áll módjukban az éppen folyamatban lévő kvízekhez hozzáférni, irányítani, leállítani.
- Eredmények felülbírálása / megtekintése.
-- Az oktatók nem tudják megtekinteni a kvízzel elkészült hallgatók eredményeit, megoldásait.

#### Használati esetek

- Bejelentkezésnél
-- Felhasználó beírja felhasználónevét, jelszavát, ha sikerül azonosítania magát, akkor bedobja a főoldalra a felhasználót, ellenkező esetben hibát dob fel neki a megfelelő hibaüzenettel.
- Regisztrációnál
-- Ha kritériumoknak megfelelően kitölttöte a felhasználó a mezőket, akkor automatikusan belépteti a rendszer, ellenkező esetben hibaüzenet dob.
- Kvíz választásnál
-- A rendszer egy listában kiírja az összes elérhető kvízt, (nem elérhetők azok, amelyeket már teljesített a felhasználó) és azok közül választhat szabadon, majd a kvíz kezdése oldalra dobja tovább.
- Kvíz oldal
-- Itt még lehetősége van a felhasználónak eldöntenie, hogy elkezdi-e a kvízt, vagy inkább választ másikat, ha úgy dönt, hogy folytatja, akkor bedobja neki az első kérdést a kiválasztott kvízből, ha ellenkezőleg dönt, akkor visszadobja a kvíz listára.
- Kvíz vége
-- A kvíz végeztével a felhasználó megkapja a válaszai eredményét százalékos formában kiértékelve, a felületen, kvíz létrehozásánál lehetősége van az oktatónak beállítani a minimális százalékértéket, amelytől sikeresnek bizonyul a kvíz. Ha sikeres, akkor visszadobja a kvíz lista oldalra, és megkapja a pontszámát a felhasználó, innentől nem tudja teljesíteni ugyanazt a kvízt. Ellenkező esetben visszadobja a kvíz elejére, így akár újra tudja próbálni a tesztet.
- Kvíz létrehozása
-- Több pontból áll a kvíz létrehozása, szüksége van kérdések, és válaszaik megadására, egy kérdésben kizárólag egy válasz lehet jó megoldás. (ezt is meg kell adnia az oktatónak) Lehetősége nyílik arra, hogy újra kezdje a kvíz létrehozását, de egy már felvett kérdést nem tud törölni.

#### Képernyőkép tervek
Beljelentkezéshez egy egyszerű űrlap kitöltésre való oldal.
![Login_page](./img/login-page.jpg)<br><br>
Regisztrációhoz egy egyszerű űrlap kitöltésre való oldal.
![Register_page](./img/regisztráció.png)<br><br>
A kvízek kiválasztására egy táblázat.
![Kvíz page](./img/kvíz.png)<br><br>