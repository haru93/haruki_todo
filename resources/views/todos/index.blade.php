@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($todos as $todo)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">メモ</div>
                    <div class="card-body">
                        {{ $todo->body }}
                        <a href="{{ route('todos.show', ['id' => $todo->id ]) }}">詳細をみる</a>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach($deleted as $delete)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">削除済メモ</div>
                    <div class="card-body">
                        {{ $delete->body }}
                        <a href="{{ route('todos.restore', ['id' => $delete->id ]) }}">復旧</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
