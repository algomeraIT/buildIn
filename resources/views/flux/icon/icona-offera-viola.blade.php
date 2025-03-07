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

<svg xmlns="http://www.w3.org/2000/svg" width="15.863" height="12.755" viewBox="0 0 15.863 12.755" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<g id="Icona_offera_viola" data-name="Icona offera viola" transform="translate(0.051 0.05)"><path id="Tracciato_7652" data-name="Tracciato 7652" d="M26,24.258h-.48V23.071a1.809,1.809,0,0,0-1.808-1.808H19.041a.3.3,0,0,1-.239-.119l-.742-.968a1.614,1.614,0,0,0-1.273-.63H13.909A1.809,1.809,0,0,0,12.1,21.356v9.039A1.809,1.809,0,0,0,13.909,32.2h11.2a.526.526,0,0,0,.112-.012l.033-.006a.5.5,0,0,0,.077-.025.2.2,0,0,0,.031-.012.5.5,0,0,0,.093-.052s.006-.006.011-.008a.554.554,0,0,0,.075-.062A.14.14,0,0,0,25.56,32a.493.493,0,0,0,.052-.062c.006-.008.012-.019.019-.027a.776.776,0,0,0,.041-.077.143.143,0,0,0,.011-.023s0,0,0,0l2.03-5A1.849,1.849,0,0,0,26,24.258ZM13.909,20.795h2.878a.358.358,0,0,1,.285.141l.742.968a1.556,1.556,0,0,0,1.228.607h4.667a.562.562,0,0,1,.561.561v1.187H17.126a2.589,2.589,0,0,0-2.433,1.714l-1.344,3.755V21.356a.561.561,0,0,1,.561-.561Zm12.65,5.548-1.873,4.613H14.233l1.636-4.563a1.341,1.341,0,0,1,1.259-.887H26a.607.607,0,0,1,.563.838Z" transform="translate(-12.101 -19.547)" fill="currentColor" stroke="currentColor" stroke-width="0.1"/></g>
</svg>
