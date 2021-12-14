<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="w-full sm:max-w-7xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose lg:prose-lg">
                <h2>Mennyit ér a pénzünk?</h2>

                <p>Régen minden jobb volt. Egy kenyér 2 Ft, egy gombóc fagyi 50 fillér, ma pedig mindkettő 3-400 Ft, ez több százszoros áremelkedés, a fizetés pedig alig nő!</p>

                <p>Legalábbis ezt halljuk a leggyakrabban, azon viszont ritkán gondolkodunk el, hogy lehet, hogy a hiba bennünk, és a kényelmes életünkben van.</p>

                <p>A lenti grafikon segítségével azt tudod megnézni, hogy az évek alatt növekvő minimálbérhez, átlagkeresethez, és a teljes pénzmennyiséghez (M3) képest mennyivel lettek drágábbak azok a termékek, amiket a KSH az infláció kiszámításához használ.</p>

                <form id="form" action="{{ route('inflation.the_worth_of_money') }}" method="get">
                    <select name="index1" id="index1" onchange="document.getElementById('form').submit();">
                        @foreach($moneyTypes as $index => $moneyType)
                            <option value="{{ $index }}" @if($index == request('index1')) selected @endif>{{ $moneyType }}</option>
                        @endforeach
                    </select>
                    <select name="index2" id="index2" onchange="document.getElementById('form').submit();">
                        @foreach($goods as $index => $good)
                            <option value="{{ $index }}" @if($index == request('index2')) selected @endif>{{ $good }}</option>
                        @endforeach
                    </select>
                </form>

                <p>{{ $firstMeaningfulRow[0] }} és {{ $lastMeaningfulRow[0] }} között a {{ $header[0] }} {{ $firstMeaningfulRow[1] }} Ft-ról {{ $lastMeaningfulRow[1] }} Ft-ra nőtt, azaz {{ round($lastMeaningfulRow[1] / $firstMeaningfulRow[1], 2) }}x több lett. Kezdetben egy "{{ $header[1] }}" {{ $firstMeaningfulRow[2] }} Ft-ba került, végül {{ $lastMeaningfulRow[2] }} Ft-ba, ami {{ round($lastMeaningfulRow[2] / $firstMeaningfulRow[2], 2) }}x árváltozás. Régen {{ round($firstMeaningfulRow[3]) }} db jött ki a pénzből, ma {{ round($lastMeaningfulRow[3]) }}, ez {{ round($lastMeaningfulRow[3] / $firstMeaningfulRow[3], 2) }}x @if($lastMeaningfulRow[3] < $firstMeaningfulRow[3]) <span class="text-red-600 font-bold">kevesebb</span> @else <span class="text-green-600 font-bold">több</span> @endif .</p>

                <div id="linechart-inflacio" class="w-full mt-6" style="height: 500px"></div>

                <p>A <span class="text-green-600 font-bold">zöld vonal</span> mutatja a fizetések emelkedését, a <span class="text-red-600 font-bold">piros</span> az adott termék árának növekedését, a <span class="text-yellow-500 font-bold">sárga</span> pedig azt, hogy adott évben abból a fizetésből mennyit tudtál megvenni.</p>

                <x-inline-cta />

                <p>Nyilván minden drágul, de a legtöbb esetben sokkal nagyobb mértékben emelkedik a fizetés, mint a termékek ára. Például 1995-ben 12.200 Ft-os minimálbér mellett a kenyér ára 67 Ft volt, ebből 182 kenyeret lehetett venni. 2020-ban a minimálbér 161.000 Ft, a kenyér ára 356 Ft, 452 db-ot tudtunk venni belőle.</p>

                <p>Persze van ellenpélda is, nézd meg az akácmézet: régen 94 kijött a minimálbéről, ma pedig csak 40. Ilyen még a múzeumi vagy állatkerti belépő is.</p>

                <h2>Miért érezzük akkor mégis azt, hogy alig van pénzünk?</h2>

                <p>Részben talán azért, mert fogyasztói társadalom lettünk, minden irányból az ömlik ránk, hogy "Vásárolj! Vegyél újjat! Cseréld le!". Régen sokkal kisebb kínálat volt a boltokban, ráadásul hitelt sem volt ilyen könnyű felvenni, az embernek spórolnia kellett.</p>

                <p>Részben pedig talán az <x-a href="https://kiszamolo.hu/az-eletszinvonalad-inflacioja/" target="_blank">életszínvonal inflációja</x-a> miatt, ami azt jelenti, hogy minél több pénzünk van, annál többet költünk.</p>

                <p>Persze igazad van, vannak dolgok amik régen nem voltak, és biztos ezekre megy el a pénz: egy vagy több tv, számítógép, mobil, autó minden házban. De nem az fogja felemészteni a fizetésed hónapról hónapra, hogy ezeket egyszer megveszed, hanem a havi költségek: tv, net, mobil, netflix, spotify előfizetés, benzin, karbantartás, műszaki vizsga.</p>

                <h2>Mi a megoldás?</h2>

                <p>A pénzügyi tudatosság: legyél tisztában a pénzügyi helyzeteddel, és hozz tudatos döntéseket.</p>

                <ul>
                    <li>Ne vegyél fel hitelt! Ha valamire nincs pénzed, spórolj</li>
                    <li>Ne élj hónapról hónapra! Legyen 6 havi vésztartalékod, hogy ha elveszíted az állásod, ne kelljen hitelt felvenned</li>
                    <li>Ne szórd el a pénzed! Oszd be előre! Az a pénz, aminek nincs előre meghatározott célja, garantáltan ki fog folyni a kezed közül</li>
                </ul>
            </div>
            @push('footer-scripts')
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            @endpush
            @push('footer-scripts')
                <script type="text/javascript">
                    google.charts.load('current', {'packages': ['line'], 'language': 'hu'});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = new google.visualization.DataTable();
                        data.addColumn('date', 'Évek');
                        @foreach($header as $column)
                            data.addColumn('number', '{{ $column }}');
                        @endforeach
                        data.addRows([
                        @foreach($data as $row)
                            [
                                new Date({{ array_shift($row) }}, 0),
                                @foreach($row as $column)
                                    {{ empty($column) ? 0 : $column }} @if(!$loop->last) , @endif
                                @endforeach
                            ] @if(!$loop->last) , @endif
                        @endforeach
                        ]);

                        let options = {
                            series: {
                                // Gives each series an axis name that matches the Y-axis below.
                                0: {
                                    axis: 'Left',
                                    color: '#34b981',
                                },
                                1: {
                                    axis: 'Right',
                                    color: '#dc2626',
                                }
                            },
                            axes: {
                                // Adds labels to each axis; they don't have to match the axis names.
                                y: {
                                    Left: {label: 'Ft' },
                                    Right: {label: 'Ft'}
                                }
                            },
                            hAxis: {
                                format: 'yyyy'
                            },
                            vAxis: {
                                format: 'short'
                            },
                            legend: { position: 'none' }
                        };

                        let chart = new google.charts.Line(document.getElementById('linechart-inflacio'));

                        chart.draw(data, google.charts.Line.convertOptions(options));
                    }
                </script>
            @endpush

        </div>
    </div>
    <x-welcome.demo-section />

    <x-footer />
</x-guest-layout>
