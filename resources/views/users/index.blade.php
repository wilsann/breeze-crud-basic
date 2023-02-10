<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    + Create User
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800">
                <table class="table-auto w-full dark:text-gray-200">
                    <thead>
                        <tr>
                            <th class="border px-6 py-4 dark:border-gray-700">Id</th>
                            <th class="border px-6 py-4 dark:border-gray-700">Name</th>
                            <th class="border px-6 py-4 dark:border-gray-700">Email</th>
                            {{-- <th class="border px-6 py-4">Roles</th> --}}
                            <th class="border px-6 py-4 dark:border-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user as $index => $item)
                        <tr>
                            <td class="border px-6 py-4 dark:border-gray-700">{{ $user->firstItem() + $index }}</td>
                            <td class="border px-6 py-4 dark:border-gray-700">{{ $item->name }}</td>
                            <td class="border px-6 py-4 dark:border-gray-700">{{ $item->email }}</td>
                            {{-- <td class="border px-6 py-4">{{ $item->roles }}</td> --}}
                            <td class="border px-6 py-4 dark:border-gray-700 text-center">
                                <a href="{{ route('users.edit', $item->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 mx-2 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('users.destroy', $item->id) }}" method="POST" class="inline-block">
                                    {!! method_field('delete') . csrf_field() !!}
                                    <button type="submit" onclick="confirm('Anda yakin ingin menghapus?')" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 mx-2 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="border text-center p-5">
                                    Data tidak ditemukan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-5">
                {{ $user->links() }}
            </div>
        </div>
    </div>
</x-app-layout>