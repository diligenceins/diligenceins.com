@props(['containerClasses' => ''])

<div class="container mx-auto px-4 sm:px-6 {{ $containerClasses }}">
	{{ $slot }}
</div>