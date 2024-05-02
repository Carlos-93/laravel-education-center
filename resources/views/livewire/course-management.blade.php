@section('title', 'Courses')

<div>
    <form wire:submit.prevent="saveCourse">
        <input type="text" wire:model="title" placeholder="Title for the course">
        <textarea wire:model="description" placeholder="Description for the course"></textarea>
        <input type="number" wire:model="teacher_id" placeholder="ID of the teacher">
        <button type="submit">Save Course</button>
    </form>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course->title }} - {{ $course->teacher->name }}</li>
        @endforeach
    </ul>
</div>
