@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <h3>Description</h3>
    <p>{{ $task->description }}</p>

    <h3>Long Description</h3>
    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <h3>Created At</h3>
    <p>{{ $task->created_at }}</p>

    <h3>Updated At</h3>
    <p>{{ $task->updated_at }}</p>

    <p>
        @if ($task->completed)
            Completed
        @else
            Not Completed
        @endif
    </p>

    <div>
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>
    </div>

    <div>
        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button type="submit">
                Mark as {{ $task->completed ? 'not completed' : 'completed' }}
            </button>
        </form>
    </div>

    <div>
        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
