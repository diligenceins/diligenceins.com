<footer class="bg-blue-800 text-blue-100 bg-pattern">
	<x-container>
		<div class="py-16 flex flex-wrap text-center sm:text-left justify-between -mx-4">
			<div class="w-full sm:w-1/2 md:w-1/4 px-4">
				<h5 class="font-semibold mb-4 text-blue-300">INDUSTRIES</h5>
				<ul class="leading-7">
					@if ($categories)
						@foreach ($categories as $category)
							<li><a class="hover:text-yellow-400" href="{{ route('reports.category', $category->slug) }}">{{ $category->name }}</a></li>
						@endforeach
					@endif
				</ul>
			</div>
			<div class="w-full sm:w-1/2 md:w-1/4 mt-8 sm:mt-0 px-4">
				<h5 class="font-semibold mb-4 text-blue-300">QUICK LINKS</h5>
				<ul class="leading-7">
					@if ($pages)
						@foreach ($pages as $page)
							<li><a class="hover:text-yellow-400" href="{{ route('page', $page->slug) }}">{{ $page->name }}</a></li>
						@endforeach
					@endif
					<li><a class="hover:text-yellow-400" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="w-full sm:w-1/2 md:w-1/4 mt-8 md:mt-0 px-4">
				<h5 class="font-semibold mb-4 text-blue-300">FOLLOW US</h5>
				<ul class="flex items-center justify-center sm:justify-start mb-12 text-yellow-400">
					<li class="mr-2"><a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
					</a></li>
					<li class="mx-2"><a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
					</a></li>
					<li class="ml-2"><a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
					</a></li>
				</ul>

				<h5 class="font-semibold mb-2 text-blue-300">SECURE ONLINE PAYMENTS</h5>
				<p>We accept secure online payments</p>
				<svg class="w-36 mt-4 mx-auto sm:mx-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 34"><path fill="currentColor" d="M146 0H3.73A3.73 3.73 0 000 3.73v26.54A3.73 3.73 0 003.73 34H146a4 4 0 004-4V4a4 4 0 00-4-4zm3 30a3 3 0 01-3 3H3.73A2.74 2.74 0 011 30.27V3.73A2.74 2.74 0 013.73 1H146a3 3 0 013 3z"/><path fill="currentColor" d="M17.07 11.24h-4.3V22h1.92v-4.16h2.38c2.4 0 3.9-1.16 3.9-3.3s-1.5-3.3-3.9-3.3zm-.1 5h-2.28v-3.3H17c1.38 0 2.11.59 2.11 1.65s-.76 1.6-2.11 1.6zM25.1 14a3.77 3.77 0 00-3.8 4.09 3.81 3.81 0 107.59 0A3.76 3.76 0 0025.1 14zm0 6.67c-1.22 0-2-1-2-2.58s.76-2.58 2-2.58 2 1 2 2.58-.79 2.57-2 2.57zM36.78 19.35l-1.41-5.22h-1.48l-1.4 5.22-1.42-5.22h-1.85l2.37 7.88h1.56l1.44-5.16 1.44 5.16h1.56l2.37-7.88h-1.78l-1.4 5.22zM44 14a3.83 3.83 0 00-3.75 4.09 3.79 3.79 0 003.83 4.09A3.47 3.47 0 0047.49 20L46 19.38a1.78 1.78 0 01-1.83 1.26A2.12 2.12 0 0142 18.47h5.52v-.6C47.54 15.71 46.32 14 44 14zm-1.93 3.13A1.92 1.92 0 0144 15.5a1.56 1.56 0 011.69 1.62zM50.69 15.3v-1.17h-1.8V22h1.8v-4.13a1.89 1.89 0 012-2 4.68 4.68 0 01.66 0v-1.8h-.51a2.29 2.29 0 00-2.15 1.23zM57.48 14a3.83 3.83 0 00-3.75 4.09 3.79 3.79 0 003.83 4.09A3.47 3.47 0 0060.93 20l-1.54-.59a1.78 1.78 0 01-1.83 1.26 2.12 2.12 0 01-2.1-2.17H61v-.6c0-2.19-1.24-3.9-3.52-3.9zm-1.93 3.13a1.92 1.92 0 011.92-1.62 1.56 1.56 0 011.69 1.62zM67.56 15a2.85 2.85 0 00-2.26-1c-2.21 0-3.47 1.85-3.47 4.09s1.26 4.09 3.47 4.09a2.82 2.82 0 002.26-1V22h1.8V11.24h-1.8zm0 3.35a2 2 0 01-2 2.28c-1.31 0-2-1-2-2.52s.7-2.52 2-2.52c1.11 0 2 .81 2 2.29zM79.31 14A2.88 2.88 0 0077 15v-3.76h-1.8V22H77v-.83a2.86 2.86 0 002.27 1c2.2 0 3.46-1.86 3.46-4.09S81.51 14 79.31 14zM79 20.6a2 2 0 01-2-2.28v-.47c0-1.48.84-2.29 2-2.29 1.3 0 2 1 2 2.52s-.75 2.52-2 2.52zM86.93 19.66L85 14.13h-1.9l2.9 7.59-.3.74a1 1 0 01-1.14.79 4.12 4.12 0 01-.6 0v1.51a4.62 4.62 0 00.73.05 2.67 2.67 0 002.78-2l3.24-8.62h-1.89zM125 12.43a3 3 0 00-2.13.87l-.14-.69h-2.39v12.92l2.72-.59v-3.13a3 3 0 001.93.7c1.94 0 3.72-1.59 3.72-5.11 0-3.22-1.8-4.97-3.71-4.97zm-.65 7.63a1.61 1.61 0 01-1.28-.52v-4.11a1.64 1.64 0 011.3-.55c1 0 1.68 1.13 1.68 2.58s-.69 2.6-1.7 2.6zM133.73 12.43c-2.62 0-4.21 2.26-4.21 5.11 0 3.37 1.88 5.08 4.56 5.08a6.12 6.12 0 003-.73v-2.25a5.79 5.79 0 01-2.7.62c-1.08 0-2-.39-2.14-1.7h5.38v-1c.09-2.87-1.27-5.13-3.89-5.13zm-1.47 4.07c0-1.26.77-1.79 1.45-1.79s1.4.53 1.4 1.79zM113 13.36l-.17-.82h-2.32v9.71h2.68v-6.58a1.87 1.87 0 012.05-.58v-2.55a1.8 1.8 0 00-2.24.82zM99.46 15.46c0-.44.36-.61.93-.61a5.9 5.9 0 012.7.72v-2.63a7 7 0 00-2.7-.51c-2.21 0-3.68 1.18-3.68 3.16 0 3.1 4.14 2.6 4.14 3.93 0 .52-.44.69-1 .69a6.78 6.78 0 01-3-.9V22a7.38 7.38 0 003 .64c2.26 0 3.82-1.15 3.82-3.16-.05-3.36-4.21-2.76-4.21-4.02zM107.28 10.24l-2.65.58v8.93a2.77 2.77 0 002.82 2.87 4.16 4.16 0 001.91-.37V20c-.35.15-2.06.66-2.06-1v-4h2.06v-2.34h-2.06zM116.25 11.7l2.73-.57V8.97l-2.73.57v2.16zM116.25 12.61h2.73v9.64h-2.73z"/></svg>
			</div>
			<div class="w-full sm:w-1/2 md:w-1/4 mt-8 md:mt-0 px-4">
				<h5 class="font-semibold mb-4 text-blue-300">CONTACT</h5>
				<div class="mb-4 rounded bg-white p-4 opacity-90">
					<img src="/images/logo-sm.jpg" class="h-12 block mx-auto" alt="">
				</div>
				<a class="hover:text-yellow-400 whitespace-normal break-words" href="#">support@diligenceinsights.com</a><br>
				<a class="hover:text-yellow-400" href="#">040-5487-5655</a>
			</div>
		</div> 
	</x-container>
	<div class="bg-blue-900 py-2 text-sm text-blue-300 text-center">
		<x-container>
			Copyrights ?? 2021 <a href="/" class="text-yellow-400">Diligense Insights</a> All rights reserved.
		</x-container>
	</div>
</footer>