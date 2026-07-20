@props(['class' => 'w-5 h-5'])
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" {{ $attributes->merge(['class' => $class]) }}>
    <rect x="3.5" y="5.5" width="17" height="13" rx="2"/>
    <path d="M4.5 7 12 13l7.5-6"/>
</svg>
