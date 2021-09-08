<x-guest-layout>
    <div class="min-h-screen">
        <x-blog-navigation />

        <main>
            <section class="text-gray-500 mx-auto mb-12">
                {{ $slot }}
            </section>
        </main>

        <x-welcome.demo-section />

        <x-footer />
    </div>
</x-guest-layout>
