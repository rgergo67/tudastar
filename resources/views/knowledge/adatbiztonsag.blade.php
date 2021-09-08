<x-seo title="Biztonság és adatvédelem" />

<h2>Biztonság és adatvédelem</h2>

<p>Több módon igyekszünk növelni a nálunk tárolt adataid biztonságát, hisz ha nem is a valódi pénzedet kezeljük, mégis érzékeny és személyes információt tárolunk.</p>

<p>Például telefonod vagy számítógéped titkosított csatornán kommunikál szervereinkkel <em>(256 bites AES_256_GCM)</em>, amik LUKS (Linux Unified Key Setup) segítségével titkosítják az adatokat. Ez azt jelenti, hogy ha valaki be tudna törni az adatparkba és el tudná lopni az adattárolót, akkor sem tudnának hozzáférni a rajta lévő adatokhoz.</p>

<p>Oldalunkon a belépési felület védve van <em>brute force</em> támadásokkal szemben, ami azt jelenti, hogy ha valaki a te e-mail címeddel próbál belépni és véletlenszerűen próbálgat jelszavakat, akkor egy időre letiltjuk és hűvösre tesszük.</p>

<p>Erős jelszót neked kell választanod, mi csak annyit kérünk, hogy legalább 8 karakter hosszú legyen. Ezt utána szuper biztosan titkosítva tároljuk.</p>

<p>Amikor törlöd a fiókodot, mi nem csak inaktiváljuk azt mint sokan mások, hátha 3 év múlva mégis visszatérsz, hanem törlünk minden hozzád tartozó adatot az utolsó cseppig. <em>(Ha csak nem hosszabbítasz, az adataidat egy ideig még megőrizzük, hátha baleset vagy más családik okok miatt nem tudtál esetleg fizetni, így később ott folytathatod, ahol abbahagytad.)</em></p>

<p>Az anonim próba fiókokat adatokkal együtt 2 nap után töröljük, ha nem hosszabbítod meg 30 nappal a fiókot. A 30 napos próba fiókokat és a hozzájuk tartozó adatok 120 napig őrizzük, utána töröljük. Ugyanígy 120 napig őrizzük adataidat, ha lejár az előfizetésed de nem hosszabbítod meg.</p>

<div class="flex justify-center">
    <x-a href="{{ route('knowledge.index') }}" class="font-bold">Tudástár</x-a>
</div>
