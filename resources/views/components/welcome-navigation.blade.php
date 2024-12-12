<div>
    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                        <span class="sr-only">Persely</span>
                        <x-application-logo class="h-8 w-auto sm:h-10" />
                    </a>
                    <a href="{{ route('login') }}" rel="nofollow" class="font-medium text-emerald-600 hover:text-emerald-500 md:hidden">Belépés</a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden');" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                <a href="#problema" class="font-medium text-gray-500 hover:text-gray-900">Probléma</a>

                <a href="#megoldas" class="font-medium text-gray-500 hover:text-gray-900">Megoldás</a>

                <a href="#kinek" class="font-medium text-gray-500 hover:text-gray-900">Kinek?</a>

                <a href="#ar" class="font-medium text-gray-500 hover:text-gray-900">Ár</a>

                <a href="{{ route('login') }}" rel="nofollow" class="font-medium text-emerald-600 hover:text-emerald-500">Belépés</a>
            </div>
        </nav>
    </div>

    <div id="mobile-menu" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden md:hidden">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <x-application-logo class="h-8 w-auto" />
                </div>
                <div class="-mr-2">
                    <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden');" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500">
                        <span class="sr-only">Close main menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#problema" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Probléma</a>

                <a href="#megoldas" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Megoldás</a>

                <a href="#kinek" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Kinek?</a>

                <a href="#ar" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Ár</a>
            </div>
            <a href="{{ route('login') }}" rel="nofollow" class="block w-full px-5 py-3 text-center font-medium text-emerald-600 bg-gray-50 hover:bg-gray-100">
                Belépés
            </a>
        </div>
    </div>
</div>
