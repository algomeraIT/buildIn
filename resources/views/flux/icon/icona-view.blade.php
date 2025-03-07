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

<svg xmlns="http://www.w3.org/2000/svg" width="15.006" height="11.241" viewBox="0 0 15.006 11.241" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_view" data-name="Icona view" transform="translate(0.6 0.6)"><path id="Tracciato_624" data-name="Tracciato 624" d="M1.5,11.021S4.01,6,8.4,6s6.9,5.021,6.9,5.021-2.51,5.021-6.9,5.021S1.5,11.021,1.5,11.021Z" transform="translate(-1.5 -6)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/><path id="Tracciato_625" data-name="Tracciato 625" d="M17.265,15.383A1.883,1.883,0,1,1,15.383,13.5,1.883,1.883,0,0,1,17.265,15.383Z" transform="translate(-8.48 -10.362)" fill="currentColor"/></g>
</svg>
