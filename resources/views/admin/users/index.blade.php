@extends('layouts.admin')

@section('content')
<h2 class="text-xl font-bold mb-4">Daftar Pengguna</h2>

<!-- Tombol Tambah Pengguna -->
<a href="{{ route('admin.users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
    Tambah Pengguna
</a>

<table class="min-w-full bg-white border border-gray-300">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="py-3 px-4 border border-gray-300">ID</th>
            <th class="py-3 px-4 border border-gray-300">Nama</th>
            <th class="py-3 px-4 border border-gray-300">Email</th>
            <th class="py-3 px-4 border border-gray-300">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr class="border-b border-gray-300">
            <td class="py-3 px-4 border border-gray-300 text-center">{{ $user->id }}</td>
            <td class="py-3 px-4 border border-gray-300 text-center">{{ $user->name }}</td>
            <td class="py-3 px-4 border border-gray-300 text-center">{{ $user->email }}</td>
            <td class="py-3 px-4 border border-gray-300 text-center">
                <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection