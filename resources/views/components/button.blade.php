<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-gray-900 border-2 border-gray-900 font-semibold text-sm text-white tracking-wide hover:bg-transparent hover:text-gray-900 active:bg-gray-800 focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
