<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-gray-900 text-3xl font-extrabold tracking-tight mt-2 text-center">Cikkek</h1>

            <div class="flex flex-wrap pt-6 sm:pt-0 mb-4">
                @foreach($articles as $article)
                    <x-blog-card
                        title="{{ $article->title }}"
                        :link="route('articles.show', $article->slug)"
                        description="{{ $article->description }}"
                        :headerImage="$article->header_image"
                        :createdAt="$article->created_at"
                        :type="$article->type"
                        :readingTime="$article->readingTime"/>
                @endforeach
            </div>

            <div class="max-w-lg mx-auto pb-8">
                {{ $articles->links() }}
            </div>
        </div>
    </div>

    <x-footer />
</x-guest-layout>
