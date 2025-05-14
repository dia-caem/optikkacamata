@extends('layouts.auth')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <div class="flex flex-col items-center">
        <!-- Gantikan logo dengan teks -->
        <div class="text-center mb-4">
            <h1 class="text-3xl font-extrabold text-blue-600 tracking-wide drop-shadow-sm">
                Wiratama
            </h1>
            <h2 class="text-lg font-semibold text-gray-500 uppercase tracking-widest">
                Kacamata 2
            </h2>
        </div>
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-4">Admin Login</h2>
    </div>

    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
        {{ $errors->first('email') }}
    </div>
    @endif

    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif


    <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Email Input -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                class="w-full border border-gray-300 p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Password Input -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Password</label>
            <input type="password" name="password" required
                class="w-full border border-gray-300 p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex justify-between items-center text-sm">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-500 focus:ring-blue-500">
                <span class="ml-2 text-gray-600">Ingat Saya</span>
            </label>
            <a href="#" class="text-blue-500 hover:underline">Lupa Password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-blue-600 text-white font-semibold p-3 rounded-lg hover:bg-blue-700 transition duration-200">
            Login
        </button>
    </form>

    <!-- Register Option -->
    <div class="text-center mt-6 text-sm text-gray-600">
        Belum punya akun? <a href="{{ route('admin.register') }}" class="text-blue-500 hover:underline">Daftar</a>
    </div>
</div>
</div>
@endsection