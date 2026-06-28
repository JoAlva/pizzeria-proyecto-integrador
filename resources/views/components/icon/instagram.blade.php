@props(['class' => 'w-4 h-4'])
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" {{ $attributes->merge(['class' => $class]) }}>
    <rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/>
    <circle cx="12" cy="12" r="3.8"/>
    <circle cx="17" cy="7" r="0.9" fill="currentColor" stroke="none"/>
</svg>
