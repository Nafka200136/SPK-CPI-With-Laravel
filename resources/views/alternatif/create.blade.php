<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kandidat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto p-4 w-1/2">
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <a href="{{ route('alternatif.index') }}" class="bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">Kembali</a>
                            <h1 class="text-2xl font-semibold my-4">Kandidat Baru</h1>
                            <form action="{{ route('alternatif.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700">Name:</label>
                                    <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required placeholder="Masukkan nama kandidat">
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
