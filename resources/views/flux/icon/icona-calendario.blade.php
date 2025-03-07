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

<svg xmlns="http://www.w3.org/2000/svg" width="13.801" height="15.19" viewBox="0 0 13.801 15.19" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_calendario" data-name="icona calendario" transform="translate(0.65 0.65)"><path id="Tracciato_904" data-name="Tracciato 904" d="M5.889,6h9.722A1.389,1.389,0,0,1,17,7.389v9.722A1.389,1.389,0,0,1,15.611,18.5H5.889A1.389,1.389,0,0,1,4.5,17.111V7.389A1.389,1.389,0,0,1,5.889,6Z" transform="translate(-4.5 -4.609)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"/><path id="Tracciato_905" data-name="Tracciato 905" d="M13.528,3V5.778M7.972,3V5.778M4.5,8.556H17" transform="translate(-4.5 -3)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"/></g>
</svg>
