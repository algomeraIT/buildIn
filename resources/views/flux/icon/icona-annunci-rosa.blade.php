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

<svg xmlns="http://www.w3.org/2000/svg" width="21.664" height="21.72" viewBox="0 0 21.664 21.72" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_917" data-name="Tracciato 917" d="M10.977,15.14,12.5,18.4a1.282,1.282,0,0,0,.1.181l1.756,2.558a.757.757,0,0,1-.506,1.177l-3.112.5a1.768,1.768,0,0,1-1.881-1L6.681,17.143a.757.757,0,0,1,.367-1.006l2.924-1.363A.756.756,0,0,1,10.977,15.14ZM9.925,16.466l-1.55.723,1.857,3.982a.252.252,0,0,0,.269.143l1.929-.308-1.078-1.571a2.707,2.707,0,0,1-.227-.4Z" transform="translate(-1.222 -1.114)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_918" data-name="Tracciato 918" d="M1.75,14.854A5.058,5.058,0,0,1,4.2,8.133L7.962,6.376A6.758,6.758,0,0,0,9.755,5.157l3.51-3.323a1.295,1.295,0,0,1,2.064.393l4.822,10.341A1.3,1.3,0,0,1,19.126,14.4l-4.8.552a6.8,6.8,0,0,0-2.087.59L8.472,17.3A5.059,5.059,0,0,1,1.75,14.854Zm16.9-1.921L14.085,3.144,10.8,6.257A8.291,8.291,0,0,1,8.6,7.75L4.837,9.505a3.543,3.543,0,1,0,2.995,6.423L11.6,14.173a8.279,8.279,0,0,1,2.554-.722Z" transform="translate(-1.276 -1.246)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_919" data-name="Tracciato 919" d="M21.423,4.729a.757.757,0,1,1,.64,1.373L20.6,6.783a.758.758,0,1,1-.64-1.374Z" transform="translate(-1.094 -1.214)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_920" data-name="Tracciato 920" d="M17.916,3.78A.757.757,0,1,1,16.6,3.023l.806-1.4a.757.757,0,0,1,1.312.757Z" transform="translate(-1.124 -1.247)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_921" data-name="Tracciato 921" d="M20.277,10.887A.757.757,0,0,1,20.541,9.4l1.588.281a.757.757,0,1,1-.263,1.492Z" transform="translate(-1.093 -1.166)" fill="currentColor" fill-rule="evenodd"/>
</svg>
