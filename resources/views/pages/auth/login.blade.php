@extends('layouts.app', ['title' => 'Login'])

@section('content')
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center h-[calc(100vh-60px)]">
            <x-bladewind::card class="w-full max-w-md">
                <h1 class="text-2xl font-bold">Login</h1>
                <p class="text-sm text-gray-500">Welcome back to the platform</p>

                <form action="{{ route('auth.login') }}" method="POST" class="mt-6 space-y-4">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <x-label for="email" required>Email</x-label>
                            <x-bladewind::input name="email" placeholder="Email" type="email" required
                                :class="$errors->has('email') ? '!border-red-500' : ''" />
                            @error('email')
                                <p class="-mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="password" required>Password</x-label>
                            <x-bladewind::input name="password" placeholder="Password" type="password" suffix="eye"
                                viewable="true" required :class="$errors->has('password') ? '!border-red-500' : ''" />
                            @error('password')
                                <p class="-mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <x-bladewind::button color="primary" can_submit="true">Login</x-bladewind::button>
                        <a href="{{ route('auth.register.form') }}"
                            class="text-sm text-gray-500 hover:underline hover:text-blue-500">
                            Don't have an account?
                        </a>
                    </div>
                </form>
            </x-bladewind::card>
        </div>
    </div>
@endsection
