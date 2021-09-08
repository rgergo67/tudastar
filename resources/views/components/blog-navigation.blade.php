<nav class="bg-white border-b border-gray-100 z-40 shadow-md w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex col-span-1">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                    <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                        <a href="/#problema" class="font-medium text-gray-500 hover:text-gray-900">Probléma</a>

                        <a href="/#megoldas" class="font-medium text-gray-500 hover:text-gray-900">Megoldás</a>

                        <a href="/#kinek" class="font-medium text-gray-500 hover:text-gray-900">Kinek?</a>

                        <a href="/#ar" class="font-medium text-gray-500 hover:text-gray-900">Ár</a>
                        <a href="{{ route('knowledge.index') }}" class="font-medium text-gray-500 hover:text-gray-900">
                            Tudástár
                        </a>
                        <a href="{{ route('register') }}" class="font-medium text-gray-500 hover:text-gray-900" rel="nofollow">Regisztráció</a>
                        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500" rel="nofollow">Belépés</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('login') }}" rel="nofollow" class="flex items-center font-medium text-indigo-600 hover:text-indigo-500 md:hidden">Belépés</a>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden col-span-1 justify-end">
                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden');" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="/#problema">Probléma</x-responsive-nav-link>

            <x-responsive-nav-link href="/#megoldas">Megoldás</x-responsive-nav-link>

            <x-responsive-nav-link href="/#kinek">Kinek?</x-responsive-nav-link>

            <x-responsive-nav-link href="/#ar">Ár</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')" rel="nofollow">
                Regisztráció
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('login')" rel="nofollow">
                Belépés
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
