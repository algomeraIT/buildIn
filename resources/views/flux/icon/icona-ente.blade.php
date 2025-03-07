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

<svg xmlns="http://www.w3.org/2000/svg" width="19.145" height="19.649" viewBox="0 0 19.145 19.649" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_ente" data-name="icona ente" transform="translate(0.199 0.203)"><path id="Tracciato_951" data-name="Tracciato 951" d="M9,10.672H6.972v1.7h17.4v-1.7Zm6.99-7.315a7.007,7.007,0,0,1,6.687,6.687h2.013a.314.314,0,0,1,.314.314v2.323a.314.314,0,0,1-.314.314h-.8v8.861h.8A.314.314,0,0,1,25,22.17v.412H6.344v-.412a.314.314,0,0,1,.314-.314h.8V13h-.8a.314.314,0,0,1-.314-.314V10.358a.314.314,0,0,1,.314-.314H8.67a7.01,7.01,0,0,1,6.688-6.687A2.512,2.512,0,0,1,15.985,3.357Zm.428,18.5V16.79c0-.98,1.662-2.176,2.642-2.176s2.625,1.2,2.625,2.176v5.065h1.579V13H8.084v8.861H9.756V16.79c0-.98,1.613-2.176,2.592-2.176s2.546,1.2,2.546,2.176v5.065C19.687,21.855,11.924,21.853,16.414,21.853Zm4.638,0V16.79c0-.633-1.364-1.548-2-1.548s-2.014.915-2.014,1.548v5.065Zm-6.786,0V16.79c0-.633-1.285-1.548-1.917-1.548s-1.964.915-1.964,1.548v5.065Zm7.78-11.809a6.381,6.381,0,0,0-12.747,0Z" transform="translate(-6.3 -3.335)" fill="currentColor" stroke="currentColor" stroke-width="0.4" fill-rule="evenodd"/></g>
</svg>
