@extends('layouts.app')

@section('content')

    <h1 class="heading text-center">登録が完了しました！</h1>
    <div class="container">
        @foreach ($inputs as $input)
            <p>{{ $input }}</p>
        @endforeach
    </div>
@endsection