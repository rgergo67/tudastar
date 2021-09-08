<x-guest-layout>
    <div class="min-h-screen bg-gray-100">
        <x-public-navigation />

        <main>
            <div class="max-w-7xl mx-auto flex flex-wrap py-24">
                <section class="w-full lg:w-2/3 flex flex-col items-center px-3">
                    {{ $slot }}
                </section>
                <aside class="w-full lg:w-1/3 flex flex-col items-center px-3">
                    valami
                </aside>
            </div>
        </main>

        <x-welcome.demo-section />
        <x-footer />
    </div>
</x-guest-layout>
