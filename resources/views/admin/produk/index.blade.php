@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Kelola Produk</h2>
        <a href="{{ route('admin.produk.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">Tambah Produk</a>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 border border-gray-300">No</th>
                    <th class="py-3 px-4 border border-gray-300">Jenis</th>
                    <th class="py-3 px-4 border border-gray-300">Bahan</th>
                    <th class="py-3 px-4 border border-gray-300">Harga</th>
                    <th class="py-3 px-4 border border-gray-300">Gambar</th>
                    <th class="py-3 px-4 border border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-gray-100">
                @foreach($produk as $index => $item)
                <tr class="border-b border-gray-300">
                    <td class="py-3 px-4 border border-gray-300 text-center">{{ $produk->firstItem() + $index }}</td>
                    <td class="py-3 px-4 border border-gray-300 text-center">{{ $item->jenis_lensa }}</td>
                    <td class="py-3 px-4 border border-gray-300 text-center">{{ $item->bahan_lensa }}</td>
                    <td class="py-3 px-4 border border-gray-300 text-center">Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td class="py-3 px-4 border border-gray-300 text-center">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="w-16 h-16 object-cover rounded-md mx-auto">
                    </td>
                    <td class="py-3 px-4 border border-gray-300 text-center">
                        <a href="{{ route('admin.produk.edit', $item->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="inline-block">
                            @csrf @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Ini untuk pagination --}}
    <div class="mt-4">
        {{ $produk->links() }}
    </div>
</div>
@endsection