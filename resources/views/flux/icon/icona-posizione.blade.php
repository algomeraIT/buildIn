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

<svg xmlns="http://www.w3.org/2000/svg" width="19.189" height="19.316" viewBox="0 0 19.189 19.316" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_posizione" data-name="Icona posizione" transform="translate(0.25 0.25)"><path id="Tracciato_18" data-name="Tracciato 18" d="M14.345,5a6.1,6.1,0,0,1,6.1,6.1c0,3.473-3.5,7.095-5.874,10.1a.289.289,0,0,1-.456,0c-2.348-3-5.87-6.585-5.87-10.091a6.1,6.1,0,0,1,6.1-6.1Zm4.179,14.731A15.47,15.47,0,0,1,22,20.488c.705.271,1.111.551,1.111.813,0,.426-.927.855-2.427,1.2a33.407,33.407,0,0,1-12.676,0c-1.5-.347-2.427-.776-2.427-1.2,0-.262.408-.543,1.116-.814a15.519,15.519,0,0,1,3.486-.758.29.29,0,0,0-.068-.575C8.644,19.33,5,19.9,5,21.3c0,.732,1.1,1.354,2.877,1.766a33.9,33.9,0,0,0,12.934,0c1.778-.412,2.878-1.033,2.878-1.766,0-1.4-3.631-1.967-5.1-2.145a.29.29,0,0,0-.07.575ZM14.345,7.868a3.233,3.233,0,1,0,2.286,5.518,3.233,3.233,0,0,0-2.286-5.518Zm1.876,1.356a2.653,2.653,0,1,0,0,3.752,2.656,2.656,0,0,0,0-3.752ZM18.248,7.2a5.521,5.521,0,0,0-9.425,3.9c0,3.145,3.239,6.613,5.521,9.454,2.281-2.841,5.521-6.309,5.521-9.454A5.5,5.5,0,0,0,18.248,7.2Z" transform="translate(-5 -5)" fill="currentColor" stroke="currentColor" stroke-width="0.5" fill-rule="evenodd"/></g>
</svg>
