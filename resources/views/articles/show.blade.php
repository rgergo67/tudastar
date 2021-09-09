<x-blog-layout>
    <x-article headerImage="{{ $article->header_image }}">
        <x-slot name="title">{{ $article->title }}</x-slot>
        <x-slot name="description">
            {!! $article->description !!}
        </x-slot>

        {!! $article->body !!}

    </x-article>
</x-blog-layout>
