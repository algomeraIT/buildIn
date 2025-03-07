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

<svg xmlns="http://www.w3.org/2000/svg" width="13.436" height="14.808" viewBox="0 0 13.436 14.808" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="calendario_viola" data-name="calendario viola" transform="translate(0.551 0.55)"><path id="Tracciato_7658" data-name="Tracciato 7658" d="M5.871,6h9.594a1.355,1.355,0,0,1,1.371,1.338V16.7a1.355,1.355,0,0,1-1.371,1.338H5.871A1.355,1.355,0,0,1,4.5,16.7V7.338A1.355,1.355,0,0,1,5.871,6Z" transform="translate(-4.5 -4.334)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1"/><path id="Tracciato_7659" data-name="Tracciato 7659" d="M13.409,3V6.328M7.926,3V6.328M4.5,9.656H16.835" transform="translate(-4.5 -3)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1"/></g>
</svg>
