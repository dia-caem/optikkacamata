@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Edit User</h2>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Penting untuk method PUT -->

        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Password (Opsional)</label>
            <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Biarkan kosong jika tidak diubah">
        </div>

        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">Update</button>
    </form>
</div>
@endsection