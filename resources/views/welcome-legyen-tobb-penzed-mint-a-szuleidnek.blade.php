<x-public-layout>
    <x-seo title="Legyen több pénzed, mint a szüleidnek!"
           description="Egy diák kiadásai: buszjegy, koli díj, rezsi, kaja, tankönyvek, diákhitel. Ezek egy részére szüleid adnak pénzt, a maradékot diákmunkából kell majd kipótolnod. Mi ennek a pénznek a beosztásában segítünk." />

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div x-data="{ open: false }" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:w-3/5 xl:w-1/2 lg:pb-28 xl:pb-32">

                <x-welcome-navigation />

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Legyen több pénzed,</span>
                            <span class="block text-indigo-600 xl:inline">mint a szüleidnek!</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Nem baj, ha nem keresel fiatalon százezreket. Használd ki, hogy van időd, és kezdj el spórolni apránként, minél hamarabb!
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow w-full">
                                <a href="/#proba" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-xl md:px-10">
                                    Próbáld ki regisztráció nélkül!
                                </a>
                            </div>
                        </div>
                        <div class="text-center w-100 mt-6">
                            <a href="{{ route('knowledge.show', 'tanuld-meg-beosztani-a-penzed-fiatalon') }}" class="text-indigo-600">Vagy olvass róla bővebben</a>
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
                        Alig van bevételem...
                    </p>
                    <p class="mt-2 text-xl text-gray-800 italic">
                        ... hogy lesz így több pénzem?
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                        <p>Ha szüleid támogatnak anyagilag, szerencsés vagy. De látod, hogy ez részükről milyen hatalmas áldozatokkal és lemondásokkal jár. Megpróbálsz minél hamarabb anyagilag független lenni, hogy levedd vállukról a terhet.</p>
                        <p>Sajnos diákmunkával nem lehet vagyonokat keresni, és tapasztalat vagy referencia hiányában a komolyabb pozíciókról is kikosaraznak.</p>
                        <p>Van egy csomó kiadás: tandíj, koli, kaja, utazás... Hogy lehet ezt mind kigazdálkodni úgy, hogy szórakozásra is jusson és esetleg még félre is tudj tenni nehezebb időkre?</p>
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
                        Az utolsó forintig. Előre.
                    </p>
                    <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                        <p>Ha a bevételeidet nem tudod növelni, csökkentsd a kiadásaidat! Észre sem veszed, és a pénzed apránként kifolyik a kezed közül: itt egy kávé, ott egy mozi, és hipp-hopp el is költöttél 10.000 Ft-ot.</p>

                        <p>Ha előre eldöntöd, hogy mennyit szánsz szórakozásra, körmösre, kondira, akkor jutni fog arra is, hogy félretegyél egy kicsit.</p>

                        <p>A pénz beosztását könnyű túlbonyolítani, kezd hát 4 persellyel:</p>

                        <ul class="list-inside list-decimal">
                            <li>Add össze a havi <strong>fix kiadásokat</strong> amiket muszáj kifizetni</li>
                            <li>Saccold meg, hogy havonta mennyit költesz <strong>kajára</strong></li>
                            <li>A maradék felét szánd <strong>szórakozásra</strong></li>
                            <li>A másik felét tedd félre <strong>vésztartaléknak</strong></li>
                        </ul>

                        <p>A kihívás: gyűjts össze annyi pénzt, amennyit 6 hónap alatt kapsz!</p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow w-full">
                                <a href="/#proba" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-xl md:px-10">
                                    Próbáld ki regisztráció nélkül!
                                </a>
                            </div>
                        </div>
                        <div class="text-center w-100 mt-6">
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
                            <li>- ha diákként dolgozol</li>
                            <li>- ha vissza szeretnéd fizetni a diákhitelt</li>
                            <li>- ha szeretnél elkezdeni spórolni valamire</li>
                            <li>- ha meg szeretnéd tanulni beosztani a pénzed</li>
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

    <x-welcome.price-section />

    <x-welcome.demo-section />

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
                            <h3 class="text-xl text-gray-800 tracking-wide font-bold  leading-tight  mb-3">Mi a célod?</h3>
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
