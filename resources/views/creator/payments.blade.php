@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h1 class="mb-4">My Subscription Payments</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Payment Date</th>
                        <th>Amount</th>
                        <th>Plan</th>
                        <th>Status</th>
                        <th>Transaction ID</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row, replace with @foreach -->
                    <tr>
                        <td>2026-01-10</td>
                        <td>$29.99</td>
                        <td>Pro Creator</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>TXN123456</td>
                    </tr>
                    <tr>
                        <td>2025-12-10</td>
                        <td>$29.99</td>
                        <td>Pro Creator</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>TXN123455</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
