<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kriteria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container p-4 w-1/2">
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <a href="{{ route('kriteria.index') }}" class="bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">Kembali</a>
                            <h1 class="text-2xl font-semibold my-4">Edit Criteria</h1>
                            <form action="{{ route('kriteria.update', $criteria->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" value="{{ old('name', $criteria->name) }}">
                                    @error('name')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="type" class="block text-gray-700">Type</label>
                                    <select name="type" id="type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                                        <option value="benefit" {{ old('type', $criteria->type) == 'benefit' ? 'selected' : '' }}>Benefit</option>
                                        <option value="cost" {{ old('type', $criteria->type) == 'cost' ? 'selected' : '' }}>Cost</option>
                                    </select>
                                    @error('type')
                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="value" class="block text-gray-700">Weight (%)</label>
                                    <input type="number" name="value" id="value" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" value="{{ old('value', $criteria->weight->value) }}" step="0.01" min="0" max="100">
                                    @error('value')
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
