<x-public-layout>
    <x-seo title="Oszd be a pénzed egyszerűen"
           description="Egybefolyik a KATA vállalkozásod pénze a sajátoddal? Segítünk elkülöníteni a kettőt, és beosztani a pénzed!" />

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div x-data="{ open: false }" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:w-3/5 xl:w-1/2 lg:pb-28 xl:pb-32">

                <x-welcome-navigation />

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Kezeld külön a</span>
                            <span class="block text-indigo-600 xl:inline">vállalkozásod pénzét!</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Egybefolyik a KATA vállalkozásod pénze a sajátoddal? Segítünk a kettő elkülönítésében, és a pénzed beosztásában!
                        </p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow w-full">
                                <a href="{{ route('demo.create') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-xl md:px-10">
                                    Próbáld ki regisztráció nélkül!
                                </a>
                            </div>
                        </div>
                        <div class="text-center w-100 mt-6">
                            <a href="{{ route('register') }}" class="text-indigo-600">Vagy regisztrálj egyből</a>
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
                        <p>KATA vállalkozóként a saját, személyes bankszámládat használod a vállalkozásodhoz.</p>

                        <p>Ez kényelmes, ugyanakkor sokkal nehezebb elkülöníteni a vállalkozás pénzét a saját vagyonodtól. Egyszer a nyaralás viszi el a marketingre szánt pénzt, máskor úgy tűnik, hogy lassan a főállásod fizetéséből finanszírozod a vállalkozásodat.</p>

                        <p>Gyakran merülnek fel benned, hogy</p>

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
                    <div class="mt-4 text-xl text-gray-800 text-left">
                        <h3 class="font-bold">Válaszd szét a vállalkozásod pénzét a sajátodtól!</h3>
                        <p class="mt-0 mb-4">Teljesen külön költségvetése lesz a vállalkozásodnak, és külön neked.</p>

                        <h3 class="font-bold">Tegyél félre fejlesztésre!</h3>
                        <p class="mt-0 mb-4">Külön perselyed lehet befektetésre, amibe minden bevételből csepegtetsz egy kicsit, így lesz miből fejleszteni a vállalkozásod.</p>

                        <h3 class="font-bold">Statisztika</h3>
                        <p class="mt-0 mb-4">Tudd meg mi termeli a legtöbb hasznot, és mi viszi a pénzt, majd ennek fényében optimalizálj!</p>

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
                        <p><b>Neked ajánljuk,</b></p>
                        <ul>
                            <li>- ha KATA vállalkozó vagy</li>
                            <li>- ha nehezen tudod elkülöníteni a vállalkozás pénzét a sajátodtól</li>
                            <li>- ha valami egyszerű, de hatékony kell</li>
                            <li>- <x-a href="{{ route('knowledge.show', 'adatbiztonsag') }}">ha számít az adataid biztonsága</x-a></li>
                        </ul>
                        <p><b>Nem ajánljuk,</b></p>
                        <ul>
                            <li>- ha automatikus banki szinkronizációra van szükséged</li>
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
                <div class="text-gray-800 text-lg">Ha gondolod, <x-a href="{{ route('knowledge.index') }}" class="text-indigo-600 group">nézd meg a teljes tudástárat <svg width="1em" height="1em" viewBox="0 0 18 18" class="inline-block ml-1 -mt-0.5 transition-transform transform group-hover:translate-x-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></x-a></div>
            </div>
        </div>
    </section>

    <x-footer />

</x-public-layout>
