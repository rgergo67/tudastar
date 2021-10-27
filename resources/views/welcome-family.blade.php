<x-public-layout>
    <x-seo title="Családi költségvetés egyszerűen"
           description=" Tervezd meg a családod költségvetését, jusson mindenre: étel, lakás, egészség, tanulás, kikapcsolódás." />
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div x-data="{ open: false }" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:w-3/5 xl:w-1/2 lg:pb-28 xl:pb-32">

                <x-welcome-navigation />

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Családi költségvetés</span>
                            <span class="block text-indigo-600 xl:inline">egyszerűen!</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Tervezd meg a családod költségvetését, jusson mindenre: étel, lakás, egészség, tanulás, kikapcsolódás.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow w-full">
                                <a href="{{ route('demo.create') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-xl md:px-10">
                                    Próbáld ki regisztráció nélkül!
                                </a>
                            </div>
                        </div>
                        <div class="text-center w-100 mt-6">
                            <a href="{{ route('knowledge.show', 'csaladi-koltsegvetes-egyszeruen') }}" class="text-indigo-600">Vagy olvass róla bővebben</a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/5 xl:w-1/2 flex items-center">
            <picture>
                <source type="image/webp" media="(min-width:640px)" srcset="/images/beosztom_hu_hero_transparent_1200_713.webp" width="1200" height="713">
                <img class="w-full" src="/images/beosztom_hu_hero_transparent_1200_713.png" loading="lazy" width="1200" height="713"  alt="Családi költségvetés készítő és pénz beosztó alkalmazás: Beosztom.hu">
            </picture>
        </div>
    </div>
    <section class="bg-gray-100 max-w-7xl mx-auto">
        <div class="flex flex-col h-full py-16 md:flex-row-reverse">
            <div class="flex-1 mb-6 mx-6">
                <div class="text-center md:text-left">
                    <h2 id="problema" class="text-base text-indigo-600 tracking-wide uppercase">A probléma</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Van rá elég pénzünk?
                    </p>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        Ha van, meg is engedhetjük magunknak?
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                        <p> Mindig legyen étel az asztalon, ház a fejetek fölött, a gyerekek kapják a lehető legjobb oktatást, ruhát, játékot, és kellenek közös élmények, nyaralás is.</p>

                        <p>Szülőként néha hónapról hónapra éltek akkor is, ha lenne lehetőségetek félretenni. Néha azért, mert azoknak a csillogó szemeknek olyan nehéz ellenállni amikor megtetszik nekik egy játék, néha pedig azért, mert a legjobbat akarjátok nekik biztosítani mindenből.</p>

                        <p>De mi történik, ha valamelyikőtök fél év táppénzre kényszerül, vagy elveszíti az állását? Van vésztartalékotok váratlan eseményekre? Hogy marad emellett még apára és anyára is pénz?</p>

                        <p>Próbáltatok már költségvetést csinálni, de a másik fél néha véletlenül elköltötte azt a pénzt, amit valami másra szántatok. Nem rosszindulatból, csak nehéz fejben tartani, hogy mi mire lett beosztva a kockás füzetben.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-1">
                <img src="/images/megengedhetem_magamnak.svg" loading="lazy" width="240" height="150" class="w-full" alt="Vajon megengedhetem magamnak?" />
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="flex flex-col max-w-7xl mx-auto h-full py-16 md:flex-row">
            <div class="flex-1 mb-6 mx-6">
                <div class="text-center md:text-left">
                    <h2 id="megoldas" class="text-base text-indigo-600 tracking-wide uppercase">A megoldás</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Oszd be előre!
                    </p>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        Adj feladatot minden forintnak!
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left">
                        <h3 class="font-bold">Tegyétek rendbe a családi kasszát!</h3>
                        <p class="mt-0 mb-4">Tervezzétek meg a családi költségvetést <strong>együtt</strong>, mert sokkal gördülékenyebben megy a szekér, ha egy irányba húzzátok!</p>

                        <h3 class="font-bold">Legyen vésztartalék, ne bízzátok a véletlenre!</h3>
                        <p class="mt-0 mb-4">Havi néhány ezer forintból is lehet vésztartalékot képezni, csak kitartás kell és egy kis segítség!</p>

                        <h3 class="font-bold">Mindig tudd, miből költesz!</h3>
                        <p class="mt-0 mb-4">Tervezés után már <em>csak</em> tartani kell magatokat hozzá. Szemben egy kockás füzettel, ez az alkalmazás mindig ott a telefonon, így egyszerűen meg tudod nézni, hogy ez a kiadás be lett-e tervezve, és ha nem, akkor minek a "kárára" fogsz költeni.</p>

                        <h3 class="font-bold">Egy fiók az egész családnak!</h3>
                        <p class="mt-0 mb-4">Egy fiókon belül külön költségvetése lehet anyának és apának, így akkor sem kell 2 regisztráció, ha külön kasszán vagytok.</p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow w-full">
                                <a href="{{ route('demo.create') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-xl md:px-10">
                                    Próbáld ki regisztráció nélkül!
                                </a>
                            </div>
                        </div>
                        <div class="text-center w-100 mt-6 text-base">
                            <a href="{{ route('register') }}" class="text-indigo-600">Vagy regisztrálj egyből</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-1">
                <img src="/images/megoldas.svg" loading="lazy" class="w-full h-auto" width="253" height="150" alt="A megoldás ha beosztom a pénzt" />
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
                        <p><b>Nektek ajánljuk,</b></p>
                        <ul>
                            <li>- ha hónapról hónapra éltek, vagy</li>
                            <li>- ha rendbe szeretnétek tenni a családi kasszát, vagy</li>
                            <li>- ha bizonytalanok vagytok, hogy mire mennyit költhettek, vagy</li>
                            <li>- ha szeretnétek összespórolni egy biztonsági vésztartalékot</li>
                        </ul>
                        <p><b>Nem ajánljuk,</b></p>
                        <ul>
                            <li>- ha automatikus banki szinkronizációra van szükségetek</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-1">
                <img src="/images/kinek.svg" loading="lazy" class="w-full" width="240" height="150" alt="Beosztom.hu célközönsége széles körű" />
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
                <div class="text-gray-50 text-lg">Ha gondolod, <x-a href="{{ route('knowledge.index') }}" class="text-indigo-600 group">nézd meg a teljes tudástárat <svg width="1em" height="1em" viewBox="0 0 18 18" class="inline-block ml-1 -mt-0.5 transition-transform transform group-hover:translate-x-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></x-a></div>
            </div>
        </div>
    </section>

    <x-footer />

</x-public-layout>
