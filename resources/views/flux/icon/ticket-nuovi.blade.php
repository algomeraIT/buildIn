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

<svg xmlns="http://www.w3.org/2000/svg" width="23.582" height="24.995" viewBox="0 0 23.582 24.995" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="ticket_nuovi" data-name="ticket nuovi" transform="translate(0.453 0.453)"><path id="Tracciato_7688" data-name="Tracciato 7688" d="M49.214,22.468a.3.3,0,0,0,.43-.43l-.5-.5a.3.3,0,1,0-.43.43Z" transform="translate(-37.366 -16.302)" fill="currentColor" stroke="currentColor" stroke-width="0.7"/><path id="Tracciato_7689" data-name="Tracciato 7689" d="M55.475,28.729a.3.3,0,0,0,.43-.43l-.5-.5a.3.3,0,1,0-.43.43Z" transform="translate(-42.063 -20.998)" fill="currentColor" stroke="currentColor" stroke-width="0.7"/><path id="Tracciato_7690" data-name="Tracciato 7690" d="M61.737,35.052a.3.3,0,1,0,.43-.43l-.5-.5a.344.344,0,0,0-.43,0,.291.291,0,0,0,0,.43Z" transform="translate(-46.759 -25.755)" fill="currentColor" stroke="currentColor" stroke-width="0.7"/><path id="Tracciato_7691" data-name="Tracciato 7691" d="M26.213,17.3l.177-.076V15.938a1.509,1.509,0,0,0-1.49-1.49H18.185l5.58-5.58a1.508,1.508,0,0,0,0-2.121l-.909-.909-.177.076a2.751,2.751,0,0,1-2.827-.681,2.778,2.778,0,0,1-.681-2.827l.076-.177-.909-.909a1.508,1.508,0,0,0-2.121,0L4.048,13.49a1.508,1.508,0,0,0,0,2.121l.884.884.2-.076a2.406,2.406,0,0,1,1.035-.151v.909l.177.1a2.723,2.723,0,0,1,1.565,2.5,2.812,2.812,0,0,1-1.565,2.5l-.177.051v1.262a1.509,1.509,0,0,0,1.49,1.49H24.9a1.509,1.509,0,0,0,1.49-1.49V22.3l-.177-.076A2.756,2.756,0,0,1,24.7,19.75,2.719,2.719,0,0,1,26.213,17.3ZM6.193,15.661a3.28,3.28,0,0,0-1.111.126l-.605-.631A.877.877,0,0,1,4.5,13.919l8.912-8.912.454.454a.291.291,0,0,0,.43,0,.314.314,0,0,0,0-.43l-.454-.454L16.67,1.725a.933.933,0,0,1,1.262,0l.631.631a3.349,3.349,0,0,0,.858,3.282,3.318,3.318,0,0,0,3.257.858l.631.631a.933.933,0,0,1,0,1.262l-2.8,2.854-.4-.4a.3.3,0,0,0-.43.43l.4.4L17.3,14.449H7.657a1.509,1.509,0,0,0-1.464,1.212Zm17.875,4.115a3.373,3.373,0,0,0,1.692,2.929v.909a.9.9,0,0,1-.884.884H20.886v-.581a.3.3,0,1,0-.605,0V24.5L7.658,24.472a.9.9,0,0,1-.884-.884V22.73a3.394,3.394,0,0,0,0-5.958v-.858a.857.857,0,0,1,.884-.858H20.281v.656a.291.291,0,0,0,.3.3.307.307,0,0,0,.3-.3v-.656l4.039-.025a.9.9,0,0,1,.884.884v.909a3.384,3.384,0,0,0-1.742,2.952Z" transform="translate(-3.612 -0.886)" fill="currentColor" stroke="currentColor" stroke-width="0.7"/><path id="Tracciato_7692" data-name="Tracciato 7692" d="M70.608,65.142a.291.291,0,0,0-.3.3v.707a.3.3,0,0,0,.605,0v-.707C70.91,65.243,70.784,65.117,70.608,65.142Z" transform="translate(-53.636 -49.079)" fill="currentColor" stroke="currentColor" stroke-width="0.7"/><path id="Tracciato_7693" data-name="Tracciato 7693" d="M70.608,74.029a.291.291,0,0,0-.3.3v.707a.3.3,0,0,0,.605,0v-.707C70.91,74.131,70.784,74,70.608,74.029Z" transform="translate(-53.636 -55.746)" fill="currentColor" stroke="currentColor" stroke-width="0.7"/><path id="Tracciato_7694" data-name="Tracciato 7694" d="M70.608,82.828a.291.291,0,0,0-.3.3v.707a.3.3,0,1,0,.605,0v-.707A.325.325,0,0,0,70.608,82.828Z" transform="translate(-53.636 -62.348)" fill="currentColor" stroke="currentColor" stroke-width="0.7"/></g>
</svg>
