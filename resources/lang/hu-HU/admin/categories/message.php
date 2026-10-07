<?php

return [
    'does_not_exist' => 'A kategória nem létezik.',
    'assoc_models' => 'Ez a kategória jelenleg legalább egy modellhez kapcsolódik, és nem törölhető. Kérjük, frissítse a modelleket, hogy ne hivatkozzon erre a kategóriára, és próbálja újra.',
    'assoc_items' => 'Ez a kategória jelenleg legalább egy :asset_type elemhez kapcsolódik, ezért nem törölhető. Módosítsa a(z) :asset_type elemeket, hogy ne hivatkozzanak erre a kategóriára, majd próbálja újra.',
    'create' => [
        'error' => 'Nem sikerült a kategória létrehozása, kérjük, próbálja újra.',
        'success' => 'Sikeresen létrehozta a kategóriát.',
    ],
    'update' => [
        'error' => 'Nem sikerült a kategória módosítása, kérjük, próbálja újra',
        'success' => 'Sikeresen módosította a kategóriát.',
        'cannot_change_category_type' => 'Létrehozás után nem tudod megváltoztatni a kategória tipusát',
    ],
    'delete' => [
        'confirm' => 'Biztos benne, hogy törölni szeretné a kategóriát?',
        'error' => 'A kategória törlése közben probléma merült fel, kérjük, próbálja újra.',
        'success' => 'A kategória sikeresen törölve.',
        'bulk_success' => 'A kategória sikeresen törölve.|:count kategória sikeresen törölve.',
        'partial_success' => 'A kategória sikeresen törölve. További információt alább talál.|:count kategória sikeresen törölve. További információt alább talál.',
    ],
    'bulkedit' => [
        'warn' => 'A következő kategória tulajdonságainak szerkesztésére készül:|A következő :count kategória tulajdonságainak szerkesztésére készül:',
        'no_selection' => 'Válasszon ki legalább egy kategóriát a szerkesztéshez.',
        'no_changes' => 'Nincsenek mezők megváltoztak, így semmi sem frissült.',
        'success' => 'A kategória sikeresen frissítve.|:count kategória sikeresen frissítve.',
    ],
];
