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

<svg xmlns="http://www.w3.org/2000/svg" width="12.553" height="11.604" viewBox="0 0 12.553 11.604" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_rispondi_bianca" data-name="icona rispondi bianca" transform="translate(0.699 0.99)"><path id="Tracciato_1014" data-name="Tracciato 1014" d="M27.1,7.5,24,10.6l3.1,3.1" transform="translate(-24 -7.5)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"/><path id="Tracciato_1015" data-name="Tracciato 1015" d="M4.5,15H9.457a6.2,6.2,0,0,1,6.2,6.2v.62" transform="translate(-4.5 -11.902)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"/></g>
</svg>
