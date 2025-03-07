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

<svg xmlns="http://www.w3.org/2000/svg" width="20.328" height="17.558" viewBox="0 0 20.328 17.558" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icon_error" data-name="icon error" transform="translate(0.18 0.15)"><path id="Tracciato_7668" data-name="Tracciato 7668" d="M20.581,14.986,13.615,3.435a3.115,3.115,0,0,0-5.249,0L1.4,14.986a2.724,2.724,0,0,0-.045,2.724,3.06,3.06,0,0,0,2.67,1.544H17.956a3.06,3.06,0,0,0,2.67-1.508A2.724,2.724,0,0,0,20.581,14.986Zm-1.544,1.862a1.19,1.19,0,0,1-1.081.59H4.025a1.19,1.19,0,0,1-1.081-.59.908.908,0,0,1,0-.908L9.919,4.379a1.344,1.344,0,0,1,2.143,0l6.966,11.552a.908.908,0,0,1,.009.917Z" transform="translate(-1.013 -1.997)" fill="currentColor" stroke="currentColor" stroke-width="0.3"/><circle id="Ellisse_128" data-name="Ellisse 128" cx="1" cy="1" r="1" transform="translate(8.987 12.003)" fill="currentColor" stroke="currentColor" stroke-width="0.3"/><path id="Tracciato_7669" data-name="Tracciato 7669" d="M11.908,8A.908.908,0,0,0,11,8.908v3.633a.908.908,0,1,0,1.816,0V8.908A.908.908,0,0,0,11.908,8Z" transform="translate(-1.931 -2.548)" fill="currentColor" stroke="currentColor" stroke-width="0.3"/></g>
</svg>
