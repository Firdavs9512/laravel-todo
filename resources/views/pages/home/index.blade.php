@extends('layouts.app', ['title' => 'Home'])

@section('content')
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="py-4 text-2xl font-bold">Home</h1>

        <div class="flex items-center justify-center h-[calc(100vh-120px)]">
            <img src="/images/todo-image.png" alt="Todo Image" class="w-full max-w-md">
        </div>
    </div>
@endsection
