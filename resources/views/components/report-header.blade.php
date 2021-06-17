<div style="background-image: url('{{ asset('images/pattern-1.jpg') }}'); background-color: #012f6b" class="relative bg-cover md:bg-contain bg-no-repeat bg-right-top text-white pt-8 pb-32">
    <div class="absolute inset-0 bg-blue-900 opacity-80 lg:opacity-50"></div>
    <x-container containerClasses="z-10 relative">
        {{ $slot }}
    </x-container>
</div>