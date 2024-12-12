<div class="xl:w-1/3 lg:w-1/3 w-full p-4 flex">
    <div class="bg-white flex flex-col rounded-lg shadow-lg overflow-hidden">
            @if(!empty($headerImage))
                <div class="flex-shrink-0">
                    <a href="{{ $link }}">
                        <img src="/storage/{{ $headerImage }}" alt="{{ $title }}" class="h-48 w-full object-cover" loading="lazy" />
                    </a>
                </div>
            @endif
            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                    @isset($type)
                    <p class="text-sm font-medium text-emerald-600">
                        {{ $type }}
                    </p>
                    @endisset
                    <a href="{{ $link }}" class="block mt-2">
                        <p class="text-xl font-semibold text-gray-900">
                            {{ $title }}
                        </p>
                        <p class="mt-3 text-base text-gray-500">
                            {!! strip_tags(html_entity_decode($description)) !!}
                        </p>
                    </a>
                </div>
                @isset($createdAt)
                    <div class="flex justify-between mt-6 text-sm text-gray-500">
                        <time datetime="2020-03-16">
                            {{ $createdAt }}
                        </time>
                        <span>
                          {{ $readingTime }} olvasás
                        </span>
                    </div>
                @endisset
            </div>
        </a>
    </div>
</div>
