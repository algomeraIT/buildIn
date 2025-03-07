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

<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true">
<circle id="Ellisse_95" data-name="Ellisse 95" cx="20" cy="20" r="20" fill="currentColor" opacity="0.3"/><g id="noun-heart-1742986" transform="translate(-0.989 -4.035)"><g id="Raggruppa_7" data-name="Raggruppa 7" transform="translate(10.985 15.035)"><path id="Tracciato_898" data-name="Tracciato 898" d="M16.309,967.4a5.2,5.2,0,0,0-3.774,1.619,5.677,5.677,0,0,0,0,7.8l7.892,8.277a.769.769,0,0,0,1.114,0l7.9-8.269a5.675,5.675,0,0,0,0-7.8,5.2,5.2,0,0,0-7.548,0l-.905.938-.905-.945a5.2,5.2,0,0,0-3.774-1.619Zm0,1.506a3.687,3.687,0,0,1,2.668,1.178l1.458,1.53a.769.769,0,0,0,1.114,0L23,970.089a3.607,3.607,0,0,1,5.328,0,4.143,4.143,0,0,1,0,5.673q-3.669,3.84-7.34,7.676l-7.34-7.684a4.143,4.143,0,0,1,0-5.673A3.67,3.67,0,0,1,16.309,968.9Z" transform="translate(-10.985 -967.397)" fill="currentColor" stroke="currentColor" stroke-width="0.01"/></g></g>
</svg>
