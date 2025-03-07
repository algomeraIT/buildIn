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

<svg xmlns="http://www.w3.org/2000/svg" width="7.701" height="12.1" viewBox="0 0 7.701 12.1" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_allegato_grigia" data-name="Icona allegato grigia" transform="translate(0.551 0.55)"><path id="Icon_akar-attach" data-name="Icon akar-attach" d="M9,6.251V10.7A3.3,3.3,0,0,0,12.3,14h0a3.3,3.3,0,0,0,3.3-3.3V5.2A2.2,2.2,0,0,0,13.4,3h0a2.2,2.2,0,0,0-2.2,2.2v5.05a1.1,1.1,0,0,0,1.1,1.1h0a1.1,1.1,0,0,0,1.1-1.1V6.3" transform="translate(-9 -3)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1"/></g>
</svg>
