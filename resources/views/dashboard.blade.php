<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center font-extrabold text-4xl">
                    <img class="mx-auto mb-4" src="{{ asset('assets/img/logo.png') }}" alt="logo" width="250">
                    {{ __("SPK Metode CPI (Composite Performance Index)") }}
                    <p class="mt-8 text-justify font-normal text-2xl">
                        <span class="font-extrabold italic text-red-600">Comparative Performance Index (CPI)</span> adalah metode yang mengukur kinerja relatif dari alternatif dengan membandingkan nilai kinerja mereka terhadap kriteria yang ditetapkan. CPI memperhitungkan baik kriteria yang bersifat keuntungan (benefit) maupun biaya (cost).
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
