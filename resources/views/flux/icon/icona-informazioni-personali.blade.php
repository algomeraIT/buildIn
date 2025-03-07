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

<svg xmlns="http://www.w3.org/2000/svg" width="13.252" height="14.477" viewBox="0 0 13.252 14.477" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_informazioni_personali" data-name="icona informazioni personali" transform="translate(0.104 0.1)"><path id="Tracciato_896" data-name="Tracciato 896" d="M15.176,22.368H5.322a1.594,1.594,0,0,1-1.563-1.907l.665-3.325A2.664,2.664,0,0,1,7.029,15h6.44a2.664,2.664,0,0,1,2.605,2.136l.665,3.325a1.594,1.594,0,0,1-1.563,1.907ZM7.029,16.063a1.6,1.6,0,0,0-1.563,1.282L4.8,20.669a.532.532,0,0,0,.521.636h9.855a.532.532,0,0,0,.521-.636l-.665-3.325a1.6,1.6,0,0,0-1.563-1.282Z" transform="translate(-3.727 -8.092)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/><path id="Tracciato_897" data-name="Tracciato 897" d="M13.423,7.845a2.923,2.923,0,1,1,2.923-2.923A2.923,2.923,0,0,1,13.423,7.845Zm0-4.782a1.86,1.86,0,1,0,1.86,1.86A1.86,1.86,0,0,0,13.423,3.063Z" transform="translate(-6.901 -2)" fill="currentColor" stroke="currentColor" stroke-width="0.2"/></g>
</svg>
