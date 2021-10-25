<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white pt-16 pb-32 overflow-hidden">
    <div class="relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                <div>
                    <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
              <!-- Heroicon name: outline/inbox -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                            Hova tűnik a pénzem?
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            Biztosan felmerült már benned is ez a kérdés. A válasz megtalálásában hatalmas segítséget fognak nyújtani a statisztikáink. Megnézheted, hogy mely hónapokban költöttél többet, mint kellett volna, sőt, még napokra lebontva is megmutatjuk ezt egy naptárban.
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('demo.create') }}" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                                Kipróbálom!
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-200 pt-6">
                    <blockquote>
                        <div>
                            <p class="text-base text-gray-500">
                                &ldquo;Az elmúlt 2 hónapban többet költöttem, mint kerestem, de fogalmam sem volt mire. A statisztikából ránézésre kiderült, hogy rengeteg éves kiadás határideje jött el, amire már rég félretettem a pénzt: gépjármű adó, iparűzési adó, születésnap, kötelező biztosítás. Megnyugtató tudni, hogy olyanra költök, ami már előre be volt tervezve.&rdquo;
                            </p>
                        </div>
                        <footer class="mt-3">
                            <div class="text-base font-medium text-gray-700">
                                Ratting Gergely
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="{{ asset('images/welcome_statisztika.jpg') }}" alt="Inbox user interface">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-24">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                <div>
                    <div>
                        <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
                            <!-- Heroicon name: outline/sparkles -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                            Értsd meg a kiadásaid, értsd meg magad
                        </h2>
                        <div class="mt-4 text-lg text-gray-500">
                            <p>Arra költesz ami valóban fontos és sokat jelent számodra?</p>
                            <ul class="list-disc list-inside mt-4">
                                <li class="list-item">Biztosan 5x annyit kell költeni a vásárlásra, mint a gyerekre?</li>
                                <li>A kiadásaid 1%-át jótékony célra fordítani sok, vagy kevés?</li>
                                <li>Ha annyit költesz közlekedésre, mint a vállalkozásodra, vajon túl sokat utazol, vagy keveset fektetsz be?</li>
                            </ul>
                            <p class="mt-4">A jó válaszokhoz jó kérdések kellenek!</p>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('demo.create') }}" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                                Próbáld ki, és tedd fel a megfelelő kérdést!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                    <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="{{ asset('images/welcome_statisztika2.jpg') }}" alt="Customer profile user interface">
                </div>
            </div>
        </div>
    </div>
</div>
