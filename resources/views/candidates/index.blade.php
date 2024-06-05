<x-landing-page-layout>
    <!-- Content -->
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">CPI Calculation Process</h1>

            <!-- Detailed CPI Process -->
            <h2 class="text-2xl font-semibold text-gray-700 mb-2">Results</h2>
            <table class="min-w-full bg-white border border-gray-200 mb-8">
                <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b">Candidate</th>
                    <th class="py-2 px-4 border-b">Total Score</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($results as $result)
                    <tr class="text-center">
                        <td class="py-2 px-4 border-b">{{ $result['candidate'] }}</td>
                        <td class="py-2 px-4 border-b">{{ number_format($result['score'], 2) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @foreach ($details as $detail)
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">Candidate: {{ $detail['candidate'] }}</h2>
                <table class="min-w-full bg-white border border-gray-200 mb-8">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b">Criteria</th>
                        <th class="py-2 px-4 border-b">Score</th>
                        <th class="py-2 px-4 border-b">Normalized Score</th>
                        <th class="py-2 px-4 border-b">Weighted Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($detail['details'] as $d)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $d['criteria'] }}</td>
                            <td class="text-center py-2 px-4 border-b">{{ $d['score'] }}</td>
                            <td class="text-center py-2 px-4 border-b">{{ number_format($d['normalized_score'], 2) }}</td>
                            <td class="text-center py-2 px-4 border-b">{{ number_format($d['weighted_score'], 2) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
</x-landing-page-layout>
