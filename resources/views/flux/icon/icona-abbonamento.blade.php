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

<svg xmlns="http://www.w3.org/2000/svg" width="17.727" height="13.777" viewBox="0 0 17.727 13.777" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_abbonamento" data-name="icona abbonamento" transform="translate(0.201 0.2)"><path id="Tracciato_7681" data-name="Tracciato 7681" d="M60.265,44.151l-5.343-1.219a.894.894,0,0,0-1.091,1.091l1.054,5.509a.888.888,0,0,0,1.552.322l.8-1a.291.291,0,0,1,.215-.11.287.287,0,0,1,.226.087l1.126.962a.91.91,0,0,0,1.257,0l.621-.621a.89.89,0,0,0,0-1.257l-1.126-.962a.3.3,0,0,1,.024-.441l1-.8a.9.9,0,0,0-.321-1.552Zm-.049,1.09-1,.8a.891.891,0,0,0-.333.645c-.063.525,1.08,1.3,1.385,1.64a.3.3,0,0,1,0,.419l-.621.621a.3.3,0,0,1-.419,0L58.1,48.408a.9.9,0,0,0-1.323.073l-.8,1a.3.3,0,0,1-.517-.107L54.4,43.87a.292.292,0,0,1,.076-.287.306.306,0,0,1,.287-.076l5.343,1.219a.3.3,0,0,1,.107.517Z" transform="translate(-44.624 -36.862)" fill="currentColor" stroke="currentColor" stroke-width="0.5"/><path id="Tracciato_7682" data-name="Tracciato 7682" d="M10.62,26.467c.059-.014,2.772.01,2.75,0a.353.353,0,0,0,0-.705H10.62a4.231,4.231,0,0,1,0-8.462h7.652a3.767,3.767,0,0,1,3.585,5.626.353.353,0,0,0,.148.476c.727.374,1.07-1.969,1.038-2.442,0-2.722-2.059-4.366-4.772-4.366H10.62a4.937,4.937,0,0,0,0,9.873Z" transform="translate(-5.724 -16.594)" fill="currentColor" stroke="currentColor" stroke-width="0.4"/><path id="Tracciato_7683" data-name="Tracciato 7683" d="M18.251,35.063l1.5,1.5a.5.5,0,0,0,.707,0l3.5-3.5a.5.5,0,0,0-.707-.707L20.1,35.5l-1.145-1.146a.5.5,0,0,0-.707.707Z" transform="translate(-15.73 -29.518)" fill="currentColor" stroke="currentColor" stroke-width="0.4"/></g>
</svg>
