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

<svg xmlns="http://www.w3.org/2000/svg" width="11.26" height="12.643" viewBox="0 0 11.26 12.643" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_delete_piccola" data-name="Icona delete piccola" transform="translate(0.051 0.05)"><path id="Tracciato_963" data-name="Tracciato 963" d="M34.651,21.086h-2.7V20.3a1.108,1.108,0,0,0-1.106-1.106H28.158A1.108,1.108,0,0,0,27.052,20.3v.789h-2.7a.428.428,0,1,0,0,.856h.807v7.366a2.43,2.43,0,0,0,2.426,2.426h3.838a2.43,2.43,0,0,0,2.426-2.426V21.941h.807a.428.428,0,1,0,0-.856Zm-1.662,8.222a1.571,1.571,0,0,1-1.57,1.57H27.581a1.571,1.571,0,0,1-1.57-1.57V21.969h6.979ZM27.908,20.3a.251.251,0,0,1,.25-.25h2.683a.251.251,0,0,1,.25.25v.789H27.908Z" transform="translate(-23.92 -19.19)" fill="currentColor" stroke="currentColor" stroke-width="0.1"/><path id="Tracciato_964" data-name="Tracciato 964" d="M42.47,46.83a.471.471,0,0,0,.47-.47v-4.7a.47.47,0,0,0-.94,0v4.7A.471.471,0,0,0,42.47,46.83Z" transform="translate(-38.164 -36.803)" fill="currentColor" stroke="currentColor" stroke-width="0.1"/><path id="Tracciato_965" data-name="Tracciato 965" d="M54.47,46.83a.471.471,0,0,0,.47-.47v-4.7a.47.47,0,0,0-.94,0v4.7A.471.471,0,0,0,54.47,46.83Z" transform="translate(-47.617 -36.803)" fill="currentColor" stroke="currentColor" stroke-width="0.1"/></g>
</svg>
