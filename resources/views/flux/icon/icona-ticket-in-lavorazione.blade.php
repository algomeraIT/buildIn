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

<svg xmlns="http://www.w3.org/2000/svg" width="18.643" height="18.646" viewBox="0 0 18.643 18.646" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_7680" data-name="Tracciato 7680" d="M34.661,22.991H30.777A.777.777,0,0,1,30,22.214V16.777a.777.777,0,0,1,1.554,0v4.661h3.107a.777.777,0,1,1,0,1.554Z" transform="translate(-21.456 -12.894)" fill="currentColor"/><path id="Tracciato_7681" data-name="Tracciato 7681" d="M26.642,17.321a9.321,9.321,0,1,1-18.29-2.54.777.777,0,1,1,1.491.419,7.766,7.766,0,1,0,2.816-4.094h.777a.777.777,0,1,1,0,1.554h-2.33a.777.777,0,0,1-.777-.777V8.777a.777.777,0,1,1,1.554,0v.975a9.321,9.321,0,0,1,14.759,7.57Z" transform="translate(-7.999 -8)" fill="currentColor"/>
</svg>
