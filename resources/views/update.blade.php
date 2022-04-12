@extends('layout')

@section('content')

<div class="row">
    <div class="mb-3">
        <form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post">
            {{ csrf_field() }}
        <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}" placeholder="Create a new todo">
        </form>
    </div>
</div>

@stop