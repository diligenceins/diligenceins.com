<div class="mb-4 w-full relative">
    @if (!Session::has('message') && !count($errors))
        <div class="h-8"></div>
    @endif
    @if (count($errors) > 0)
    <div class="bg-red-400 p-4 rounded shadow text-white text-sm font-semibold leading-tight">
        @foreach ($errors->all() as $error)
            <p class="flex items-center mb-1"><i class="fas fa-circle text-xs text-red-200 mr-2"></i>{{ $error }}</p>
        @endforeach
    </div>
    @endif
</div>