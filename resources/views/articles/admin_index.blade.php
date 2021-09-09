<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-gray-900 text-3xl font-extrabold tracking-tight mt-2 text-center">Cikkek</h1>

            @admin
                <a href="{{ route('articles.create') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Új cikk</a>
            @endadmin

            <div class="flex flex-wrap pt-6 sm:pt-0">
                @foreach($articles as $article)
                    <x-blog-card
                        title="{{ $article->title }}"
                        :link="route('articles.show', $article->slug)"
                        description="{{ $article->description }}" />
                @endforeach
            </div>
        </div>
    </div>

    <x-footer />
</x-guest-layout>
