<x-blog-layout>
    <x-article headerImage="{{ $article->header_image }}">
        <x-slot name="title">{{ $article->title }}</x-slot>
        <x-slot name="description">
            {!! $article->description !!}
        </x-slot>

        @admin
        <x-slot name="beforeContent">
            <div class="prose prose-indigo prose-lg max-w-prose mx-auto mt-6">
                <form action="{{ route('articles.destroy', $article) }}" method="post" onsubmit="return confirm('Biztos?')">
                    @method('delete')
                    @csrf
                    <a href="{{ route('articles.edit', $article) }}">Szerkesztés</a>
                    <button type="submit">Törlés</button>
                </form>
            </div>
        </x-slot>
        @endadmin

        {!! $article->body !!}

    </x-article>
</x-blog-layout>
