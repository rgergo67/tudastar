<footer class="bg-indigo-600 pt-12 pb-8 lg:px-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap text-center xl:text-left">
            <div class="xl:w-1/4 lg:w-1/2 w-full md:block hidden xl:mb-0 mb-4 xl:mx-auto">
                <x-application-logo class="w-20 h-20 inline-block" />
            </div>

            <div class="xl:w-1/4 lg:w-1/2 w-full xl:mb-0 mb-4">
                <h4 class="text-xl text-gray-200 font-modlr tracking-wide font-bold leading-tight mb-3">Információk</h4>
                <ul class="mb-3">
                    <li><a class="text-white hover:text-primary py-3 block" href="{{ route('aszf') }}">ÁSZF</a></li>
                    <li><a class="text-white hover:text-primary py-3 block" href="{{ route('contact') }}">Kapcsolat</a></li>
                </ul>
                <h4 class="text-xl text-gray-200 font-modlr tracking-wide font-bold leading-tight mb-3">Tematikus</h4>
                <ul>
                    <li><a class="text-white hover:text-primary py-3 block" href="{{ route('welcome-legyen-tobb-penzed-mint-a-szuleidnek') }}">Fiataloknak</a></li>
                    <li><a class="text-white hover:text-primary py-3 block" href="{{ route('welcome-family') }}">Családosoknak</a></li>
                    <li><a class="text-white hover:text-primary py-3 block" href="{{ route('welcome-kata') }}">Vállalkozóknak</a></li>
                </ul>
            </div>

            <div class="xl:w-1/4 lg:w-1/2 w-full xl:mb-0 mb-4">
                <h4 class="text-xl text-gray-200 font-modlr tracking-wide font-bold leading-tight mb-3">Navigáció</h4>
                <ul>
                    <li><a href="/#problema" class="text-white hover:text-primary py-3 block">Probléma</a></li>
                    <li><a href="/#megoldas" class="text-white hover:text-primary py-3 block">Megoldás</a></li>
                    <li><a href="/#kinek" class="text-white hover:text-primary py-3 block">Kinek?</a></li>
                    <li><a href="/#ar" class="text-white hover:text-primary py-3 block">Ár</a></li>
                    <li><a href="{{ route('knowledge.index') }}" class="text-white hover:text-primary py-3 block">Tudástár</a></li>
                    <li><a href="{{ route('cikkek.index') }}" class="text-white hover:text-primary py-3 block">Cikkek</a></li>
                    <li><a href="{{ route('register') }}" class="text-white hover:text-primary py-3 block" rel="nofollow">Regisztráció</a></li>
                    <li><a href="{{ route('login') }}" class="text-white hover:text-primary py-3 block" rel="nofollow">Belépés</a></li>
                </ul>
            </div>

            <div class="xl:w-1/4 lg:w-1/2 w-full  xl:mb-0 mb-4">
                <h4 class="text-xl text-gray-200 font-modlr tracking-wide font-bold leading-tight mb-3">Fizetés</h4>
                <img class="block mx-auto w-max w-100" alt="Barion fizetés" src="/images/barion.png" loading="lazy" width="400" height="42">
                <a class="text-white hover:text-primary py-3 block" href="{{ route('knowledge.show', 'barion') }}">Mi az a Barion?</a>
                <h4 class="text-xl text-gray-200 font-modlr tracking-wide font-bold leading-tight my-3">Érdekesség</h4>
                <ul>
                    <li><a href="{{ route('inflation.the_worth_of_money') }}" class="text-white hover:text-primary py-3 block">Mennyit ér a pénz</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center pt-8 pb-2  xl:px-0 px-5">
        <p class="text-gray-50">Copyright © <a href="https://67developer.hu" class="text-white hover:text-primary font-bold">Ratting Gergely</a>. {{ date('Y') }} • Minden jog fenntartva</p>
    </div>
</footer>
