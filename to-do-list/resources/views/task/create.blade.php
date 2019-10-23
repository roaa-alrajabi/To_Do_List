@extends('layouts.app')

@section('content')
<form method="post" action="{{route("task.store")}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Add Task</label>
        <input type="text"  name="Task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter task">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
