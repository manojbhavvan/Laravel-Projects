@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <div>
        {{-- @if (count($tasks)) --}}
        @forelse($tasks as $task)
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
            <br/>
        @empty
            <div>There are no tasks1</div>
            {{-- @endif --}}
        @endforelse
    </div>
@endsection
