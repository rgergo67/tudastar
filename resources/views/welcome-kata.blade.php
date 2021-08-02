<x-public-layout>
    <x-seo title="Oszd be a pénzed egyszerűen | Beosztom.hu"
           description="Egybefolyik a KATA vállalkozásod pénze a sajátoddal? Segítünk elkülöníteni a kettőt, és beosztani a pénzed! Használd fél évig, és döntsd el utána, hogy megéri-e az árát." />

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div x-data="{ open: false }" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:w-3/5 xl:w-1/2 lg:pb-28 xl:pb-32">

                <x-welcome-navigation />

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Oszd be a pénzed</span>
                            <span class="block text-indigo-600 xl:inline">egyszerűen!</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Egybefolyik a KATA vállalkozásod pénze a sajátoddal? Segítünk a kettő elkülönítésében, és a pénzed beosztásában! Használd fél évig, és döntsd el utána, hogy megéri-e az árát.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Próbáld ki
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('knowledge.show', 'az-oldalrol-bovebben') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Olvass róla bővebben
                                </a>
                            </div>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/lightning-bolt -->
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation" class="h-6 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M176 432c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80zM25.26 25.199l13.6 272C39.499 309.972 50.041 320 62.83 320h66.34c12.789 0 23.331-10.028 23.97-22.801l13.6-272C167.425 11.49 156.496 0 142.77 0H49.23C35.504 0 24.575 11.49 25.26 25.199z"/></svg>
                                </div>
                            </dt>
                            <dd class="mt-12 ml-16 text-base text-gray-500">
                                Nincs külön vállalkozói és személyes verziónk, mindenki ugyanazt használja. Azért nem a sima főoldalon vagy most, mert itt mint vállalkozót szerettünk volna megszólítani.
                            </dd>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/5 xl:w-1/2 flex items-center">
            <picture>
                <source type="image/webp" media="(min-width:640px)" srcset="/images/beosztom_hu_hero_transparent_1200_713.webp" width="1200" height="713">
                <img class="w-full" src="/images/beosztom_hu_hero_transparent_1200_713.png" loading="lazy" width="1200" height="713"  alt="Költségvetés készítő és pénz beosztó alkalmazás: Beosztom.hu">
            </picture>
        </div>
    </div>
    <section class="bg-gray-100 max-w-7xl mx-auto">
        <div class="flex flex-col h-full py-16 md:flex-row-reverse">
            <div class="flex-1 mb-6 mx-6">
                <div class="text-center md:text-left">
                    <h2 id="problema" class="text-base text-indigo-600 tracking-wide uppercase">A probléma</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Mennyi a KATA vállalkozásom pénze...
                    </p>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        ... és mennyi a sajátom?
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                        <p>KATA vállalkozóként talán te is úgy döntöttél mint mi, és saját személyes bankszámládat használod a vállalkozásodhoz.</p>

                        <p>Ez kényelmes, ugyanakkor sokkal nehezebben elkülöníteni a vállalkozás pénzét a saját vagyontól.</p>

                        <ul class="list-disc list-inside">
                            <li>Mennyit költhetek marketingre?</li>
                            <li>Van tartalékom amiből fejleszthetem a vállalkozást?</li>
                            <li>Kitermelem egyáltalán az éves fix költségeket?</li>
                        </ul>

                        <p>Ha főállás mellett KATA-zol, és nem kezeled külön a vállalkozásod költségvetését, könnyen megeshet, hogy a vállalkozásod költségeit a főállásodból származó jövedelmből fogod fedezni.</p>
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
                        Oszd be a pénzed!
                    </p>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        Kezeld külön a KATA költségvetést!
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                        <p>A program létrehozásakor az alapvető problémánk az volt, hogy nem tudtuk mire mennyit költhetünk. Ezt csak tetézte, hogy a KATA vállalkozás pénze egy számlán volt a családi vagyonnal, így szükségét láttuk ezt virtuálisan leválasztani.</p>

                        <p>A Beosztom.hu erre tökéletesen alkalmas lett. Nem akarunk ámítani, ne gondolj világmegváltó dologra. Olyan ez, mint a borítékos módszer, csak mi perselyeknek hívjuk, amiket fel lehet cimkézni, kategorizálni, majd a pénzt szétosztani köztük. Így minden forintnak előre meglesz a feladata, és biztosan nem keveredik a magán vagyon és a vállalkozás pénze.</p>

                        <p>Nem a lehúzás a célunk: félévente megkérdezzük, hogy hasznos volt-e, és csak akkor kell fizetned, ha igen. Nincs az oldalon reklám, az összegeket és perselyek nevét titkosítva tároljuk az adatbázisban, illetve az oldal működésének költségvetését <x-a href="{{ route('open_business.index') }}">nyitottan kezeljük</x-a>.</p>
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
                        <p><b>Neked ajánljuk,</b></p>
                        <ul>
                            <li>- ha KATA vállalkozó vagy</li>
                            <li>- ha nehezen tudod elkülöníteni a vállalkozás pénzét a sajátodtól</li>
                            <li>- ha valami egyszerű, de hatékony kell</li>
                            <li>- <x-a href="{{ route('knowledge.show', 'adatbiztonsag') }}">ha számít az adataid biztonsága</x-a></li>
                        </ul>
                        <p><b>Nem ajánljuk,</b></p>
                        <ul>
                            <li>- ha rendszeresen többféle valutát használsz</li>
                            <li>- ha automatikus banki szinkronizációra van szükséged</li>
                            <li>- ha évekre visszamenő statisztikákat szeretnél nézni</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-1">
                <img src="/images/kinek.svg" loading="lazy" class="w-full" width="240" height="150" alt="Beosztom.hu célközönsége széles körű" />
            </div>
        </div>
    </section>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 id="ar" class="text-base text-indigo-600 tracking-wide uppercase">Ár: 3.000 Ft / félév</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Akkor fizess, ha hasznos volt
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Dönts fél év használat után, hogy megéri-e fizetni érte
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Hogyan működik?</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Az oldal használatáért nem előre, hanem félévente utólag tudsz fizetni. Csak akkor kell fizetned, ha meg vagy elégedve.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/scale -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mi van ha nem fizetek?</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Semmi dolgod nincs, a rendszer 1.5 hónap után automatikusan törli minden adatodat (addig azért őrzi meg, hátha baleset, nyaralás, vagy egyéb elfoglaltság miatt nem tudsz 2 héten belül fizetni)
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Miért jó ez nektek?</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Ez egy spórolást segítő alkalmazás, szerintünk alap, hogy ha nem azt nyújtja amire számítottál, akkor ne hozzunk még nehezebb anyagi helyzetbe. Csak korrektek szeretnénk lenni.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/annotation -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Félévente 3.000 Ft nem sok?</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Ezt ráérsz utólag eldönteni. Ha nem tudunk segíteni neked megspórolni havi 500 Ft-ot, akkor fizetned sem kell a szolgáltatásért.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <section class="bg-indigo-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="lg:text-center">
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Tégy egy próbát, segítünk!
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-200 lg:mx-auto">
                    Az biztos, hogy sokat tanulhatsz belőle
                </p>
            </div>
            <div class="mt-10">
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                    <div class="rounded-md shadow">
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-bold rounded-md text-indigo-600 bg-gray-100 hover:bg-white hover:shadow-lg md:py-4 md:text-lg md:px-10">
                            Vágjunk bele!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
