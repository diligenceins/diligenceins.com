<x-admin-layout>
    <x-slot name="header">
        <a href="{{ route('admin.reports.create') }}" class="bg-white mr-2 whitespace-nowrap text-xs py-2 px-4 shadow rounded font-semibold inline-block">Add Report</a>
        <x-admin-messages />
    </x-slot>
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-lg text-gray-700">
                    Reports
                </h3>
            </div>
            </div>
        </div>
        <div class="block w-full overflow-x-auto">
            @if ($reports)
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                        <tr>
                            <x-th>title</x-th>
                            <x-th>sku</x-th>
                            <x-th>published</x-th>
                            <x-th>category</x-th>
                            <x-th>created by</x-th>
                            <x-th>status</x-th>
                            <x-th>Last Updated</x-th>
                            <x-th></x-th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr title="{{ $report->title }}">
                                <x-td>{{ Str::limit($report->title, 32, '...') }}</x-td>
                                <x-td>{{ $report->sku }}</x-td>
                                <x-td>{{ $report->published }}</x-td>
                                <x-td>{{ $report->category->name }}</x-td>
                                <x-td>{{ $report->user->name }}</x-td>
                                <x-td>{{ $report->status == 1 ? 'Active' : 'Disabled' }}</x-td>
                                <x-td>{{ $report->updated_at->diffForHumans() }}</x-td>
                                <x-td>
                                    <a href="#pablo-{{ $report->id }}" class="text-gray-500 inline-block" onclick="openDropdown(event,'reports-{{ $report->id }}-dropdown')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <!-- DropDown -->
                                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg w-36 border" id="reports-{{ $report->id }}-dropdown">
                                        <a href="{{ route('admin.reports.edit', $report->id) }}"class="text-sm py-2 px-4 block w-full whitespace-nowrap">
                                            Edit
                                        </a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.reports.destroy', $report->id]]) !!}
                                            <button type="submit" class="text-sm py-2 px-4 text-left block w-full whitespace-nowrap">Delete</button>
                                        {!! Form::close() !!}
                                    </div>
                                </x-td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-4 text-sm border-t mt-2">
                    {{ $reports->onEachSide(5)->links() }}
                </div>
            @else
                <x-admin-alert>No Records Found</x-admin-alert>
            @endif
        </div>
    </div>

</x-admin-layout>