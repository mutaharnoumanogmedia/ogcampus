<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            Seasons Analytics
        </h2>
    </x-slot>
    <div class="py-4 container">
        <div class="bg-white shadow rounded p-4">
            <h3 class="fs-5 fw-bold mb-3">Your Seasons Overview</h3>
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Season</th>
                        <th scope="col">Videos</th>
                        <th scope="col">Total Views</th>
                        <th scope="col">Avg. Watch Time</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row, replace with @foreach -->
                    <tr>
                        <td class="fw-semibold">Season 1</td>
                        <td>8</td>
                        <td>1,200</td>
                        <td>15m 30s</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Season 2</td>
                        <td>10</td>
                        <td>2,340</td>
                        <td>18m 10s</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
