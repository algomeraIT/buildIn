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

<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.001" viewBox="0 0 12 12.001" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Ellisse_42_-_Contorno" data-name="Ellisse 42 - Contorno" d="M6,1a5,5,0,1,0,5,5A5.006,5.006,0,0,0,6,1M6,0A6,6,0,1,1,0,6,6,6,0,0,1,6,0Z" transform="translate(0)" fill="currentColor"/><path id="Tracciato_146" data-name="Tracciato 146" d="M5.912,5.278a.5.5,0,1,0,0-1A4.964,4.964,0,0,1,2.636,3.045,4.962,4.962,0,0,1,.991,0,.5.5,0,0,0,0,.138,5.962,5.962,0,0,0,1.976,3.8,5.964,5.964,0,0,0,5.912,5.278Z" transform="translate(0.004 6.723)" fill="currentColor"/>
</svg>
