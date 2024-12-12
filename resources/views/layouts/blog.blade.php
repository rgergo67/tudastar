<x-guest-layout>
    <div class="min-h-screen">
        <x-blog-navigation />

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-emerald-600">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="pr-16 sm:text-center sm:px-16">
                    <p class="font-medium text-white">
                        <span>
                          Nem nő a vagyonod? Nehezen spórolsz?
                        </span>
                        <span class="hidden md:inline">
                          Rendbe tennéd a családi kasszát?
                        </span>
                        <span class="hidden lg:inline">
                          Nincs egy forint vésztartalékod sem?
                        </span>
                        <span class="block sm:ml-2 sm:inline-block">
                          <a href="/" class="text-white font-bold underline"> Segítünk <span aria-hidden="true">&rarr;</span></a>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <main>
            <section class="text-gray-500 mx-auto mb-12">
                {{ $slot }}
            </section>
        </main>

        <x-welcome.demo-section />

        <x-footer />
    </div>
</x-guest-layout>
