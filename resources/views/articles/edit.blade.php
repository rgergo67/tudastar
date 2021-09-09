<x-admin-layout>
    <h2>Edit: <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a></h2>
    <form action="{{ route('articles.update', $article) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('articles._form')
    </form>
</x-admin-layout>
