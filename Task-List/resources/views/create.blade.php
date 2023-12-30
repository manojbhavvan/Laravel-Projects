@extends('layouts.app');

@section('title','Add Task')

@section('styles')
    <style>
        .error-message{
            color:red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    {{ $errors }}
    <form method="POST" action="{{ route('tasks.store') }}"></form>
    @csrf
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" />
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">
            Description
        </label>
        <textarea name="description" id="description" rows="5"></textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="long_description">
            Long Description
        </label>
        <textarea name="long_description" id="long_description" rows="10"></textarea>
        @error('long_description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button type="submit">Add Task</button>
    </div>
@endsection