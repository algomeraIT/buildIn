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

<svg xmlns="http://www.w3.org/2000/svg" width="43.252" height="46.763" viewBox="0 0 43.252 46.763" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<path id="Tracciato_7673" data-name="Tracciato 7673" d="M38.635,11.587a5.843,5.843,0,0,0-8.019,0L28.582,13.5H21.767a5.845,5.845,0,0,0-5.845,5.845v6.092l-1.087,1.025A5.849,5.849,0,0,0,13,30.72V50.913a5.845,5.845,0,0,0,5.845,5.845H50.407a5.845,5.845,0,0,0,5.845-5.845V30.72a5.849,5.849,0,0,0-1.836-4.254L53.33,25.441V19.35A5.845,5.845,0,0,0,47.485,13.5H40.67ZM37.261,13.5h-5.27l.228-.217a3.508,3.508,0,0,1,4.813,0ZM15.337,50.486V30.766L27.886,38.3ZM30.553,35.7l-.932.906L18.259,29.793V19.35a3.508,3.508,0,0,1,3.507-3.507H47.484a3.508,3.508,0,0,1,3.507,3.507V29.793L39.63,36.611,38.7,35.7a5.847,5.847,0,0,0-8.147,0ZM41.366,38.3l12.549-7.53v19.72Zm-4.3-.916L53.193,53.043a3.5,3.5,0,0,1-2.785,1.377H18.844a3.5,3.5,0,0,1-2.785-1.377L32.183,37.381a3.506,3.506,0,0,1,4.886,0Z" transform="translate(-12.999 -9.994)" fill="currentColor" fill-rule="evenodd"/>
</svg>
