<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex" x-data="{ open: true }">

    <!-- Sidebar -->
    <aside :class="open ? 'w-64' : 'w-20'" class="bg-blue-900 text-white flex flex-col min-h-screen transition-all duration-300">
        <div class="p-5 text-center font-bold text-lg bg-blue-800 flex justify-between items-center">
            <span x-show="open">WIRATAMA KACAMATA 2</span>
            <button @click="open = !open" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <nav class="flex-1 px-2" x-show="open">
            <ul>
                <li class="py-2">
                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                        <span data-lucide="home" class="mr-2"></span> Dashboard
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                        <span data-lucide="user" class="mr-2"></span> User
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('admin.produk.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                        <span data-lucide="package" class="mr-2"></span> Produk
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('admin.produk.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                        <span data-lucide="users" class="mr-2"></span> Pelanggan
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('admin.produk.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                        <span data-lucide="history" class="mr-2"></span> History
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{ route('admin.produk.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                        <span data-lucide="settings" class="mr-2"></span> Setting
                    </a>
                </li>
                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="block px-4 py-2 rounded hover:bg-red-600 w-full text-left flex items-center">
                        <span data-lucide="log-out" class="mr-2"></span> LogOut
                    </button>
                </form>
            </ul>
        </nav>

    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen">
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a8 8 0 100 15.292M15.5 12a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0z" />
                </svg>
                <h1 class="text-xl font-bold text-blue-800 tracking-wide">LensLab Wiratama</h1>
            </div>
            <span class="text-gray-700">Halo, {{ Auth::user()->name }}</span>
        </header>

        <main class="p-6 flex-1 overflow-auto">
            @yield('content')
        </main>
    </div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            lucide.createIcons();
        });
    </script>

</body>

</html>