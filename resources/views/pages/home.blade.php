@extends('layouts.main')

@section('content')
<div class="space-y-8">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Dashboard
            </h1>
            <p class="text-gray-500 mt-1">
                Selamat datang kembali 👋, semoga harimu produktif
            </p>
        </div>

        <div class="mt-4 md:mt-0">
            <button class="px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition">
                + Tambah Data
            </button>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-sm text-gray-500">Total User</p>
            <h2 class="text-3xl font-bold text-gray-800 mt-2">1.245</h2>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-sm text-gray-500">Pengunjung Hari Ini</p>
            <h2 class="text-3xl font-bold text-gray-800 mt-2">312</h2>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-sm text-gray-500">Data Aktif</p>
            <h2 class="text-3xl font-bold text-gray-800 mt-2">87%</h2>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-sm text-gray-500">Status Server</p>
            <h2 class="text-xl font-semibold text-green-600 mt-3">
                Online ●
            </h2>
        </div>
    </div>

    <!-- Content Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Main Content -->
        <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-sm">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                Aktivitas Terbaru
            </h3>

            <ul class="space-y-4">
                <li class="flex justify-between text-gray-600">
                    <span>User baru mendaftar</span>
                    <span class="text-sm">2 menit lalu</span>
                </li>
                <li class="flex justify-between text-gray-600">
                    <span>Data berhasil diperbarui</span>
                    <span class="text-sm">10 menit lalu</span>
                </li>
                <li class="flex justify-between text-gray-600">
                    <span>Backup sistem selesai</span>
                    <span class="text-sm">1 jam lalu</span>
                </li>
            </ul>
        </div>

        <!-- Side Info -->
        <div class="bg-white p-6 rounded-xl shadow-sm">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                Info Sistem
            </h3>

            <div class="space-y-3 text-gray-600">
                <p>Laravel: <span class="font-medium text-gray-800">v10</span></p>
                <p>Environment: <span class="font-medium text-gray-800">Local</span></p>
                <p>Status: <span class="font-medium text-green-600">Stabil</span></p>
            </div>
        </div>

    </div>

</div>
@endsection
