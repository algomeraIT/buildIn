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

<svg xmlns="http://www.w3.org/2000/svg" width="16.756" height="18.301" viewBox="0 0 16.756 18.301" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icon_profile_violet" data-name="icon profile violet" transform="translate(0.154 0.15)"><path id="Tracciato_896" data-name="Tracciato 896" d="M18.163,24.29H5.737a2.01,2.01,0,0,1-1.971-2.4L4.6,17.693A3.359,3.359,0,0,1,7.89,15h8.12A3.359,3.359,0,0,1,19.3,17.693l.839,4.192a2.01,2.01,0,0,1-1.971,2.4ZM7.89,16.34a2.016,2.016,0,0,0-1.971,1.616L5.08,22.148a.67.67,0,0,0,.657.8H18.163a.67.67,0,0,0,.657-.8l-.838-4.192A2.016,2.016,0,0,0,16.01,16.34Z" transform="translate(-3.727 -6.289)" fill="currentColor" stroke="currentColor" stroke-width="0.3"/><path id="Tracciato_897" data-name="Tracciato 897" d="M14.185,9.37A3.685,3.685,0,1,1,17.87,5.685,3.685,3.685,0,0,1,14.185,9.37Zm0-6.03A2.345,2.345,0,1,0,16.53,5.685,2.345,2.345,0,0,0,14.185,3.34Z" transform="translate(-5.963 -2)" fill="currentColor" stroke="currentColor" stroke-width="0.3"/></g>
</svg>
