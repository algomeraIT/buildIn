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

<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_895" data-name="Tracciato 895" d="M38.544,35.846a1.762,1.762,0,0,1,1.255.535.526.526,0,1,0,.72-.767,2.852,2.852,0,0,0-2-.813,3.181,3.181,0,0,0-2.905,2.278h-.7a.418.418,0,1,0,0,.837h.511a1.906,1.906,0,0,0,0,.837h-.511a.418.418,0,1,0,0,.837h.7a3.158,3.158,0,0,0,2.905,2.278,3,3,0,0,0,2-.813.52.52,0,0,0,.023-.744.541.541,0,0,0-.744-.023,1.8,1.8,0,0,1-1.255.535A1.972,1.972,0,0,1,36.8,39.588h1.743a.418.418,0,1,0,0-.837h-2a2.526,2.526,0,0,1-.023-.418c0-.139.023-.279.023-.418h2a.418.418,0,1,0,0-.837H36.8A1.972,1.972,0,0,1,38.544,35.846Z" transform="translate(-30.477 -31.186)" fill="currentColor"/><g id="Ellisse_93" data-name="Ellisse 93" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="7.5" cy="7.5" r="7.5" stroke="none"/><circle cx="7.5" cy="7.5" r="6.9" fill="none"/></g>
</svg>
