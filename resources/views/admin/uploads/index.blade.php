<x-admin-layout>
    <x-slot name="header">
        <a href="{{ route('admin.users.create') }}" class="bg-white mr-2 whitespace-nowrap text-xs py-2 px-4 shadow rounded font-semibold inline-block">Add User</a>
        <x-admin-messages />
    </x-slot>
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-lg text-gray-700">
                    Users
                </h3>
            </div>
            </div>
        </div>
        <div class="block w-full overflow-x-auto">
            @if ($users)
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                        <tr>
                            <x-th>Name</x-th>
                            <x-th>Email</x-th>
                            <x-th>Role</x-th>
                            <x-th>Status</x-th>
                            <x-th>Last Updated</x-th>
                            <x-th></x-th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <x-td>{{ $user->name }}</x-td>
                                <x-td>{{ $user->email }}</x-td>
                                <x-td>{{ $user->role->name }}</x-td>
                                <x-td>{{ $user->is_active ? 'Active' : 'Inactive' }}</x-td>
                                <x-td>{{ $user->updated_at->diffForHumans() }}</x-td>
                                <x-td>
                                    <a href="#pablo-{{ $user->id }}" class="text-gray-500 inline-block" onclick="openDropdown(event,'users-{{ $user->id }}-dropdown')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <!-- DropDown -->
                                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg w-36 border" id="users-{{ $user->id }}-dropdown">
                                        <a href="{{ route('admin.users.edit', $user->id) }}"class="text-sm py-2 px-4 block w-full whitespace-nowrap">
                                            Edit
                                        </a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id]]) !!}
                                            <button type="submit" class="text-sm py-2 px-4 text-left block w-full whitespace-nowrap">Delete</button>
                                        {!! Form::close() !!}
                                    </div>
                                </x-td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-4 text-sm border-t mt-2">
                    {{ $users->onEachSide(5)->links() }}
                </div>
            @else
                <x-admin-alert>No Records Found</x-admin-alert>
            @endif
        </div>
    </div>

</x-admin-layout>