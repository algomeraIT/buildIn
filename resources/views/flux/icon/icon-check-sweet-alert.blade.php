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

<svg xmlns="http://www.w3.org/2000/svg" width="8.471" height="6.89" viewBox="0 0 8.471 6.89" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icon_check_sweet_alert" data-name="Icon check sweet alert" transform="translate(1.061 1.058)"><path id="Icon_ion-checkmark" data-name="Icon ion-checkmark" d="M13.1,9,8.656,14.082,6.75,12.176" transform="translate(-6.75 -9)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></g>
</svg>
