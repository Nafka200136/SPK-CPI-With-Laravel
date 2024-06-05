<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Kinerja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-white p-6">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <h1 class="text-2xl font-semibold">Kinerja Kandidat</h1>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <a href="{{ route('kinerja.create') }}" class="bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">Tambah</a>
                        </div>

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <div class="overflow-x-auto shadow-lg">
                            <table class="min-w-full bg-white">
                                <thead class="bg-yellow-300">
                                <tr>
                                    <th class="py-3 px-4 border-b border-gray-200 text-left">Nama Kandidat</th>
                                    <th class="py-3 px-4 border-b border-gray-200 text-left">Kriteria</th>
                                    <th class="py-3 px-4 border-b border-gray-200 text-left">Nilai Kinerja</th>
                                    <th class="py-3 px-4 border-b border-gray-200 text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($scores as $score)
                                    <tr>
                                        <td class="py-2 px-4 border-b border-gray-200">{{ $score->candidate->name }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200">{{ $score->criteria->name }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200">{{ $score->value }}</td>
                                        <td class="py-2 px-4 border-b border-gray-200 flex justify-center items-center space-x-2">
                                            <a href="{{ route('kinerja.edit', $score->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded w-20 text-center hover:bg-yellow-600">Edit</a>
                                            <form action="{{ route('kinerja.destroy', $score->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded w-20 text-center hover:bg-red-600">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $scores->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
