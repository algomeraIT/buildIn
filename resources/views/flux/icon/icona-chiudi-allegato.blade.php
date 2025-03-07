@php $attributes = $unescapedForwardedAttributes ?? $attributes; @endphp

@props([
	'variant' => 'outline',
])

@php
$classes = Flux::classes('shrink-0')
->add(match($variant) {
	'outline' => '[:where(&)]:size-6',
	'solid' => '[:where(&)]:size-6',
	'mini' => '[:where(&)]:size-5',
	'micro' => '[:where(&)]:size-4',
});
@endphp

<svg xmlns="http://www.w3.org/2000/svg" width="8.795" height="8.795" viewBox="0 0 8.795 8.795" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_chiudi_allegato" data-name="Icona chiudi allegato" transform="translate(0.848 0.849)"><path id="Icon_ion-close-outline" data-name="Icon ion-close-outline" d="M17.223,17.223l-7.1-7.1m7.1,0-7.1,7.1" transform="translate(-10.125 -10.125)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/></g>
</svg>
