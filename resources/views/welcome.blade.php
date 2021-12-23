<x-public-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:w-3/5 xl:w-1/2 lg:pb-28 xl:pb-32">
                <x-welcome-navigation />

                <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Oszd be a pénzed</span>
                            <span class="block text-indigo-600 xl:inline">egyszerűen!</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Csökkentsd az impulzus vásárlásaid, költekezz tudatosan, spórolj hatékonyan!
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow w-full">
                                <a href="{{ route('demo.create') }}" rel="nofollow" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-xl md:px-10">
                                    Próbáld ki regisztráció nélkül!
                                </a>
                            </div>
                        </div>
                        <div class="text-center w-100 mt-6">
                            <a href="https://youtu.be/tuopG4lSeE4" class="text-indigo-600">2 perces bemutató videó</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/5 xl:w-1/2 flex items-center">
            <picture class="relative group">
                <source type="image/webp" media="(min-width:640px)" srcset="/images/beosztom_hu_hero_transparent_1200_713.webp" width="1200" height="713">
                <img class="w-full" src="/images/beosztom_hu_hero_transparent_640_1340.png" loading="lazy" width="1200" height="713"  alt="Költségvetés készítő és pénz beosztó alkalmazás: Beosztom.hu">
                <a href="https://youtu.be/tuopG4lSeE4" target="_blank" class="absolute inset-0 w-full h-full flex items-center justify-center" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" viewBox="0 0 68 48">
                        <path class="group-hover:opacity-100 opacity-80" fill="red" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"/>
                        <path d="M 45,24 27,14 27,34" fill="white"/>
                    </svg>
                </a>
            </picture>
        </div>
    </div>
    <section class="bg-gray-100 max-w-7xl mx-auto">
        <div class="flex flex-col h-full py-16 md:flex-row-reverse">
            <div class="flex-1 mb-6 mx-6">
                <div class="text-center md:text-left">
                    <h2 id="problema" class="text-base text-indigo-600 tracking-wide uppercase">A probléma</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Pénzügyi bizonytalanság
                    </p>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        Magadra ismersz bármelyikben?
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                        <p><strong>Nincs egy forint vésztartalékod sem.</strong> Mi van, ha fél év táppénzre kényszerülsz, elveszíted az állásodat vagy valami váratlan, nagy kiadásod keletkezik?</p>

                        <p>Rengeteget költesz az autóra, dohányzásra, ruhákra vagy játékokra. Hogyan lehetne a <strong>függőségedre költött</strong> összegnek legalább egy részét a családodra fordítani?</p>

                        <p><strong>Közös családi kasszán vagytok</strong>, és a párod elkölti azt a pénzt, amit magadra vagy a gyermekedre szántál. Tudod, hogy nem rosszindulatból csinálja, nehéz fejben tartani, hogy mire mennyi pénzt osztott be a másik.</p>

                        <p>A szüleid keményen dolgoznak, hogy te tanulhass. Fizetik a tandíjat, a kolit, a kaját, miközben bulizol, jól érzed magad, és bejársz órára. Hallottál már a <strong>pénzügyi függetlenség</strong>ről, de ötleted sincs hogyan vágj bele, hogy levedd a vállukról a terhet, és később te segíthess nekik.</p>

                        <p>Egyszer a nyaralás viszi el a marketing pénzt, máskor úgy tűnik, hogy a vállalkzoásodat a főállásod fizetéséből finanszírozod. Hogyan különíthetnéd el a <strong>KATA vállalkozásod</strong> pénzét a sajátodtól, ha ugyanazon bankszámlán vannak?</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-1">
                <img src="/images/megengedhetem_magamnak.svg" width="240" height="150" loading="lazy" class="w-full" alt="Vajon megengedhetem magamnak?" />
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="flex flex-col max-w-7xl mx-auto h-full py-16 md:flex-row">
            <div class="flex-1 mb-6 mx-6">
                <div class="text-center md:text-left">
                    <p id="megoldas" class="text-base text-indigo-600 tracking-wide uppercase">A megoldás</p>
                    <h2 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Oszd be a pénzed előre!
                    </h2>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        Adj feladatot minden forintnak!
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left">
                        <h3 class="font-bold">Legyen tartalékod, ne bízd a véletlenre!</h3>
                        <p class="mt-0 mb-4">Havi néhány ezer forintból is lehet vésztartalékot képezni, csak kitartás kell és egy kis segítség!</p>

                        <h3 class="font-bold">Ne a függőséged szabjon gátat a boldogságnak!</h3>
                        <p class="mt-0 mb-4">Segítünk nyomon követni a függőséged, és apránként lefaragni belőle, hogy olyan dolgokra fordíthasd az összeget, ami tényleg számít.</p>

                        <h3 class="font-bold">Tedd rendbe a családi kasszát!</h3>
                        <p class="mt-0 mb-4">Tervezzétek meg a családi költségvetést együtt, mert sokkal gördülékenyebben megy a szekér, ha egy irányba húzzátok!</p>

                        <h3 class="font-bold">Érd el a pénzügyi függetlenséget fiatalon!</h3>
                        <p class="mt-0 mb-4">Nem baj, ha nem keresel diákként százezreket. Használd ki, hogy fiatal vagy, és kezdj el spórolni apránként, minél hamarabb!</p>

                        <h3 class="font-bold">Válaszd szét a vállalkozásod pénzét a sajátodtól!</h3>
                        <p class="mt-0 mb-4">Segítünk előre beosztani a vállalkozásod pénzét, hogy megelőzzük a meglepetéseket. </p>

                        <a href="{{ route('demo.create') }}" rel="nofollow" class="w-full flex items-center justify-center px-8 py-3 mt-10 border border-transparent  rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:px-10">
                            Próbáld ki regisztráció nélkül!
                        </a>
                        <div class="text-center w-100 mt-6">
                            <a href="{{ route('register') }}" class="text-indigo-600 text-base">Vagy regisztrálj egyből</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-1">
                <img src="/images/megoldas.svg" class="w-full h-auto" width="253" height="150" loading="lazy" alt="A megoldás ha beosztom a pénzt" />
            </div>
        </div>
    </section>

    <section class="bg-gray-100 max-w-7xl mx-auto">
        <div class="flex flex-col h-full py-16 md:flex-row-reverse">
            <div class="flex-1 mb-6 mx-6">
                <div class="text-center md:text-left">
                    <h2 id="kinek" class="text-base text-indigo-600 tracking-wide uppercase">Kinek?</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Neked hasznos lehet?
                    </p>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        Nem akarjuk feleslegesen rabolni az idődet
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                        <p><b>Neked ajánljuk,</b></p>
                        <ul>
                            <li>- ha <x-a href="{{ route('knowledge.show', 'mi-a-celod') }}#honaprol-honapra">hónapról hónapra élsz</x-a></li>
                            <li>- ha <x-a href="{{ route('knowledge.show', 'mi-a-celod') }}#nem-tudom-mennyit-kolthetek">fogalmad sincs, hogy mennyit költhetsz</x-a></li>
                            <li>- ha <x-a href="{{ route('knowledge.show', 'mi-a-celod') }}#nem-tudom-novelni-a-megtakaritasaimat">rendelkezel tartalékkal, de nem sikerül növelned</x-a></li>
                            <li>- ha <x-a href="{{ route('knowledge.show', 'mi-a-celod') }}#van-egy-fuggosegem">van egy függőséged</x-a></li>
                            <li>- ha <x-a href="{{ route('knowledge.show', 'mi-a-celod') }}#a-vallalkozasom-penze-osszefolyik-a-sajatommal">a vállalkozásod pénze összefolyik a sajátoddal</x-a></li>
                            <li>- ha <x-a href="{{ route('knowledge.show', 'mi-a-celod') }}#rendbe-akarom-tenni-a-csaladi-kasszat">rendbe akarod tenni a családi kasszát</x-a></li>
                            <li>- ha <x-a href="{{ route('knowledge.show', 'adatbiztonsag') }}">számít az adataid biztonsága</x-a></li>
                        </ul>
                        <p><b>Nem ajánljuk,</b></p>
                        <ul>
                            <li>- ha automatikus banki szinkronizációra van szükséged</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-1">
                <img src="/images/kinek.svg" class="w-full" width="240" height="150" loading="lazy" alt="Beosztom.hu célközönsége széles körű" />
            </div>
        </div>
    </section>

    <x-welcome.features />

    <x-welcome.price-section />

    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 id="ar" class="text-base text-indigo-600 tracking-wide uppercase">Tudástár</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Ha van időd, ezeket érdemes elolvasni
                </p>
                <p class="mt-4 text-xl text-gray-800 italic max-w-2xl lg:mx-auto">
                    Tanulj tőlünk, és azoktól, akiktől mi tanulunk
                </p>
            </div>

            <div class="flex flex-wrap mt-10">
                <div class="xl:w-1/3 lg:w-1/3 w-full p-4">
                    <a href="{{ route('knowledge.show', 'az-alapok') }}">
                        <div class="bg-white rounded-md p-8 shadow-md h-full">
                            <h3 class="text-xl text-gray-800 tracking-wide font-bold leading-tight  mb-3">Az alapok</h3>
                            <p class="text-lg text-gray-800">Néhány dolog, amit érdemes észben tartani költségvetés készítés közben.</p>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/3 lg:w-1/3 w-full p-4">
                    <a href="{{ route('knowledge.show', 'mi-a-celod') }}">
                        <div class="bg-white rounded-md p-8 shadow-md h-full">
                            <h3 class="text-xl text-gray-800 tracking-wide font-bold leading-tight  mb-3">Mi a célod?</h3>
                            <p class="text-lg text-gray-800">Ha te is küzdesz az itt felsorolt problémákkal, akkor valószínűleg segítségedre lehet az program.</p>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/3 lg:w-1/3 w-full p-4">
                    <a href="{{ route('knowledge.show', 'akiktol-mi-tanultunk') }}">
                        <div class="bg-white rounded-md p-8 shadow-md h-full">
                            <h3 class="text-xl text-gray-800 tracking-wide font-bold leading-tight  mb-3">Akiktől mi tanultunk</h3>
                            <p class="text-lg text-gray-800">Sok minőségi, értékes tartalom, amiket mindenképpen érdemes elolvasni vagy megnézni.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="text-center mt-10">
                <div class="text-gray-800 text-lg">Ha gondolod, <x-a href="{{ route('knowledge.index') }}" class="text-indigo-600 group">nézd meg a teljes tudástárat <svg width="1em" height="1em" viewBox="0 0 18 18" class="inline-block ml-1 -mt-0.5 transition-transform transform group-hover:translate-x-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></x-a></div>
            </div>
        </div>
    </section>

    <x-footer />

</x-public-layout>
