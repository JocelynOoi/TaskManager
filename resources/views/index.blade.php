@extends('layouts.app')

@section('title', 'Task List')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        <table>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Due Date</th>
            <th colspan="2">Action</th>
            @foreach($tasks as $task)
                <div>
                    <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>@if($task->isCompleted == 1)
                            <span>Completed</span>
                        @else
                            <span>Pending</span>
                        @endif
                        </td>
                        <td>{{$task->due_date}}</td>
                    </tr>
                </div>
            @endforeach
        </table>
    </div>
@endsection