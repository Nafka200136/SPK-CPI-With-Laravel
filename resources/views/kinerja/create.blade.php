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
                    <div class="container mx-auto p-4 w-1/2">
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <a href="{{ route('kinerja.index') }}" class="bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">Kembali</a>
                            <h1 class="text-2xl font-semibold my-4">Create Score</h1>
                            <form action="{{ route('kinerja.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="candidate_id" class="block text-gray-700">Candidate</label>
                                    <select name="candidate_id" id="candidate_id" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                                        @foreach($candidates as $candidate)
                                            <option value="{{ $candidate->id }}">{{ $candidate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="criteria_id" class="block text-gray-700">Criteria</label>
                                    <select name="criteria_id" id="criteria_id" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                                        @foreach($criterias as $criteria)
                                            <option value="{{ $criteria->id }}">{{ $criteria->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="value" class="block text-gray-700">Value</label>
                                    <input type="number" name="value" id="value" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" step="0.01" min="0" max="100">
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
