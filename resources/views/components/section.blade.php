<div class="mt-10 mb-10 sm:mt-0 md:grid md:grid-cols-3 md:gap-6" {{ $attributes }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 sm:p-6 bg-white shadow">
                {{ $content }}
            </div>
            @isset($footer)
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
