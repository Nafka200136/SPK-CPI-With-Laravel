<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kandidat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container p-4 w-1/3">
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <a href="{{ route('alternatif.index') }}" class="bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">Kembali</a>
                            <h1 class="text-2xl font-semibold my-4">Edit Kandidat</h1>
                            <form action="{{ route('alternatif.update', $candidate->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700">Name:</label>
                                    <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required value="{{ old('name', $candidate->name) }}">
                                    @error('name')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
