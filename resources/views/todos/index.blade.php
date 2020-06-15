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
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
