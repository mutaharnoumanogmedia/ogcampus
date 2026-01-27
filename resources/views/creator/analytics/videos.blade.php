<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            Videos Analytics
        </h2>
    </x-slot>
    <div class="py-4 container">
        <div class="bg-white shadow rounded p-4">
            <h3 class="fs-5 fw-bold mb-4">Your Videos Overview</h3>
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Video</th>
                        <th scope="col">Views</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Avg. Watch Time</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row, replace with @foreach -->
                    <tr>
                        <td class="fw-semibold">Intro to Laravel</td>
                        <td>800</td>
                        <td>120</td>
                        <td>12m 45s</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Advanced Eloquent</td>
                        <td>1,050</td>
                        <td>210</td>
                        <td>16m 20s</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
