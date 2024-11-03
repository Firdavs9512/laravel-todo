@extends('layouts.app', ['title' => 'Create Todo'])

@section('content')
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="py-4 text-2xl font-bold">Todo</h1>

        <div class="mt-6 mb-12">
            <x-bladewind::table bordered>
                <x-slot name="header">
                    <th>Completed</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th class="!text-right">Action</th>
                </x-slot>
                @foreach (range(1, 10) as $i)
                    <tr>
                        <td>
                            <x-bladewind::checkbox />
                        </td>
                        <td>Title</td>
                        <td>Description</td>
                        <td class="text-right">
                            <x-bladewind::button color="primary" icon="pencil">Edit</x-bladewind::button>
                            <x-bladewind::button color="red" icon="trash">Delete</x-bladewind::button>
                        </td>
                    </tr>
                @endforeach
            </x-bladewind::table>

            <div class="mt-3 text-sm text-gray-500">Total Todos: 10</div>
        </div>
    </div>
@endsection
