@extends('layouts.app')
@section('content')
    <form method='POST' action="{{ route('update_task', $task->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <h1> Edit this Task </h1>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' placeholder="Enter the title"
                value="{{ $task->title }}">
        </div>
        <div class="form-group">
            <label for="description">Task description </label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $task->description }}</textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="completed" name="is_completed"
                @if ($task->is_completed == true) checked @endif>
            <label class="form-check-label" for="completed">
                is completed
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
@endsection
