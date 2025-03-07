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

<svg xmlns="http://www.w3.org/2000/svg" width="16.781" height="16.781" viewBox="0 0 16.781 16.781" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_904" data-name="Tracciato 904" d="M15.948,16.788V1.125H3.083V16.788H1.125v1.119H17.906V16.788Zm-1.119,0H10.075V14.55H8.956v2.238H4.2V2.244H14.83Z" transform="translate(-1.125 -1.125)" fill="currentColor"/><path id="Tracciato_905" data-name="Tracciato 905" d="M11.25,14.588h1.119v1.119H11.25Zm2.8,0h1.119v1.119H14.047Zm2.8,0h1.119v1.119H16.844ZM11.25,11.231h1.119V12.35H11.25Zm2.8,0h1.119V12.35H14.047Zm2.8,0h1.119V12.35H16.844ZM11.25,7.875h1.119V8.994H11.25Zm2.8,0h1.119V8.994H14.047Zm2.8,0h1.119V8.994H16.844Z" transform="translate(-6.215 -4.52)" fill="currentColor"/>
</svg>
