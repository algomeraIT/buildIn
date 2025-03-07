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

<svg xmlns="http://www.w3.org/2000/svg" width="13.643" height="10.971" viewBox="0 0 13.643 10.971" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icona_offerte" data-name="icona offerte" transform="translate(0.051 0.05)"><path id="Tracciato_7652" data-name="Tracciato 7652" d="M24.037,23.594h-.412V22.575a1.554,1.554,0,0,0-1.553-1.553H18.063a.257.257,0,0,1-.2-.1l-.637-.832a1.387,1.387,0,0,0-1.094-.541H13.654A1.554,1.554,0,0,0,12.1,21.1v7.765a1.554,1.554,0,0,0,1.553,1.553h9.619a.452.452,0,0,0,.1-.01L23.4,30.4a.433.433,0,0,0,.066-.022.175.175,0,0,0,.026-.01.429.429,0,0,0,.08-.045s.006-.006.009-.007a.476.476,0,0,0,.064-.054.12.12,0,0,0,.018-.02.424.424,0,0,0,.045-.054c.006-.007.01-.016.016-.023a.666.666,0,0,0,.036-.066.122.122,0,0,0,.009-.02s0,0,0,0l1.744-4.3a1.589,1.589,0,0,0-1.477-2.189ZM13.654,20.619h2.473a.307.307,0,0,1,.245.121l.637.832a1.337,1.337,0,0,0,1.055.522h4.009a.482.482,0,0,1,.482.482v1.019H16.418a2.224,2.224,0,0,0-2.09,1.473l-1.155,3.225V21.1a.482.482,0,0,1,.482-.482Zm10.867,4.766-1.609,3.962h-8.98l1.4-3.92a1.152,1.152,0,0,1,1.081-.762h7.618a.522.522,0,0,1,.484.72Z" transform="translate(-12.101 -19.547)" fill="currentColor" stroke="currentColor" stroke-width="0.1"/></g>
</svg>
