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

<svg xmlns="http://www.w3.org/2000/svg" width="16.883" height="15.677" viewBox="0 0 16.883 15.677" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star" d="M18.492,8.8H12.948L11.264,3.774a.61.61,0,0,0-1.146,0L8.434,8.8H2.853a.6.6,0,0,0-.6.6.443.443,0,0,0,.011.1.579.579,0,0,0,.252.426L7.07,13.143,5.321,18.226a.6.6,0,0,0,.207.678.583.583,0,0,0,.339.147.739.739,0,0,0,.377-.136l4.447-3.169,4.447,3.169a.706.706,0,0,0,.377.136.541.541,0,0,0,.335-.147.6.6,0,0,0,.207-.678l-1.749-5.084L18.827,9.9l.109-.094A.576.576,0,0,0,18.492,8.8Z" transform="translate(-2.25 -3.375)" fill="currentColor"/>
</svg>
