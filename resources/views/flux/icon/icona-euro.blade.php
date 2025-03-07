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

<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_895" data-name="Tracciato 895" d="M38.206,35.758a1.614,1.614,0,0,1,1.15.49.482.482,0,1,0,.66-.7,2.614,2.614,0,0,0-1.832-.745,2.915,2.915,0,0,0-2.662,2.087h-.639a.383.383,0,1,0,0,.767h.469a1.746,1.746,0,0,0,0,.767h-.469a.383.383,0,1,0,0,.767h.639a2.894,2.894,0,0,0,2.662,2.087,2.751,2.751,0,0,0,1.832-.745.476.476,0,0,0,.021-.682.5.5,0,0,0-.682-.021,1.652,1.652,0,0,1-1.15.49,1.807,1.807,0,0,1-1.6-1.129h1.6a.383.383,0,1,0,0-.767H36.374a2.315,2.315,0,0,1-.021-.383c0-.128.021-.256.021-.383h1.832a.383.383,0,1,0,0-.767h-1.6A1.807,1.807,0,0,1,38.206,35.758Z" transform="translate(-30.477 -31.186)" fill="currentColor"/><g id="Ellisse_93" data-name="Ellisse 93" fill="none" stroke="currentColor" stroke-width="1"><circle cx="7" cy="7" r="7" stroke="none"/><circle cx="7" cy="7" r="6.5" fill="none"/></g>
</svg>
