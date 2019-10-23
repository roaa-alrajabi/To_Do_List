@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('task.update',$task->id)}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1"> Task</label>
            <input type="text"  name="Task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter task" value="{{$task->task}}">
        </div>
        <button type="submit" class="btn btn-primary">edit</button>
    </form>
@endsection
