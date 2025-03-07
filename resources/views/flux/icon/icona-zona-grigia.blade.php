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

<svg xmlns="http://www.w3.org/2000/svg" width="14.805" height="14.901" viewBox="0 0 14.805 14.901" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_zona_grigia" data-name="icona zona grigia" transform="translate(0.35 0.35)"><path id="Tracciato_7675" data-name="Tracciato 7675" d="M12.053,5a4.6,4.6,0,0,1,4.6,4.6c0,2.621-2.641,5.355-4.433,7.62a.218.218,0,0,1-.344,0c-1.772-2.261-4.431-4.97-4.431-7.616a4.6,4.6,0,0,1,4.6-4.6Zm3.154,11.118a11.675,11.675,0,0,1,2.623.572c.532.2.839.416.839.613,0,.322-.7.645-1.832.907a25.214,25.214,0,0,1-9.567,0c-1.132-.262-1.832-.585-1.832-.907,0-.2.308-.41.842-.615a11.713,11.713,0,0,1,2.631-.572.219.219,0,0,0-.051-.434C7.751,15.815,5,16.247,5,17.3c0,.553.83,1.022,2.172,1.332a25.589,25.589,0,0,0,9.762,0c1.342-.311,2.172-.78,2.172-1.332,0-1.056-2.74-1.484-3.846-1.619a.219.219,0,0,0-.053.434ZM12.053,7.165a2.44,2.44,0,1,0,1.725,4.165,2.44,2.44,0,0,0-1.725-4.165Zm1.416,1.024a2,2,0,1,0,0,2.832,2,2,0,0,0,0-2.832ZM15,6.658A4.167,4.167,0,0,0,7.886,9.6c0,2.373,2.445,4.991,4.167,7.135,1.722-2.144,4.167-4.762,4.167-7.135A4.153,4.153,0,0,0,15,6.658Z" transform="translate(-5 -5)" fill="currentColor" stroke="currentColor" stroke-width="0.7" fill-rule="evenodd"/></g>
</svg>
