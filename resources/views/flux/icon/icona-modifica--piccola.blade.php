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

<svg xmlns="http://www.w3.org/2000/svg" width="12.473" height="12.466" viewBox="0 0 12.473 12.466" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_modifica_-_piccola" data-name="Icona modifica - piccola" transform="translate(0.105 0.244)"><path id="Icon_core-pencil" data-name="Icon core-pencil" d="M1.757,13.058l0,0a.636.636,0,0,0,.451.188.644.644,0,0,0,.207-.034l3.634-1.233,6.974-6.974A2.273,2.273,0,1,0,9.81,1.792L2.836,8.766,1.6,12.4a.636.636,0,0,0,.153.658ZM10.389,2.371a1.454,1.454,0,1,1,2.057,2.057l-.917.917L9.472,3.288ZM3.551,9.21,8.893,3.867,10.95,5.924,5.608,11.267,2.495,12.323Z" transform="translate(-1.569 -1.126)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/></g>
</svg>
