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

<svg xmlns="http://www.w3.org/2000/svg" width="17.086" height="15.866" viewBox="0 0 17.086 15.866" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Icon_ionic-ios-star-half" data-name="Icon ionic-ios-star-half" d="M18.688,8.867h-5.61l-1.7-5.088a.618.618,0,0,0-1.159,0l-1.7,5.088H2.86a.612.612,0,0,0-.61.61.448.448,0,0,0,.011.1.586.586,0,0,0,.256.431l4.611,3.249-1.77,5.145a.612.612,0,0,0,.21.686.59.59,0,0,0,.343.149.748.748,0,0,0,.381-.137l4.5-3.207,4.5,3.207a.715.715,0,0,0,.381.137.548.548,0,0,0,.339-.149.6.6,0,0,0,.21-.686l-1.77-5.145,4.573-3.28.111-.1a.583.583,0,0,0-.45-1.018ZM16.88,10.209l-3.043,2.185a1.071,1.071,0,0,0-.389,1.213L14.6,16.952a.153.153,0,0,1-.233.175l-2.952-2.105,0,0a1.422,1.422,0,0,1-.614-1.163V5.865a.074.074,0,0,1,.145-.023h0l1.129,3.364a1.066,1.066,0,0,0,1.011.728h3.711A.152.152,0,0,1,16.88,10.209Z" transform="translate(-2.25 -3.375)" fill="currentColor"/>
</svg>
