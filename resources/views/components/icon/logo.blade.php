@props(['class' => 'w-8 h-8'])
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" {{ $attributes->merge(['class' => $class]) }}>
    <path d="M16 4 27 26H5L16 4Z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"/>
    <path d="M16 4c-1.6 1.4-1 3.2 0.4 3.6-1.2 0.6-1.4 2.2-0.2 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
    <circle cx="13.5" cy="19" r="1.3" fill="currentColor"/>
    <circle cx="18.5" cy="19" r="1.3" fill="currentColor"/>
    <circle cx="16" cy="23" r="1.3" fill="currentColor"/>
</svg>
