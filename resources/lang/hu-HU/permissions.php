<?php

return [
    'superuser' => [
        'name' => 'Super user',
        'note' => 'Meghatározza, hogy a felhasználó teljes hozzáféréssel rendelkezik-e az adminisztráció minden területéhez. Ez a beállítás felülír minden egyéb, a rendszerben megadott specifikusabb és korlátozóbb jogosultságot ',
    ],
    'admin' => [
        'name' => 'Adminisztrátori hozzáférés',
        'note' => 'Meghatározza, hogy a felhasználó hozzáfér-e a rendszer legtöbb területéhez, KIVÉVE a Rendszeradminisztrátori beállításokat. Ezek a felhasználók kezelhetik a felhasználókat, helyszíneket, kategóriákat stb., de a Teljes többvállalatos támogatás beállításai korlátozzák őket, amennyiben az engedélyezve van.',
    ],
    'import' => [
        'name' => 'CSV betöltés',
        'note' => 'Ez lehetővé teszi a felhasználók számára az importálást akkor is, ha máshol a rendszerben nincs hozzáférésük a felhasználókhoz, eszközökhöz stb.',
    ],
    'reports' => [
        'name' => 'Hozzáférés a jelentésekhez',
        'note' => 'Meghatározza, hogy a felhasználó hozzáfér-e az alkalmazás Jelentések menüpontjához.',
    ],
    'assets' => [
        'name' => 'Eszközök',
        'note' => 'Hozzáférést biztosít az alkalmazás Eszközök menüpontjához. ',
    ],
    'assetsview' => [
        'name' => 'Eszközök megtekintése',
        'note' => 'Ezzel a jogosultsággal a felhasználó az eszközmodellhez feltöltött fájlokat is megtekintheti, de nem módosíthatja vagy törölheti. Így a közös dokumentumok, például használati útmutatók több eszköz között is megoszthatók anélkül, hogy mindegyikhez külön fel kellene tölteni őket vagy fájlszerkesztési jogosultságot kellene adni. A felhasználó a szerkesztési és visszavételi előzményeket is megtekintheti.',
    ],
    'assetscreate' => [
        'name' => 'Új eszközök létrehozása',
    ],
    'assetsedit' => [
        'name' => 'Eszközök szerkesztése',
    ],
    'assetsdelete' => [
        'name' => 'Eszközök törlése',
    ],
    'assetscheckin' => [
        'name' => 'Visszavételezés',
        'note' => 'A jelenleg kiadott eszközök visszavételezése a készletbe.',
    ],
    'assetscheckout' => [
        'name' => 'Kiadás',
        'note' => 'Eszközök hozzárendelése a készletből kiadással.',
    ],
    'assetsaudit' => [
        'name' => 'Eszközök auditálása',
        'note' => 'Lehetővé teszi a felhasználó számára, hogy egy eszközt fizikailag leltározottként jelöljön meg.',
    ],
    'assetsviewrequestable' => [
        'name' => 'Igényelhető tételek megtekintése',
        'note' => 'A felhasználó megtekintheti az igényelhetőként megjelölt tételeket.',
    ],
    'assetsviewencrypted-custom-fields' => [
        'name' => 'Titkosított egyéni mezők megtekintése',
        'note' => 'A felhasználó megtekintheti és módosíthatja az eszközök titkosított egyéni mezőit.',
    ],
    'accessories' => [
        'name' => 'Tartozékok',
        'note' => 'Hozzáférést biztosít az alkalmazás tartozékok részéhez.',
    ],
    'accessoriesview' => [
        'name' => 'Tartozékok megtekintése',
    ],
    'accessoriescreate' => [
        'name' => 'Új tartozék létrehozása',
    ],
    'accessoriesedit' => [
        'name' => 'Tartozékok szerkesztése',
    ],
    'accessoriesdelete' => [
        'name' => 'Tartozékok törlése',
    ],
    'accessoriescheckout' => [
        'name' => 'Tartozékok kiadása',
        'note' => 'A felhasználó kiadással rendelhet hozzá tartozékokat a készletből.',
    ],
    'accessoriescheckin' => [
        'name' => 'Tartozékok visszavétele',
        'note' => 'A felhasználó visszaveheti a készletbe a jelenleg kiadott tartozékokat.',
    ],
    'accessoriesfiles' => [
        'name' => 'Tartozékfájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a tartozékokhoz kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'assetsfiles' => [
        'name' => 'Eszközfájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti az eszközökhöz kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'usersfiles' => [
        'name' => 'Felhasználói fájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a felhasználókhoz kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'modelsfiles' => [
        'name' => 'Modellfájlok kezelése',
        'note' => 'A felhasználó a modell- és az eszköznézetből is feltöltheti, letöltheti és törölheti az eszközmodellekhez kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'departmentsfiles' => [
        'name' => 'Részlegfájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a részlegekhez kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'suppliersfiles' => [
        'name' => 'Beszállítói fájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a beszállítókhoz kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'locationsfiles' => [
        'name' => 'Helyekhez kapcsolódó fájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a helyekhez kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'companiesfiles' => [
        'name' => 'Céges fájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a cégekhez kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'consumablesfiles' => [
        'name' => 'Fogyóeszközfájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a fogyóeszközökhöz kapcsolódó fájlokat. Megtekintési vagy magasabb jogosultsággal együtt használható.',
    ],
    'consumables' => [
        'name' => 'Fogyóeszközök',
        'note' => 'Hozzáférést biztosít az alkalmazás fogyóeszközök részéhez.',
    ],
    'consumablesview' => [
        'name' => 'Fogyóeszközök megtekintése',
    ],
    'consumablescreate' => [
        'name' => 'Új fogyóeszköz létrehozása',
    ],
    'consumablesedit' => [
        'name' => 'Fogyóeszközök szerkesztése',
    ],
    'consumablesdelete' => [
        'name' => 'Fogyóeszközök törlése',
    ],
    'consumablescheckout' => [
        'name' => 'Fogyóeszközök kiadása',
        'note' => 'A felhasználó kiadással rendelhet hozzá fogyóeszközöket a készletből.',
    ],
    'licenses' => [
        'name' => 'Licencek',
        'note' => 'Hozzáférést biztosít az alkalmazás licencek részéhez.',
    ],
    'licensesview' => [
        'name' => 'Licencek megtekintése',
    ],
    'licensescreate' => [
        'name' => 'Új licenc létrehozása',
    ],
    'licensesedit' => [
        'name' => 'Licencek szerkesztése',
    ],
    'licensesdelete' => [
        'name' => 'Licencek törlése',
    ],
    'licensescheckout' => [
        'name' => 'Licencek hozzárendelése',
        'note' => 'A felhasználó licenceket rendelhet eszközökhöz vagy felhasználókhoz.',
    ],
    'licensescheckin' => [
        'name' => 'Licencek visszavétele',
        'note' => 'A felhasználó megszüntetheti a licencek eszközökhöz vagy felhasználókhoz rendelését.',
    ],
    'licensesfiles' => [
        'name' => 'Licencfájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti a licencekhez kapcsolódó fájlokat.',
    ],
    'componentsfiles' => [
        'name' => 'Alkatrészfájlok kezelése',
        'note' => 'A felhasználó feltöltheti, letöltheti és törölheti az alkatrészekhez kapcsolódó fájlokat.',
    ],
    'licenseskeys' => [
        'name' => 'Licenckulcsok kezelése',
        'note' => 'A felhasználó megtekintheti a licencekhez tartozó termékkulcsokat.',
    ],
    'components' => [
        'name' => 'Alkatrészek',
        'note' => 'Hozzáférést biztosít az alkalmazás alkatrészek részéhez.',
    ],
    'componentsview' => [
        'name' => 'Alkatrészek megtekintése',
    ],
    'componentscreate' => [
        'name' => 'Új alkatrész létrehozása',
    ],
    'componentsedit' => [
        'name' => 'Alkatrészek szerkesztése',
    ],
    'componentsdelete' => [
        'name' => 'Alkatrészek törlése',
    ],
    'componentscheckout' => [
        'name' => 'Alkatrészek kiadása',
        'note' => 'A felhasználó kiadással rendelhet hozzá alkatrészeket a készletből.',
    ],
    'componentscheckin' => [
        'name' => 'Alkatrészek visszavétele',
        'note' => 'A felhasználó visszaveheti a készletbe a jelenleg kiadott alkatrészeket.',
    ],
    'kits' => [
        'name' => 'Előre definiált csomagok',
        'note' => 'Hozzáférést biztosít az alkalmazás előre összeállított készletek részéhez.',
    ],
    'kitsview' => [
        'name' => 'Előre összeállított készletek megtekintése',
    ],
    'kitscreate' => [
        'name' => 'Új előre összeállított készlet létrehozása',
    ],
    'kitsedit' => [
        'name' => 'Előre összeállított készletek szerkesztése',
    ],
    'kitsdelete' => [
        'name' => 'Előre összeállított készletek törlése',
    ],
    'users' => [
        'name' => 'Felhasználók',
        'note' => 'Hozzáférést biztosít az alkalmazás felhasználók részéhez.',
    ],
    'usersview' => [
        'name' => 'Felhasználók megtekintése',
        'note' => 'Ezzel a jogosultsággal a felhasználó a felhasználói rekordokhoz feltöltött fájlokat is megtekintheti, de nem módosíthatja vagy törölheti. A szerkesztési és visszavételi előzményeket is megtekintheti.',
    ],
    'userscreate' => [
        'name' => 'Új felhasználó létrehozása',
    ],
    'usersedit' => [
        'name' => 'Felhasználók szerkesztése',
    ],
    'usersdelete' => [
        'name' => 'Felhasználók törlése',
    ],
    'models' => [
        'name' => 'Modellek',
        'note' => 'Hozzáférést biztosít az alkalmazás modellek részéhez.',
    ],
    'modelsview' => [
        'name' => 'Modellek megtekintése',
    ],
    'modelscreate' => [
        'name' => 'Új modell létrehozása',
    ],
    'modelsedit' => [
        'name' => 'Modellek szerkesztése',
    ],
    'modelsdelete' => [
        'name' => 'Modellek törlése',
    ],
    'categories' => [
        'name' => 'Kategóriák',
        'note' => 'Hozzáférést biztosít az alkalmazás kategóriák részéhez.',
    ],
    'categoriesview' => [
        'name' => 'Kategóriák megtekintése',
    ],
    'categoriescreate' => [
        'name' => 'Új kategória létrehozása',
    ],
    'categoriesedit' => [
        'name' => 'Kategóriák szerkesztése',
    ],
    'categoriesdelete' => [
        'name' => 'Kategóriák törlése',
    ],
    'departments' => [
        'name' => 'Osztályok',
        'note' => 'Hozzáférést biztosít az alkalmazás részlegek részéhez.',
    ],
    'departmentsview' => [
        'name' => 'Részlegek megtekintése',
    ],
    'departmentscreate' => [
        'name' => 'Új részleg létrehozása',
    ],
    'departmentsedit' => [
        'name' => 'Részlegek szerkesztése',
    ],
    'departmentsdelete' => [
        'name' => 'Részlegek törlése',
    ],
    'locations' => [
        'name' => 'Helyek',
        'note' => 'Hozzáférést biztosít az alkalmazás helyek részéhez.',
    ],
    'locationsview' => [
        'name' => 'Helyek megtekintése',
    ],
    'locationscreate' => [
        'name' => 'Új hely létrehozása',
    ],
    'locationsedit' => [
        'name' => 'Helyek szerkesztése',
    ],
    'locationsdelete' => [
        'name' => 'Helyek törlése',
    ],
    'status-labels' => [
        'name' => 'Státusz címkék',
        'note' => 'Hozzáférést biztosít az eszközök állapotcímkéinek kezeléséhez.',
    ],
    'statuslabelsview' => [
        'name' => 'Állapotcímkék megtekintése',
    ],
    'statuslabelscreate' => [
        'name' => 'Új állapotcímke létrehozása',
    ],
    'statuslabelsedit' => [
        'name' => 'Állapotcímkék szerkesztése',
    ],
    'statuslabelsdelete' => [
        'name' => 'Állapotcímkék törlése',
    ],
    'custom-fields' => [
        'name' => 'Egyéni mezők',
        'note' => 'Hozzáférést biztosít az eszközök egyéni mezőinek kezeléséhez.',
    ],
    'customfieldsview' => [
        'name' => 'Egyéni mezők megtekintése',
    ],
    'customfieldscreate' => [
        'name' => 'Új egyéni mező létrehozása',
    ],
    'customfieldsedit' => [
        'name' => 'Egyéni mezők szerkesztése',
    ],
    'customfieldsdelete' => [
        'name' => 'Egyéni mezők törlése',
    ],
    'suppliers' => [
        'name' => 'Beszállítók',
        'note' => 'Hozzáférést biztosít az alkalmazás beszállítók részéhez.',
    ],
    'suppliersview' => [
        'name' => 'Beszállítók megtekintése',
    ],
    'supplierscreate' => [
        'name' => 'Új beszállító létrehozása',
    ],
    'suppliersedit' => [
        'name' => 'Beszállítók szerkesztése',
    ],
    'suppliersdelete' => [
        'name' => 'Beszállítók törlése',
    ],
    'manufacturers' => [
        'name' => 'Gyártók',
        'note' => 'Hozzáférést biztosít az alkalmazás gyártók részéhez.',
    ],
    'manufacturersview' => [
        'name' => 'Gyártók megtekintése',
    ],
    'manufacturerscreate' => [
        'name' => 'Új gyártó létrehozása',
    ],
    'manufacturersedit' => [
        'name' => 'Gyártók szerkesztése',
    ],
    'manufacturersdelete' => [
        'name' => 'Gyártók törlése',
    ],
    'companies' => [
        'name' => 'Cégek',
        'note' => 'Hozzáférést biztosít az alkalmazás cégek részéhez.',
    ],
    'companiesview' => [
        'name' => 'Cégek megtekintése',
    ],
    'companiescreate' => [
        'name' => 'Új cég létrehozása',
    ],
    'companiesedit' => [
        'name' => 'Cégek szerkesztése',
    ],
    'companiesdelete' => [
        'name' => 'Cégek törlése',
    ],
    'user-self-accounts' => [
        'name' => 'Saját felhasználói fiókok kezelése',
        'note' => 'A rendszergazdai jogosultság nélküli felhasználók kezelhetik saját fiókjuk bizonyos beállításait.',
    ],
    'selftwo-factor' => [
        'name' => 'Kétfaktoros hitelesítés kezelése',
        'note' => 'A felhasználók engedélyezhetik, letilthatják és kezelhetik saját fiókjuk kétfaktoros hitelesítését.',
    ],
    'selfapi' => [
        'name' => 'API-tokenek kezelése',
        'note' => 'A felhasználók létrehozhatják, megtekinthetik és visszavonhatják saját API-tokenjeiket. A tokenek a létrehozó felhasználóval azonos jogosultságokat kapnak.',
    ],
    'selfedit-location' => [
        'name' => 'Saját hely szerkesztése',
        'note' => 'A felhasználók szerkeszthetik saját fiókjukhoz rendelt helyüket.',
    ],
    'selfcheckout-assets' => [
        'name' => 'Eszközök kiadása saját részre',
        'note' => 'A felhasználók rendszergazdai közreműködés nélkül adhatnak ki eszközöket saját maguknak.',
    ],
    'selfview-purchase-cost' => [
        'name' => 'Beszerzési ár megtekintése',
        'note' => 'A felhasználók saját fiókjukban megtekinthetik a hozzájuk tartozó tételek beszerzési árát.',
    ],
    'depreciations' => [
        'name' => 'Értékcsökkenés kezelése',
        'note' => 'A felhasználók kezelhetik és megtekinthetik az eszközök értékcsökkenési adatait.',
    ],
    'depreciationsview' => [
        'name' => 'Értékcsökkenési adatok megtekintése',
    ],
    'depreciationsedit' => [
        'name' => 'Értékcsökkenési beállítások szerkesztése',
    ],
    'depreciationsdelete' => [
        'name' => 'Értékcsökkenési bejegyzések törlése',
    ],
    'depreciationscreate' => [
        'name' => 'Értékcsökkenési bejegyzések létrehozása',
    ],
    'grant_all' => 'Összes jogosultság engedélyezése ehhez: :area',
    'deny_all' => 'Összes jogosultság megtagadása ehhez: :area',
    'inherit_all' => 'Összes jogosultság öröklése jogosultsági csoportokból ehhez: :area',
    'grant' => 'Jogosultság engedélyezése ehhez: :area',
    'deny' => 'Jogosultság megtagadása ehhez: :area',
    'inherit' => 'Jogosultság öröklése jogosultsági csoportokból ehhez: :area',
    'use_groups' => 'A könnyebb kezelés érdekében egyéni jogosultságok helyett jogosultsági csoportok használata javasolt.',
];
