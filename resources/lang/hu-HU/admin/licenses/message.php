<?php

return [
    'does_not_exist' => 'A licenc nem létezik, vagy nincs engedélye a megtekintéséhez.',
    'user_does_not_exist' => 'A felhasználó nem létezik, vagy nincs engedélye a megtekintéséhez.',
    'asset_does_not_exist' => 'A licencel társítani kívánt eszköz nem létezik.',
    'owner_doesnt_match_asset' => 'Az ehhez a licenchez társítani kívánt eszköz tulajdonosa nem más, mint a kiválasztott legördülő menüben kiválasztott személy.',
    'assoc_users' => 'Ez a licenc jelenleg ki van adva a felhasználónak, és nem törölhető. Kérjük, először ellenőrizze az engedélyt, majd próbálja meg újra törölni.',
    'select_asset_or_person' => 'Válasszon egy eszközt vagy egy felhasználót, de nem mindkettőt.',
    'not_found' => 'Licensz nem található',
    'seats_available' => ':seat_count szabad licenchely',
    'create' => [
        'error' => 'A licenc nem jött létre, próbálkozzon újra.',
        'success' => 'A licenc sikeresen létrehozva.',
    ],
    'deletefile' => [
        'error' => 'A fájl nem törölve. Kérlek próbáld újra.',
        'success' => 'A fájl sikeresen törölve.',
    ],
    'upload' => [
        'error' => 'Fel nem töltött fájl (ok). Kérlek próbáld újra.',
        'success' => 'Fájl (ok) sikeresen feltöltve.',
        'nofiles' => 'Nem választottál fel fájlokat a feltöltéshez, vagy a fájl, amelyet feltölteni próbálsz, túl nagy',
        'invalidfiles' => 'Egy vagy több fájl túl nagy vagy egy filetype, amely nem megengedett. Az engedélyezett fájltípusok png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml és lic.',
    ],
    'update' => [
        'error' => 'A licenc nem frissült, próbálkozzon újra',
        'success' => 'A licenc sikeresen frissült.',
    ],
    'delete' => [
        'confirm' => 'Biztosan törölni szeretné ezt az engedélyt?',
        'error' => 'Hiba történt az engedély törlése során. Kérlek próbáld újra.',
        'success' => 'Az engedélyt sikeresen törölték.',
        'bulk_success' => 'A kiválasztott licencek sikeresen törölve.',
        'partial_success' => 'A licenc sikeresen törölve. További információt alább talál.|:count licenc sikeresen törölve. További információt alább talál.',
        'bulk_checkout_warning' => 'A(z) :license_name licenc egyes helyei jelenleg ki vannak adva, ezért nem törölhető. Törlés előtt vegye vissza az összes licenchelyet.',
    ],
    'delete_with_checkin' => [
        'bulk_success' => ':count licenc sikeresen törölve :seats licenchely visszavétele után.',
        'partial_success' => ':count licenc sikeresen törölve :seats licenchely visszavétele után. További információt alább talál.',
    ],
    'checkout' => [
        'error' => 'Hiba történt az engedély megvizsgálásakor. Kérlek próbáld újra.',
        'success' => 'Az engedélyt sikeresen kiállították',
        'not_enough_seats' => 'Nincs elegendő licenchely a kivételhez',
        'mismatch' => 'A megadott licenchely nem egyezik a licenccel',
        'unavailable' => 'Ez a licenchely nem elérhető kivételre.',
        'license_is_inactive' => 'Ez a licenc lejárt vagy megszűnt.',
    ],
    'checkin' => [
        'error' => 'Hiba történt az engedélyben. Kérlek próbáld újra.',
        'not_reassignable' => 'A licenchely már használatban van',
        'success' => 'Az engedélyt sikeresen ellenőrizték',
    ],
    'import' => [
        'no_free_seats' => 'A(z) „:license” licencnek nincs szabad helye. „:target” nem lett licenchelyhez rendelve.',
    ],
];
