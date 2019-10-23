
@extends('layouts.app')

@section('content')


 <table>
     @foreach($task as $task)
     <tr>
         <td>
       {{$task->task}}
         </td>
         <td>
             <a  href="/task/{{$task->id}}/edit" class="btn btn-primary">edit</a>
         </td>
         <td>
             <form method="post" action="/task/{{$task->id}}">
                 @method('delete')
                 @csrf
                 <button type="submit" class="btn btn-danger">delete</button>
             </form>
         </td>
     </tr>
         @endforeach
 </table>

    @endsection
