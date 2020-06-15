@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- @foreach($reviews as $review) --}}
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">メモ</div>
                    <div class="card-body">一覧</div>
                </div>
            </div>
        {{-- @endforeach --}}
    </div>
</div>
@endsection
