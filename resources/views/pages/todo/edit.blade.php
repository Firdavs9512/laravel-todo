@extends('layouts.app', ['title' => 'Edit Todo'])

@section('content')
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center h-[calc(100vh-60px)]">
            <x-bladewind::card class="w-full max-w-md">
                <h1 class="text-2xl font-bold">Edit Todo</h1>
                <p class="text-sm text-gray-500">Edit your todo here</p>

                <form action="{{ route('todo.update', $todo->id) }}" method="POST" class="mt-6 space-y-4">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <div>
                            <x-label for="title" required>Title</x-label>
                            <x-bladewind::input name="title" placeholder="Title" type="text" required
                                value="{{ old('title', $todo->title) }}" :class="$errors->has('title') ? '!border-red-500' : ''" />
                            @error('title')
                                <p class="-mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="description">Description</x-label>
                            <x-bladewind::textarea name="description" placeholder="Description"
                                selected_value="{{ old('description', $todo->description) }}" :class="$errors->has('description') ? '!border-red-500' : ''">
                                {{ $todo->description }}
                            </x-bladewind::textarea>
                            @error('description')
                                <p class="-mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-bladewind::checkbox name="is_completed" :checked="old('is_completed', $todo->is_completed)" label="Completed" value="1" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <x-bladewind::button color="primary" can_submit="true">Update</x-bladewind::button>
                    </div>
                </form>
            </x-bladewind::card>
        </div>
    </div>
@endsection
