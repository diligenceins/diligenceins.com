<div class="relative">
    @if (Session::has('message'))
    <div class="bg-green-400 relative mb-2 p-4 rounded shadow text-white text-sm font-semibold leading-tight pr-10">
        <p class="flex items-center mb-1"><i class="fas fa-check text-xs text-red-200 mr-2"></i>{{ session('message') }}</p>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-3 mr-3 outline-none focus:outline-none" onclick="closeAlert(event)">
            <span>×</span>
        </button>
    </div>
    @endif
</div>