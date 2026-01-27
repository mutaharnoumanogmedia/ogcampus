<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            Reviews Analytics
        </h2>
    </x-slot>
    <div class="py-4 container max-w-4xl mx-auto">
        <div class="bg-white shadow rounded p-4">
            <h3 class="fs-5 fw-bold mb-4">Recent Reviews</h3>
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Series</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Review</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row, replace with @foreach -->
                    <tr>
                        <td class="fw-semibold">John Doe</td>
                        <td>Laravel Basics</td>
                        <td>5</td>
                        <td>Great course, very helpful!</td>
                        <td>2026-01-20</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">Jane Smith</td>
                        <td>Vue Mastery</td>
                        <td>4</td>
                        <td>Well structured and clear.</td>
                        <td>2026-01-18</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
