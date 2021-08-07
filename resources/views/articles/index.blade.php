<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-gray-900 text-3xl font-extrabold tracking-tight mt-2 text-center">Cikkek</h1>
            <div class="flex flex-wrap pt-6 sm:pt-0">
                <x-blog-card
                        title="Hatékony pénzbeosztás"
                        :link="route('articles.show', 'hatekony-penzbeosztas')"
                        description="A hatékony pénzbeosztás alapkövei" />
                <x-blog-card
                        title="Vésztartalék, dióhéjban"
                        :link="route('articles.show', 'vesztartalek-diohejban')"
                        description="A vésztartalék létrehozása az egyik legjobb pénzügyi döntésed lehet, ezek a lépései." />
            </div>
        </div>
    </div>

    <x-footer />
</x-guest-layout>
