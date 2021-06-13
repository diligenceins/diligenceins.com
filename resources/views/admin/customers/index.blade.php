<x-admin-layout>
    <x-slot name="header">
        <x-admin-messages />
    </x-slot>
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-lg text-gray-700">
                    Customers
                </h3>
            </div>
            </div>
        </div>
        <div class="block w-full overflow-x-auto">
            @if ($customers)
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                        <tr>
                            <x-th>Name</x-th>
                            <x-th>Email</x-th>
                            <x-th>Status</x-th>
                            <x-th>Last Updated</x-th>
                            <x-th></x-th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <x-td>{{ $customer->name }}</x-td>
                                <x-td>{{ $customer->email }}</x-td>
                                <x-td>{{ $customer->is_active ? 'Active' : 'Inactive' }}</x-td>
                                <x-td>{{ $customer->updated_at->diffForHumans() }}</x-td>
                                <x-td>
                                    <a href="#pablo-{{ $customer->id }}" class="text-gray-500 inline-block" onclick="openDropdown(event,'customers-{{ $customer->id }}-dropdown')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <!-- DropDown -->
                                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg w-36 border" id="customers-{{ $customer->id }}-dropdown">
                                        {!! Form::open(['method' => 'PATCH', 'route' => ['admin.customers.update', $customer->id]]) !!}
                                            {!! Form::hidden('is_active', $customer->isActive() ? 0 : 1) !!}
                                            <button type="submit" class="text-sm py-2 px-4 text-left block w-full whitespace-nowrap">
                                                @if ($customer->isActive())
                                                    Disable
                                                @else
                                                    Activate
                                                @endif
                                            </button>
                                        {!! Form::close() !!}

                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.customers.destroy', $customer->id]]) !!}
                                            <button type="submit" class="text-sm py-2 px-4 text-left block w-full whitespace-nowrap">Delete</button>
                                        {!! Form::close() !!}
                                    </div>
                                </x-td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-4 text-sm border-t mt-2">
                    {{ $customers->onEachSide(5)->links() }}
                </div>
            @else
                <x-admin-alert>No Records Found</x-admin-alert>
            @endif
        </div>
    </div>

</x-admin-layout>