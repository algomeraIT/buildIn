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

<svg xmlns="http://www.w3.org/2000/svg" width="12.158" height="12.158" viewBox="0 0 12.158 12.158" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_statistiche" data-name="Icona statistiche" transform="translate(0.098 0.1)"><path id="Tracciato_463" data-name="Tracciato 463" d="M18349.826-8044.822a.606.606,0,0,1-.605-.6v-10.748a.606.606,0,0,1,.605-.6.6.6,0,0,1,.6.6v7.006l4.363-4.087a.6.6,0,0,1,.834.013l1.59,1.589,2.6-2.6a.6.6,0,0,1,.852,0,.6.6,0,0,1,0,.854l-3.021,3.022a.593.593,0,0,1-.428.178.6.6,0,0,1-.428-.178l-1.6-1.6-4.758,4.462v1.488h10.148a.6.6,0,0,1,.605.6.606.606,0,0,1-.605.6Z" transform="translate(-18349.221 8056.78)" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-width="0.2"/></g>
</svg>
