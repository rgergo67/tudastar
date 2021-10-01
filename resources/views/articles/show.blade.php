<x-blog-layout>
    <x-article headerImage="{{ $article->header_image }}" :hideHeader="true">
        <x-slot name="title">{{ $article->title }}</x-slot>
        <x-slot name="description">
            {!! $article->description !!}
        </x-slot>

        {!! $article->optimizedBody !!}

    </x-article>

    @if($recommendedArticles->count() > 0)
        <div class="hidden md:block">
            <h3 class="text-4xl text-center font-bold my-12">Ami még érdekelhet</h3>
            <div class="flex flex-wrap pt-6 sm:pt-0 mb-4 max-w-7xl mx-auto">
                @foreach($recommendedArticles as $article)
                    <x-blog-card
                            title="{{ $article->title }}"
                            :link="route('cikkek.show', $article->slug)"
                            description="{{ $article->description }}"
                            :headerImage="$article->header_image"
                            :createdAt="$article->created_at"
                            :type="$article->type"
                            :readingTime="$article->readingTime"/>
                @endforeach
            </div>
        </div>
    @endif
</x-blog-layout>
