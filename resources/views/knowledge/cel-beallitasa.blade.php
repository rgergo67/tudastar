<x-seo title="Költségvetési cél beállítása" />

<h2>Cél beállítása</h2>

<p>Persely létrehozásakor nem muszáj célt beállítani.</p>

<p>Például egy <i>Szórakozás</i> perselyhez mi nem állítunk célt. Ha marad "felesleges" pénzünk, akkor teszünk bele, had gyűljön szépen lassan. Amikor ki akarunk kapcsolódni, az éppen benne lévő pénznek megfelelően tervezzük meg az eseményt.</p>

<p>Ha viszont nyaralni szeretnénk, és pontosan tudjuk, hogy mi a cél és ez mennyibe fog kerülni, akkor a Nyaralás perselyben azt az összeget állítjuk be célként. Így sokkal egyszerűbb tervezni, hogy havonta mennyit tegyünk félre, esetleg le kell-e mondanunk valami másról, hogy időre meg tudjuk spórolni az adott összeget.</p>

<p>Cél beállítása akkor lehet még hasznos, ha meg tudod mondani, hogy egy perselyben idális esetben mennyi pénznek kellene lennie. Például: vállalkozás fix költségeire 400.000 Ft-ot állítottunk be, mert évente ennyibe kerül, ételre 120.000 Ft-ot, mert havonta kb ennyit vásárolunk, benzinre 50.000-et, mert jó ha félre van téve néhány teli tanknyi.</p>

<p>Amikor jön a következő fizetés, a maradék összeget kiegészítjük (ha tudjuk), hogy ismét elérjük a célt. Ebben majd az automatikus beosztás is segítségünkre lehet.</p>

<p>Ha beállítottál egy célt, akkor a persely sorában az összeg alatt megjelnik majd egy sáv, ami mutatja, hogy a célhoz képest mennyi pénz van a perselyben. Ez hosszú távú spórolásoknál lehet hasznos (karácsonyi ajándékokra teszel félre, vagy autóra gyűjtesz), vagy ha meg tudod mondani, hogy egy perselyben idális esetben mennyi pénznek kellene lennie.</p>

<h3>Fix vagy dinamikus cél</h3>

<p>Ha beállítasz egy célt, az alapból "fix" lesz, azaz ha költesz is a perselyből, a cél nem változik. Például beállítok az <b>Étel</b> perselyre egy 80.000 Ft-os célt, ha fizetést kapok feltöltöm eddig, ha pedig kiadásom van, költök belőle. A cél ettől nem változik, fixen 80.000 Ft marad, így tudom minden fizetéskor, hogy meddig kell feltölteni.</p>

<p>Van egy <b>Dinamikus cél</b> jelölő négyzet a persely szerktesztésénél, ha azt bepipálod, onnantól a célod csökkenni fog, ha költesz a perselyből. Két példa, hogy mikor lehet ez hasznos:</p>

<p>1. Ha van egy hiteled, például diákhitel, melynek összege 100.000 Ft, akkor beállíthatod ezt az összeget dinamikus célnak. Eleinte üres a persely, első fizetésedkor beleteszel 50.000 Ft-ot, majd amikor fizetsz belőle mondjuk 20.000-et, a cél lecsökken 80.000 Ft-ra.</p>

<p>2. Ha eldöntötted, hogy idén karácsonyi ajándékokra 50.000 Ft-ot szeretnél összegyűjteni. Májusban már sikerült 25.000 Ft-ot félretenni, látod is, hogy a cél 50%-át teljesítetted:</p>

<x-figure name="karacsonyi_ajandek_sporolas" title="Karácsonyi ajándékra már félretettél 25.000 Ft-ot, és beállítottad a dinamikus célt" width="626" height="132" />

<p>Júniusban látsz is egy jó ajándékot 10.000 Ft-ért, és megveszed. Ha előzőleg nem pipáltad ki a dinamikus célt, akkor a perselyedben 15.000 Ft lesz, de továbbra is 50.000 Ft-os cél. Ha viszont beállítottad a dinamikus célt, akkor a célod értéke 50.000 Ft-ról 40.000 Ft-ra csökken, hiszen összesen akartál 50.000 Ft-ot elkölteni, melyből 10.000-et már sikerült is. </p>

<h3>Határidő, fontos</h3>

<p>A cél beállítása után, határidővel vagy fontosnak jelöléssel tudjuk azt nyomatékosabbá tenni. Ennek az automatikus beosztás során van szerepe.</p>

<p>Amennyiben van beosztható pénzed, egy kis varázspálca jelenik meg mellette, erre kattintva megjelennek azok a perselyek, melyeknél célt állítottál be, és még nem érted el azt. A program fentről lefelé tölti fel a perselyeket, viszont mentés előtt tetszés szerint módosíthatod ezt. A perselyeket így rendezi sorba a program:</p>

<ul>
    <li>Azok jelennek meg aminél van cél beállítva, de ennél kevesebb pénz van benne</li>
    <li>Először azok amik fontosak</li>
    <li>Utána az aminek van határideje (aminek közelebbi, az feljebb)</li>
    <li>Ha nem fontos, és nincs határidő, akkor az van feljebb, aminél kevesebb kell a cél eléréséhez</li>
</ul>

<figure>
    <picture>
        <img src="/images/automatikus-beosztas.png" />
    </picture>
    <figcaption>Ha néhány perselyednél állítottál be célt, és még nem érted el, az automatikus beosztás segítségedre lehet</figcaption>
</figure>

<div class="flex justify-center">
    <x-a href="{{ route('knowledge.index') }}" class="font-bold">Tudástár</x-a>
</div>
