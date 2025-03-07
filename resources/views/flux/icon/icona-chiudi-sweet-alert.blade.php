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

<svg xmlns="http://www.w3.org/2000/svg" width="9.275" height="9.273" viewBox="0 0 9.275 9.273" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M17.022,15.925l3.313-3.313a.776.776,0,0,0-1.1-1.1l-3.313,3.313-3.313-3.313a.776.776,0,1,0-1.1,1.1l3.313,3.313-3.313,3.313a.776.776,0,1,0,1.1,1.1l3.313-3.313,3.313,3.313a.776.776,0,1,0,1.1-1.1Z" transform="translate(-11.285 -11.289)" fill="currentColor"/>
</svg>
