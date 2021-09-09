<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-gray-900 text-3xl font-extrabold tracking-tight mt-2 text-center">Cikkek</h1>

            <div class="flex flex-wrap pt-6 sm:pt-0">
                @foreach($articles as $article)
                    <x-blog-card
                        title="{{ $article->title }}"
                        :link="route('cikkek.show', $article->slug)"
                        description="{{ $article->description }}" />
                @endforeach
            </div>
        </div>
    </div>

    <x-footer />
</x-guest-layout>
