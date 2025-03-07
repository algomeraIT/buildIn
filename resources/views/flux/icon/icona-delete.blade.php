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

<svg xmlns="http://www.w3.org/2000/svg" width="12.85" height="14.443" viewBox="0 0 12.85 14.443" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_731" data-name="Tracciato 731" d="M36.277,21.373H33.163v-.909a1.275,1.275,0,0,0-1.274-1.274H28.8a1.275,1.275,0,0,0-1.274,1.274v.909H24.413a.493.493,0,1,0,0,.985h.929V30.84a2.8,2.8,0,0,0,2.794,2.794h4.42a2.8,2.8,0,0,0,2.794-2.794V22.358h.929a.493.493,0,1,0,0-.985ZM34.363,30.84a1.809,1.809,0,0,1-1.808,1.808h-4.42a1.809,1.809,0,0,1-1.808-1.808V22.39h8.036ZM28.512,20.464a.289.289,0,0,1,.288-.288h3.089a.289.289,0,0,1,.288.288v.909H28.512Z" transform="translate(-23.92 -19.19)" fill="currentColor"/><path id="Tracciato_732" data-name="Tracciato 732" d="M42.589,48.265a.591.591,0,0,0,.589-.589v-5.9a.589.589,0,0,0-1.179,0v5.9A.591.591,0,0,0,42.589,48.265Z" transform="translate(-37.618 -36.507)" fill="currentColor"/><path id="Tracciato_733" data-name="Tracciato 733" d="M54.589,48.265a.591.591,0,0,0,.589-.589v-5.9a.589.589,0,0,0-1.179,0v5.9A.591.591,0,0,0,54.589,48.265Z" transform="translate(-46.711 -36.507)" fill="currentColor"/>
</svg>
