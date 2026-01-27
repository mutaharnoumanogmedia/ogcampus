@extends('layouts.app')

@section('content')
<div class="user-session-detail">
    <h2>Session Details</h2>
    <p>Video player placeholder for session ID: {{ $sessionId ?? 'unknown' }}</p>
</div>
@endsection
