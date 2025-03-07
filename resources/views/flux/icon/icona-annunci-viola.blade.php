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

<svg xmlns="http://www.w3.org/2000/svg" width="14.742" height="14.782" viewBox="0 0 14.742 14.782" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_917" data-name="Tracciato 917" d="M9.582,15l1.034,2.218a.873.873,0,0,0,.07.123l1.2,1.741a.515.515,0,0,1-.344.8l-2.118.337a1.2,1.2,0,0,1-1.28-.68L6.658,16.363a.515.515,0,0,1,.25-.685l1.99-.928A.515.515,0,0,1,9.582,15Zm-.716.9L7.811,16.4l1.264,2.71a.172.172,0,0,0,.183.1l1.313-.21-.733-1.069a1.842,1.842,0,0,1-.155-.27Z" transform="translate(-2.944 -5.454)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_918" data-name="Tracciato 918" d="M1.6,10.582A3.442,3.442,0,0,1,3.264,6.007l2.562-1.2a4.6,4.6,0,0,0,1.22-.83L9.435,1.721a.881.881,0,0,1,1.4.267l3.281,7.038a.882.882,0,0,1-.7,1.248l-3.268.376a4.625,4.625,0,0,0-1.42.4l-2.562,1.2A3.443,3.443,0,0,1,1.6,10.582ZM13.1,9.274,9.993,2.613,7.755,4.731A5.642,5.642,0,0,1,6.262,5.747L3.7,6.942a2.411,2.411,0,1,0,2.038,4.371L8.3,10.118a5.635,5.635,0,0,1,1.738-.491Z" transform="translate(-1.276 -1.32)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_919" data-name="Tracciato 919" d="M20.816,4.706a.515.515,0,1,1,.436.934l-.995.464a.516.516,0,1,1-.436-.935Z" transform="translate(-6.981 -2.314)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_920" data-name="Tracciato 920" d="M17.464,2.971a.516.516,0,1,1-.893-.516L17.12,1.5a.516.516,0,0,1,.893.516Z" transform="translate(-6.038 -1.247)" fill="currentColor" fill-rule="evenodd"/><path id="Tracciato_921" data-name="Tracciato 921" d="M20.077,10.407a.515.515,0,0,1,.179-1.015l1.081.191a.515.515,0,1,1-.179,1.015Z" transform="translate(-7.022 -3.791)" fill="currentColor" fill-rule="evenodd"/>
</svg>
