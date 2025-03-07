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

<svg xmlns="http://www.w3.org/2000/svg" width="21.291" height="17.184" viewBox="0 0 21.291 17.184" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Raggruppa_17481" data-name="Raggruppa 17481" transform="translate(-2 28.444) rotate(-90)"><path id="Tracciato_7682" data-name="Tracciato 7682" d="M16.78,2h-2a3.524,3.524,0,0,0-3.52,3.52V20.674a2.619,2.619,0,0,0,2.615,2.617h2.892a.665.665,0,0,0,.665-.665,2.42,2.42,0,1,1,4.839,0,.665.665,0,0,0,.665.665h2.892a2.619,2.619,0,0,0,2.615-2.617V5.52A3.524,3.524,0,0,0,24.924,2H22.952a.665.665,0,0,0-.665.665V2.7a2.421,2.421,0,0,1-4.841,0V2.665A.665.665,0,0,0,16.78,2Zm3.085,4.449A3.755,3.755,0,0,0,23.56,3.331h1.364A2.192,2.192,0,0,1,27.113,5.52V16.109h-2.9a.665.665,0,0,0,0,1.331h2.9v3.234a1.287,1.287,0,0,1-1.284,1.286H23.54a3.747,3.747,0,0,0-7.376,0H13.875a1.287,1.287,0,0,1-1.284-1.286V17.44h2.9a.665.665,0,1,0,0-1.331h-2.9V5.52A2.192,2.192,0,0,1,14.78,3.331h1.393A3.753,3.753,0,0,0,19.865,6.449Z" fill="currentColor"/><path id="Tracciato_7683" data-name="Tracciato 7683" d="M39.635,66.948H43.2a.665.665,0,1,0,0-1.331H39.635a.665.665,0,1,0,0,1.331Z" transform="translate(-21.564 -49.508)" fill="currentColor"/></g>
</svg>
