@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <div>
        {{-- @if (count($tasks)) --}}
        @forelse($tasks as $task)
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        @empty
            <div>There are no tasks1</div>
            {{-- @endif --}}
        @endforelse
    </div>
@endsection
