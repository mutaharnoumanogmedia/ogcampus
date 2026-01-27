@section('title', 'Course Details - baaboo Campus')
@section('meta_description', 'View course details on baaboo Campus. Learn more about this course and start your learning journey.')
@section('og_title', 'Course Details - baaboo Campus')
@section('og_description', 'View course details on baaboo Campus. Learn more about this course and start your learning journey.')

<x-guest-layout>
    {{-- Course detail content will go here --}}
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12">
                <h1>Course Details</h1>
                <p>Course: {{ $slug ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
</x-guest-layout>

