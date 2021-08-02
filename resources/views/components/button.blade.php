@props(['color' => 'green', 'textcolor' => 'white'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center rounded-md border px-4 py-2 bg-'.$color.'-600 hover:bg-'.$color.'-500 text-base leading-6 font-medium text-'.$textcolor.' shadow-sm focus:outline-none focus:border-'.$color.'-300 focus:shadow-outline-'.$color.' transition ease-in-out duration-150 sm:leading-5']) }}>
    {{ $slot }}
</button>
