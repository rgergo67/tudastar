<x-seo title="Biztonság és adatvédelem" />

<h2>Biztonság és adatvédelem</h2>

<p>Több módon igyekszünk növelni a nálunk tárolt adataid biztonságát, például az összes kategória és persely neve, illetve minden összeg titkosított formában van eltárolva adatbázisunkban. Ha például egy perselynek 67-es cél összeget állítottál be, az így néz ki nálunk tárolva <i>(ez csak példa):</i></p>

<blockquote class="break-all"><p>eyJpdiI6ImlGZnpGWWdwVnR5U3VBQXZrODZYa0E9PSIsInZhbHVlIjoiN1U3RW1kVGRUcnRhM2xGRkNMU3poUT09IiwibWFjIjoiZmZkZjAxYjE0OGE3NzBiYjMwZDZkOWNhNDczZmIyZTAxNTE1ODg0MGI4ODQ2ZjhlY2U2NmI3MGFkNWMwZjdjZCJ9</p></blockquote>

<p>Ezeknek titkosítását valós időben fejtjük vissza, akkor, amikor éppen szükséged van rá, majd amikor módosítasz egy értéket, azonnal titkosítva kerül eltárolásra.</p>

<p>Egy másik módja az adatvédelemnek az, ha kizárólag a szükséges adatokat tároljuk el. Például minden tevékenységedet töröljük 67 nap után, addig is csak azért őrizzük meg, hogy 2 hónapra visszamenően statisztikát tudj lekérdezni, illetve ha elfelejtetted volna, hogy rögzítetted-e már a tankolást vagy nem, meg tudd nézni.</p>

<div class="flex justify-center">
    <x-a href="{{ route('knowledge.index') }}" class="font-bold">Tudástár</x-a>
</div>
