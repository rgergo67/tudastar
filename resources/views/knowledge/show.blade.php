<x-guest-layout>
    <x-public-navigation />

    <div class="min-h-screen pt-24 bg-gray-100 pb-10">
        <div class="max-w-7xl mx-auto">
            <div class="w-full sm:max-w-7xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose lg:prose-lg">
                {!! $content !!}
            </div>
        </div>
    </div>

    <x-welcome.demo-section />

    <x-footer />
</x-guest-layout>
