@extends('layouts.app', ['title' => 'Create Todo'])

@section('content')
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center h-[calc(100vh-60px)]">
            <x-bladewind::card class="w-full max-w-md">
                <h1 class="text-2xl font-bold">Create Todo</h1>
                <p class="text-sm text-gray-500">Create your todo here</p>

                <form action="" class="mt-6 space-y-4">
                    <div class="space-y-4">
                        <div>
                            <x-label for="title" required>Title</x-label>
                            <x-bladewind::input name="title" placeholder="Title" type="text" required />
                        </div>

                        <div>
                            <x-label for="description">Description</x-label>
                            <x-bladewind::textarea name="description" placeholder="Description" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <x-bladewind::button color="primary" type="submit">Create</x-bladewind::button>
                    </div>
                </form>
            </x-bladewind::card>
        </div>
    </div>
@endsection
