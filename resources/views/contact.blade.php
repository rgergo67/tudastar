<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100 mb-16">
        <div class="max-w-7xl mx-auto">
            <div class="w-full sm:max-w-7xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose lg:prose-lg">
                <h2>Kapcsolat</h2>

                <p>A használattal kapcsolatos legtöbb kérdést a <x-a href="{{ route('knowledge.index') }}">Tudástárban</x-a> megválaszoljuk, így először ott érdemes körbenézni. Ha nem találod a választ a kérdésedre, vagy valamilyen hibát tapasztaltál, a {{ config('mail.from.address') }} címen tudod felvenni velünk a kapcsolatot.</p>
            </div>
        </div>
    </div>

    <x-footer />
</x-guest-layout>
