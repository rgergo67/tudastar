@props(['withCaption' => true, 'name', 'title', 'width', 'height'])

<figure {{ $attributes->merge(['class' => ""]) }}>
    <picture>
        <source type="image/webp" srcset="/images/{{ $name }}.webp">
        <img src="/images/{{ $name }}.png" alt="{{ $title }}" class="mx-auto" loading="lazy" {{ isset($width) ? 'width='.$width : '' }} {{ isset($height) ? 'height='.$height : '' }} />
    </picture>
    @if ($withCaption)
        <figcaption class="text-center">{{ $title }}</figcaption>
    @endif
</figure>
