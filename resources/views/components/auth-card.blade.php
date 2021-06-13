<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-blue-400 to-blue-600 bg-pattern">
    <div class="w-full sm:max-w-sm mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="hidden">
            {{ $logo }}
        </div>
        <div class="mb-8 mt-4 flex justify-center">
            <img class="w-32" src="{{ asset('images/logo.jpg') }}">
        </div>
        {{ $slot }}
    </div>
</div>
