@extends('layouts.app')

@section('content')

    <h1 class="heading text-center">削除ページ</h1>
    <div class="container warning-container">

        <h5 class="text-center heading">該当データの削除が完了しました</h5>

        <div class="button-container">
            <a class="link-button btn-success btn" href="{{ route('top') }}">トップページへ</a>
        </div>

    </div>
@endsection