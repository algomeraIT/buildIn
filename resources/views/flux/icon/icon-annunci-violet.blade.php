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

<svg xmlns="http://www.w3.org/2000/svg" width="20.164" height="20.248" viewBox="0 0 20.164 20.248" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="icon_annunci_violet" data-name="icon annunci violet" transform="translate(0.113 0.14)"><path id="Tracciato_7661" data-name="Tracciato 7661" d="M10.631,15.106l1.4,3a1.181,1.181,0,0,0,.095.166l1.617,2.356a.7.7,0,0,1-.466,1.083l-2.865.457a1.628,1.628,0,0,1-1.732-.92l-2.005-4.3a.7.7,0,0,1,.338-.926l2.692-1.255A.7.7,0,0,1,10.631,15.106Zm-.969,1.221-1.428.666,1.71,3.667a.232.232,0,0,0,.247.132l1.776-.284-.992-1.446a2.492,2.492,0,0,1-.209-.365Z" transform="translate(-1.648 -2.189)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_7662" data-name="Tracciato 7662" d="M1.712,13.795A4.657,4.657,0,0,1,3.966,7.606L7.433,5.989A6.222,6.222,0,0,0,9.083,4.866l3.232-3.06a1.192,1.192,0,0,1,1.9.362l4.44,9.522a1.193,1.193,0,0,1-.944,1.689l-4.421.509a6.258,6.258,0,0,0-1.921.543L7.9,16.048a4.658,4.658,0,0,1-6.19-2.253Zm15.561-1.769-4.2-9.014L10.042,5.879a7.634,7.634,0,0,1-2.02,1.375L4.555,8.87a3.263,3.263,0,1,0,2.757,5.914l3.467-1.616a7.624,7.624,0,0,1,2.352-.665Z" transform="translate(-1.275 -1.264)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_7663" data-name="Tracciato 7663" d="M21.272,4.723a.7.7,0,1,1,.59,1.264l-1.346.628a.7.7,0,1,1-.59-1.265Z" transform="translate(-2.553 -1.486)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_7664" data-name="Tracciato 7664" d="M17.8,3.579a.7.7,0,1,1-1.208-.7L17.338,1.6a.7.7,0,0,1,1.208.7Z" transform="translate(-2.342 -1.248)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/><path id="Tracciato_7665" data-name="Tracciato 7665" d="M20.228,10.768a.7.7,0,0,1,.243-1.374l1.462.259a.7.7,0,1,1-.242,1.374Z" transform="translate(-2.561 -1.816)" fill="currentColor" stroke="currentColor" stroke-width="0.2" fill-rule="evenodd"/></g>
</svg>
