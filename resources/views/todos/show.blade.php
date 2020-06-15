@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('詳細') }}</div>

                <div class="card-body">
                    {{ $todo->body }}
                </div>

                <form method="GET" action="{{ route('todos.edit', ['id' => $todo->id]) }}">
                    @csrf
                    <input class="btn btn-info" type="submit" value="編集">
                </form>

                <form method="POST" action="{{ route('todos.destroy', ['id' => $todo->id])}}">
                    @csrf
                    <input class="btn btn-danger" type="submit" value="削除">
                </form>

            </div>
        </div>
    </div>
</div>
@endsection