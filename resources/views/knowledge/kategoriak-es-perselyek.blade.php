<x-seo title="2. Kategóriák és perselyek" />

<h2>2. Kategóriák és perselyek</h2>

<p>Regisztráció után egy teljesen üres felület fogad, ahol létrehozhatod első kategóriádat. A kategória arra való, hogy csoportokba rendezhesd a perselyeket.</p>

<figure>
    <picture>
        <img src="/images/perselyek.png" />
    </picture>
    <figcaption>Egy példa kategóriákra és perselyekre. A sorrendjüket tetszés szerint változtathatod.</figcaption>
</figure>

<p>Fent láthatsz egy példát, de teljesen rád van bízva, hogy milyen kategóriákat és perselyeket hozol létre. Akár azt is teheted, hogy nem bajlódsz a kategóriákkal, mindössze egyet csinálsz, majd minden perselyt abba teszel! Semmilyen hátrányod nem fog származni belőle: a kategória csak arra való, hogy csoportokba rendezhesd a perselyeket.</p>

<p>A persely az ami számít, ezekbe tudod beosztani a pénzed. Többféleképpen gondolhatsz rájuk: malacpersely, pénztárca, boríték... a lényeg, hogy fel tudod cimkézni a benne lévő pénzt aszerint, hogy milyen feladatot szánsz neki.</p>

<h3>Persely létrehozás</h3>

<p>Persely létrehozásához húzd az egered a kategória nevére, ekkor jobb oldalt megjelenik egy +malac ikon (telefonon alapból látszik), arra kattintva a lenti ablak nyílik meg.</p>

<x-figure name="persely_letrehozas" title="Így tudsz perselyt létrehozni." width="515" height="779" />

<p>A <b>név</b> magáért beszél, később erre tudsz rákeresni a jobb alul lévő keresővel, és a statisztikában is ez jelenik majd meg.</p>

<p><b>Cél</b>t nem muszáj beállítani, ám ha megteszed, akkor a persely sorában az összeg alatt megjelenik majd egy sáv, ami mutatja, hogy a célhoz képest mennyi pénz van a perselyben. Ez hosszú távú spórolásoknál lehet hasznos (karácsonyi ajándékokra teszel félre, vagy autóra gyűjtesz), vagy ha meg tudod mondani, hogy egy perselyben idális esetben mennyi pénznek kellene lennie.</p>

<p>A cél beállításáról részletesebben <x-a href="{{ route('knowledge.show', 'cel-beallitasa') }}">itt tudsz olvasni</x-a>.</p>

<p>A <b>határidő</b> elsősorban magadnak egy emlékeztető, ahogyan a <b>Fontos</b> is. Megjelenik a persely sorában, így nem felejted el. Ezen túl, az automatikus beosztásban is szerepet játszanak, erről a következő fejezetben olvashatsz.</p>

<p>A <strong>Dinamikus cél</strong> akkor jó, ha kiadáskor automatikusan csökkenteni szeretnéd a cél értékét. Például karácsonyi ajándékokra 50.000 Ft-ot szeretnél összegyűjteni. Májusban már sikerült 25.000 Ft-ot félretenni, látod is, hogy a cél 50%-át teljesítetted:</p>

<x-figure name="karacsonyi_ajandek_sporolas" title="Karácsonyi ajándékra már félretettél 25.000 Ft-ot, és beállítottad a dinamikus célt" width="626" height="132" />

<p>Júniusban látsz is egy jó ajándékot 10.000 Ft-ért, és megveszed. Ha előzőleg nem pipáltad ki a dinamikus célt, akkor a perselyedben 15.000 Ft lesz, de továbbra is 50.000 Ft-os cél. Ha viszont beállítottad a dinamikus célt, akkor a célod értéke 50.000 Ft-ról 40.000 Ft-ra csökken, hiszen összesen akartál 50.000 Ft-ot elkölteni, melyből 10.000-et már sikerült is. </p>

<p>Az <b>Ikon</b>ra kattintva megjelenik több mint 1.000 ikon. Nem kell végiglapozgatnod, egy kereső is van a tetején. Igyekeztünk releváns magyar kulcsszavakat megadni, de elképzelhető, hogy nem találod meg elsőre ami neked kell. <x-a href="{{ route('icons') }}">Itt nézheted meg az összes ikont</x-a> névvel és kulcsszavakkal, egy oldalon megjelenítve</p>

<hr>

<p>Csak rajtad múlik, hogy milyen alapossággal szeretnéd beosztani a pénzed. Mi azt szoktuk javasolni, hogy határozd meg, mi a célod, és ennek megfelelően hozd létre a perselyeket, erről <x-a href="{{ route('knowledge.show', 'persely-letrehozas-pelda') }}">részletesebben itt olvashatsz</x-a>.</p>

<p>Ha fogalmad sincs hogyan kezdj neki, íme egy egyszerű példa amit elkezdhetsz használni, menet közben pedig majd alakítod ahogy kényelmes:</p>

<p>Egyelőre legyen 1 kategóriád <i>Perselyek</i> névvel, és tedd minden perselyed ebbe. Később, ha új kategóriát hozol létre, simán áthúzhatod a perselyeket egyik kategóriából a másikba.</p>

<ul>
    <li><b>Vésztartalék</b> - nagyon fontos. Mindig legyen egy vésztartalék perselyed, ha csak 10.000 Ft is kerül bele. Ha lehetőséged van többet ide tenni, az ajánlás 6 havi fizetés.</li>
    <li><b>Hitel</b> - ha van bármilyen hiteled, és nem egyből a fizetésed beérkezése után törleszted, mindenképpen csinálj egy ilyen kategóriát. Állítsd be célként a hitel összegét és jelöld dinamikusnak, így amikor törlesztes, a cél értéke is csökkenni fog.</li>
    <li><b>Számlák</b> - Nem muszáj túlrészletezni. Célként mi a havi számláink éves átlagának háromszorosát szoktuk beletenni. Magyarul összeadjuk, hogy egy évben mennyi víz+gáz+áram+kuka díjat fizetünk, és elosztjuk 4-gyel, így megvan a 3 havi átlag. </li>
    <li><b>Vásárlás</b> - Ez nálunk Lidl, Aldi, Pepco és hasonlók, ritkán szoktuk külön bontani az ételt a háztartási dolgoktól.</li>
    <li><b>Szórakozás</b> - Ide tartozhat minden hobbi, cukrászda, nyaralás</li>
    <li><b>Egyéb</b> - A maradék pénzt tedd ide, így ha egy kiadást sehova sem tudsz besorolni (pl kapsz egy parkolási büntetést), akkor azt fizesd innen.</li>
    <li><b>Jótékonyság</b> - Ha van rá lehetőséged, érdemes ezt is minél hamarabb létrehozni. Természetesen spórolni szeretnél, de ha csak havi 500 Ft-ot nélkülözni tudsz, az lehet, hogy valaki másnak egy egész napi ételt jelent. <x-a href="https://kiszamolo.hu/az-adakozasrol-meg-egyszer" target="_blank">Bővebben erről itt tudsz olvasni.</x-a></li>
</ul>

<div class="flex justify-center">
    <x-a href="{{ route('knowledge.show', 'oszd-be-a-penzed') }}" class="font-bold">3. Oszd be a pénzed >></x-a>
</div>
