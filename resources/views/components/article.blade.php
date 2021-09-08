<article class="mb-4 overflow-hidden sm:rounded-lg">
    <x-seo title="{{ $title }}"
           :description="strip_tags($description)" />

    @isset($beforeContent)
        {{ $beforeContent }}
    @endisset

    @isset($headerImage)
        <img src="{{ $headerImage }}" alt="{{ $title }}" class="my-4 hidden md:block max-w-prose mx-auto prose prose-lg" loading="lazy" />
    @endisset

    <h1 class="mt-8 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        {{ $title }}
    </h1>

    <div class="prose prose-indigo prose-lg max-w-prose mx-auto">
        <div class="font-bold">{!! $description !!}</div>

        {!! $slot !!}
    </div>
</article>
