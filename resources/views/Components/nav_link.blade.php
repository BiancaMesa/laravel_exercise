<!-- We have set the active prop to be false by default. The prop name is 'active' and the value is 'default' -->
@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a 
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
        aria-current="{{ $active ? 'page' : 'false'}}" {{ $attributes }}
        >
        {{ $slot }}
    </a> 
@else 
    <button
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
        aria-current="{{ $active ? 'page' : 'false'}}" {{ $attributes }}
        >
        {{ $slot }}
    </button> 
@endif

<!-- Using a is request method -->
<!-- <a 
    class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white" 
    aria-current="{{ request()->is('/') ? 'page' : 'false'}}" {{ $attributes }}
    >
    {{ $slot }}
</a>  -->