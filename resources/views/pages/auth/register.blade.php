@extends('layouts.app', ['title' => 'Register'])

@section('content')
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center h-[calc(100vh-60px)]">
            <x-bladewind::card class="w-full max-w-md">
                <h1 class="text-2xl font-bold">Register</h1>
                <p class="text-sm text-gray-500">Create your account. It's free and only takes a minute.</p>

                <form action="" class="mt-6 space-y-4">
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="text-sm text-gray-700 dark:text-gray-300">Name</label>
                            <x-bladewind::input name="name" placeholder="Name" type="text" required />
                        </div>

                        <div>
                            <label for="email" class="text-sm text-gray-700 dark:text-gray-300">Email</label>
                            <x-bladewind::input name="email" placeholder="Email" type="email" required />
                        </div>

                        <div>
                            <label for="password" class="text-sm text-gray-700 dark:text-gray-300">Password</label>
                            <x-bladewind::input name="password" placeholder="Password" type="password" suffix="eye"
                                viewable="true" required />
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <x-bladewind::button color="primary" type="submit">Register</x-bladewind::button>
                        <a href="{{ route('auth.login') }}"
                            class="text-sm text-gray-500 hover:underline hover:text-blue-500">
                            Already have an account?
                        </a>
                    </div>
                </form>
            </x-bladewind::card>
        </div>
    </div>
@endsection
