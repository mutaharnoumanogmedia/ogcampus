<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            Watch Time Analytics
        </h2>
    </x-slot>
    <div class="py-4 container max-w-4xl mx-auto">
        <div class="bg-white shadow rounded p-4">
            <h3 class="fs-5 fw-bold mb-3">Watch Time Overview</h3>
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Video</th>
                        <th scope="col">Total Watch Time</th>
                        <th scope="col">Avg. Watch Time</th>
                        <th scope="col">Views</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row, replace with @foreach -->
                    <tr>
                        <td class="fw-semibold">Intro to Laravel</td>
                        <td>320h 15m</td>
                        <td>12m 45s</td>
                        <td>800</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Advanced Eloquent</td>
                        <td>410h 10m</td>
                        <td>16m 20s</td>
                        <td>1,050</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
