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

                        {{-- <form method="GET" action="{{ route('todos.edit', ['id' => $todo->id]) }}">
                            @csrf 
                            <input class="btn btn-info" type="submit" value="変更する">   
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('編集') }}
                                    </button>
                                </div>
                            </div>
                        </form> --}}

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
