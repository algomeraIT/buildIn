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

<svg xmlns="http://www.w3.org/2000/svg" width="11.766" height="12.877" viewBox="0 0 11.766 12.877" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Layer_2" data-name="Layer 2"><path id="Tracciato_896" data-name="Tracciato 896" d="M14.054,21.646H5.165a1.438,1.438,0,0,1-1.41-1.72l.6-3A2.4,2.4,0,0,1,6.705,15h5.809a2.4,2.4,0,0,1,2.35,1.927l.6,3a1.438,1.438,0,0,1-1.41,1.72ZM6.705,15.959a1.442,1.442,0,0,0-1.41,1.156l-.6,3a.48.48,0,0,0,.47.573h8.889a.48.48,0,0,0,.47-.573l-.6-3a1.442,1.442,0,0,0-1.41-1.156Z" transform="translate(-3.727 -8.769)" fill="currentColor"/><path id="Tracciato_897" data-name="Tracciato 897" d="M13.136,7.272a2.636,2.636,0,1,1,2.636-2.636A2.636,2.636,0,0,1,13.136,7.272Zm0-4.314a1.678,1.678,0,1,0,1.678,1.678A1.678,1.678,0,0,0,13.136,2.959Z" transform="translate(-7.254 -2)" fill="currentColor"/></g>
</svg>
