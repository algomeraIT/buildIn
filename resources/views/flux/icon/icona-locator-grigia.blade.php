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

<svg xmlns="http://www.w3.org/2000/svg" width="10.293" height="12.6" viewBox="0 0 10.293 12.6" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_locator_grigia" data-name="Icona locator grigia" transform="translate(0.301 0.3)"><g id="Raggruppa_19" data-name="Raggruppa 19"><path id="Tracciato_900" data-name="Tracciato 900" d="M23.538,18.047A2.538,2.538,0,1,0,21,15.508,2.54,2.54,0,0,0,23.538,18.047Zm0-4.615a2.077,2.077,0,1,1-2.077,2.077A2.08,2.08,0,0,1,23.538,13.432Z" transform="translate(-18.692 -10.669)" fill="currentColor" stroke="currentColor" stroke-width="0.6"/><path id="Tracciato_902" data-name="Tracciato 902" d="M15.735,14.972a.235.235,0,0,0,.222,0c.194-.106,4.735-2.645,4.735-7.126a4.846,4.846,0,1,0-9.692,0C11,12.328,15.542,14.866,15.735,14.972Zm.111-11.511a4.389,4.389,0,0,1,4.385,4.385c0,3.828-3.692,6.238-4.385,6.655-.692-.418-4.385-2.822-4.385-6.655A4.389,4.389,0,0,1,15.846,3.462Z" transform="translate(-11 -3)" fill="currentColor" stroke="currentColor" stroke-width="0.6"/></g></g>
</svg>
