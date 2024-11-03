@extends('layouts.app', ['title' => 'Create Todo'])

@section('content')
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="py-4 text-2xl font-bold">Todo</h1>

        <div class="mt-6 mb-12" x-data="{ selectedId: '' }">
            <x-bladewind::table bordered>
                <x-slot name="header">
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th class="!text-right">Action</th>
                </x-slot>
                @forelse ($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>
                            <div class="flex justify-center">
                                @if ($todo->is_completed)
                                    <div class="!inline-block px-2 py-1 text-green-500 border border-green-500 rounded-lg">
                                        Yes
                                    </div>
                                @else
                                    <div class="!inline-block px-2 py-1 text-red-500 border border-red-500 rounded-lg">
                                        No
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td class="text-right">
                            <x-bladewind::button color="primary" tag="a" icon="pencil"
                                href="{{ route('todo.edit', $todo->id) }}">Edit</x-bladewind::button>
                            <x-bladewind::button color="red" icon="trash"
                                @click="selectedId = {{ $todo->id }}; showModal('delete-todo')"
                                id="delete-todo-{{ $todo->id }}">Delete</x-bladewind::button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No data found</td>
                    </tr>
                @endforelse

            </x-bladewind::table>

            @if ($todos->count() > 0)
                <div class="mt-3 text-sm text-gray-500">Total Todos: {{ $todos->count() }}</div>
            @endif

            <x-bladewind::modal show_action_buttons="false" type="error" title="Confirm Delete" name="delete-todo">
                Are you sure you want to delete this todo?
                <div class="flex justify-end mt-4 space-x-3">
                    <x-bladewind::button color="gray" @click="hideModal('delete-todo')">Cancel</x-bladewind::button>
                    <form :action="'/todo/' + selectedId" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <x-bladewind::button color="red" can_submit="true">Delete</x-bladewind::button>
                    </form>
                </div>
            </x-bladewind::modal>
        </div>
    </div>
@endsection
