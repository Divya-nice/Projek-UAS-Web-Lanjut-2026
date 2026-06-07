@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 pb-20">
    @include('partials.header')

    <main class="max-w-5xl mx-auto p-6">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Halo, Admin GemaAksara</h1>
            <p class="text-gray-500">Kelola literasi hari ini</p>
        </div>

        <div class="grid grid-cols-2 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                <p class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Total Aksi</p>
                <p class="text-4xl font-bold text-gray-800 mt-2">24</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                <p class="text-gray-500 text-sm font-semibold uppercase tracking-wider">Relawan</p>
                <p class="text-4xl font-bold text-rose-600 mt-2">128</p>
            </div>
        </div>

        <h2 class="text-xl font-bold text-gray-800 mb-6">Aksi Manajemen</h2>
        <div class="space-y-4">
            <a href="{{ route('aksi.create') }}" class="block p-6 bg-white rounded-2xl border border-gray-200 hover:border-teal-500 transition shadow-sm">
                <div class="flex items-center">
                    <div class="bg-teal-50 p-3 rounded-xl mr-4 text-teal-600">➕</div>
                    <span class="text-lg font-semibold text-gray-700">Buat Aksi Baru</span>
                </div>
            </a>
            <a href="{{ route('aksi.index') }}" class="block p-6 bg-white rounded-2xl border border-gray-200 hover:border-teal-500 transition shadow-sm">
                <div class="flex items-center">
                    <div class="bg-teal-50 p-3 rounded-xl mr-4 text-teal-600">📋</div>
                    <span class="text-lg font-semibold text-gray-700">Lihat Semua Aksi</span>
                </div>
            </a>
        </div>
    </main>
</div>
@endsection