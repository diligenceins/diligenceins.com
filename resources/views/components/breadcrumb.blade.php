<header class="bg-blue-50 border-b border-blue-100 py-2 leading-6 text-sm text-gray-600">
    <x-container>
        <ul class="flex items-center flex-wrap">
            @if ($list && count($list) > 0)
                @foreach ($list as $item => $value)
                    <li>
                        @if (is_array($value))
                            <a href="{{ route($value[0], $value[1]) }}">{{ Str::ucfirst($item) }}</a>
                        @else
                            <a href="{{ route($value) }}">{{ Str::ucfirst($item) }}</a>
                        @endif
                    </li>
                    <li class="mx-1">/</li>
                @endforeach
            @endif
            <li class="text-gray-400">{{ $active }}</li>
        </ul>
    </x-container>
</header>