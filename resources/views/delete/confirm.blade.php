@extends('layouts.app')

@section('content')
    <h1 class="heading text-center">確認画面</h1>
    <div class="container warning-container">

        <h2 class="text-center">以下の内容で削除します</h2>
        <div class="container">
            @foreach ($info as $item)
                <p>{{ $item }}</p>
            @endforeach
            <p>{{ $info }}</p>

            <h5>{{ $info['group'] }}</h5>
        </div>
        <h5 class="text-center">削除を実行しますか？</h5>

        <p>入力値は{{ $number }}です</p>

        <div class="button-container row">
            <div class="col-md-6">
                <button class="btn btn-success back" type="submit">キャンセル</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-warning col-md-6" type="submit">削除する</button>
            </div>
        </div>
@endsection