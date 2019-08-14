@extends('layouts.app')

@section('content')

    <h1>Taskリスト</h1>
    
    @if(count($tasks)>0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>やること</th>
                    <th>状況</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show',$task->id,['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create','新規タスク',[],['class'=>'btn btn-primary']) !!}
@endsection